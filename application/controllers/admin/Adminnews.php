<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Adminnews extends CI_Controller {



    public function add_categories() {
        $this->load->helper(array('form', 'url'));

        $this->load->library('form_validation');

        $this->form_validation->set_rules('name', 'name', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('admin_cat_view');
        } else {

            $data['name'] = $this->input->post('name');


            $this->load->model('Category_model');
            $this->Category_model->add_category($data);
            redirect('/admin/adminnews/newsindex', 'location');
        }
    }

    public function edit_categories() {

        $this->load->helper(array('form', 'url'));

        $this->load->library('form_validation');

        $this->form_validation->set_rules('name', 'name', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('admin_cat_view');
        } else {
            $data['id'] = $this->input->post('id');
            $data['name'] = $this->input->post('name');


            $this->load->model('Category_model');
            $this->Category_model->edit_categories($data);
            redirect('/admin/adminnews', 'location');
        }
    }



    public function newsindex($id = null) {

        //////////pagiantion
        $this->load->library('pagination');
        $this->load->library('form_validation');
        $config['base_url'] = base_url() . 'index.php/admin/adminnews/newsindex';
        $config['total_rows'] = $this->db->count_all('news');
        $config['per_page'] = 3;
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
        $data['news'] = $this->news_model->get_news_admin($id, $config['per_page'], $this->uri->segment(5));

        $this->load->view('admin_news_view', $data);
    }

    public function admin_news_about($id) {
        $this->load->model('news_model');
        $data['news_about'] = $this->news_model->get_news_about($id);
        $this->load->view('news_about_view', $data);
    }
    public function create_news() {
        $this->load->view('admin_news_create');
    }
    public function edit_news($id) {
        $this->load->model('news_model');
        $data['news_about'] = $this->news_model->get_news_about($id);
      //var_dump($data['news_about'][0]['description']); die;
        $this->load->view('admin_news_edit',$data);
    }
    public function add_news() {
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');

        $this->form_validation->set_rules('title', 'title', 'required');
        $this->form_validation->set_rules('description', 'description', 'required');

        if ($this->form_validation->run() == FALSE) {
//                        $this->load->view('admin_news_view');
            $this->session->set_flashdata('delete_error_message', 'try again');
            redirect('/admin/adminnews/newsindex', 'location');
            $this->form_validation->set_error_delimiters('<div class="text-danger">', '</div>');
        } else {
            $data['title'] = $this->input->post('title');
            $data['description'] = $this->input->post('description');
            $data['created_date'] = date('Y-m-d');

            $config['upload_path'] = base_url().'index.php/public/uploads/';
            var_dump(is_writable($config['upload_path']));

            die;
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            $config['max_size'] = '1000';
            $this->load->library('upload', $config);
            $this->upload->do_upload('file');
            $image_data = $this->upload->data();
            $data['image'] = $image_data['file_name'];


            echo $this->upload->display_errors('<p style="color:#FF0000;">', '</p>');

            $this->load->model('news_model');
            $this->news_model->add_news($data);

            $this->session->set_flashdata('success', 'Information created');
            redirect('/admin/adminnews/newsindex', 'location');
        }
    }

    public function edit_news_save() {
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');

        $this->form_validation->set_rules('title', 'title', 'required');
        $this->form_validation->set_rules('description', 'description', 'required');

        if ($this->form_validation->run() == FALSE) {
//                        $this->load->view('admin_news_view');
            $this->form_validation->set_error_delimiters('<div class="text-danger">', '</div>');
            redirect('/admin/adminnews/newsindex', 'location');
        } else {
            $data['id'] = $this->input->post('id');
            $data['title'] = $this->input->post('title');
            $data['description'] = $this->input->post('description');

            $config['upload_path'] = base_url().'index.php/public/uploads/';
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            $config['max_size'] = '1000';

            $this->load->library('upload', $config);
            $this->upload->do_upload();
            $image_data = $this->upload->data();
            $data['image'] = $image_data['file_name'];
            $this->load->model('news_model');
            $this->news_model->edit_news($data);

            $this->session->set_flashdata('success', 'Information edited');
            redirect('/admin/adminnews/newsindex', 'location');
        }
    }

    public function delete_news_about($id) {


        $this->load->model('news_model');
        $this->news_model->delete_news($id);
        $this->load->library('session');
        $this->session->set_flashdata('success', 'Information deleted');
        redirect('/admin/adminnews/newsindex', 'location');
    }

}