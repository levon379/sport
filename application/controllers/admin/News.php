<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class News extends CI_Controller {



    public function index($id = null) {

        //////////pagiantion
        $this->load->library('pagination');
        $this->load->library('form_validation');
        $config['base_url'] = base_url() . 'index.php/admin/news';
        $config['total_rows'] = $this->db->count_all('news');
        $config['per_page'] = 10;
        $config['full_tag_open'] = '<ul class="pagination">';
        $config['full_tag_close'] = '</ul>';
        $config['first_link'] = false;
        $config['last_link'] = false;
        $config['first_tag_open'] = '<li>';
        $config['first_tag_close'] = '</li>';
        $config['prev_link'] = '&laquo';
        $config['prev_tag_open'] = '<li class="prev">';
        $config['prev_tag_close'] = '</li>';
        $config['next_link'] = '&raquo';
        $config['next_tag_open'] = '<li>';
        $config['next_tag_close'] = '</li>';
        $config['last_tag_open'] = '<li>';
        $config['last_tag_close'] = '</li>';
        $config['cur_tag_open'] = '<li class="active"><a href="#">';
        $config['cur_tag_close'] = '</a></li>';
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';
        //var_dump($this->uri->segment(3));die;
        $this->pagination->initialize($config);
        $this->load->model('news_model');
        $data['news'] = $this->news_model->get_news_admin($id, $config['per_page'], $this->uri->segment(3));

        $this->load->view('admin/news/index', $data);
    }

//////////////////////admin//////////////////////////////

    public function admin_news_show($id) {
        $this->load->model('news_model');
        $data['news_show'] = $this->news_model->get_news_show($id);
        $this->load->view('admin/news/show', $data);
    }
    public function create_news() {
        $this->load->view('admin/news/create');
    }
    public function edit_news($id) {
        $this->load->model('news_model');
        $data['news_show'] = $this->news_model->get_news_show($id);
        $this->load->view('admin/news/edit',$data);
    }
    public function add_news() {
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');

        $this->form_validation->set_rules('title', 'title', 'trim|required');
        $this->form_validation->set_rules('description', 'description', 'trim|required');
        if (empty($_FILES['file_name']['name']))
        {
            $this->form_validation->set_rules('file_name', 'Document', 'required');
        }

        if ($this->form_validation->run() == FALSE) {
            $this->session->set_flashdata('delete_error_message', 'try again');
            redirect('/admin/news', 'location');
            $this->form_validation->set_error_delimiters('<div class="text-danger">', '</div>');
        } else {
            $data['title'] = $this->input->post('title');
            $data['description'] = $this->input->post('description');
            $data['created_date'] = date('d.m.y');

            $config['upload_path'] = APPPATH.'/../public/uploads/news/';
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            $config['max_size'] = '1000';
            $this->load->library('upload', $config);
            $this->upload->do_upload('file_name');
            $image_data = $this->upload->data();
            $data['file_name'] = $image_data['file_name'];
            if ($this->upload->do_upload('file_name') === FALSE)
            {
                // Some error occured
                var_dump($this->upload->display_errors('', ''));
//                var_dump($_FILES);die;
            }
//            echo $this->upload->display_errors('<p style="color:#FF0000;">', '</p>');
            $this->load->model('news_model');
            $this->news_model->add_news($data);

            $this->session->set_flashdata('success', 'Information created');
            redirect('/admin/news', 'location');
        }
    }

    public function edit_news_save() {
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');

        $this->form_validation->set_rules('title', 'title', 'required');
        $this->form_validation->set_rules('description', 'description', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->form_validation->set_error_delimiters('<div class="text-danger">', '</div>');
            redirect('/admin/news', 'location');
        } else {
            $data['id'] = $this->input->post('id');
            $data['title'] = $this->input->post('title');
            $data['description'] = $this->input->post('description');

            $config['upload_path'] = APPPATH.'/../public/uploads/news/';
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            $config['max_size'] = '1000';
            $this->load->library('upload', $config);
            $this->upload->do_upload('file_name');
            $image_data = $this->upload->data();
            $data['file_name'] = $image_data['file_name'];

            $this->load->model('news_model');
            $this->news_model->edit_news($data);

            $this->session->set_flashdata('success', 'Information edited');
            redirect('/admin/news/', 'location');
        }
    }

    public function delete_news($id) {


        $this->load->model('news_model');
        $this->news_model->delete_news($id);
        $this->load->library('session');
        $this->session->set_flashdata('success', 'Information deleted');
        redirect('/admin/news/', 'location');
    }

}