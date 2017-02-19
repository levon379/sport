<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Page extends CI_Controller {

    public function index($offset = 0) {
        //////////pagiantion
        $this->load->library('pagination');
        $this->load->library('form_validation');
        $config['base_url'] = base_url() . 'admin/page/index';
        $config['total_rows'] = $this->db->count_all('page');
        $config['per_page'] = 4;
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
        $this->pagination->initialize($config);
        $this->load->model('page_model');
        $data['page'] = $this->page_model->get_all_page($offset, $config['per_page']);
        $data['title'] = 'Page list';

        $this->template->load('admin', 'admin/page/index', $data);
    }

    public function page_show($id) {
        $this->load->model('page_model');
        $data['page_show'] = $this->page_model->get_page_by_id($id);
        $this->load->library('pagination');
        $this->load->library('form_validation');
        $data['title'] = 'Page Show';
        $this->template->load('admin', 'admin/page/show', $data);

    }
    public function create_page() {
        $this->load->library('form_validation');
        $data['title'] = 'Page Create';
        $this->template->load('admin', 'admin/page/create', $data);
    }
    public function edit_page($id) {
        $this->load->model('page_model');
        $data['page_show'] = $this->page_model->get_page_by_id($id);
        $data['title'] = 'Page Edit';
        $this->template->load('admin', 'admin/page/edit', $data);
    }
    public function add_page() {
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
        $config['upload_path'] = APPPATH.'/../public/uploads/page/';
        $config['allowed_types'] = 'gif|jpg|png|jpeg';
        $config['max_size'] = '1000';
        $config['encrypt_name'] = true;
        $this->load->library('upload', $config);

        $this->form_validation->set_rules('title', 'title', 'trim|required');
        $this->form_validation->set_rules('description', 'description', 'trim|required');
        if (empty($_FILES['file_name']['name'])) {
            $this->form_validation->set_rules('file_name', 'Image', 'required');
        }

        if ($this->form_validation->run() == FALSE) {
            $this->form_validation->set_error_delimiters('<div class="text-danger">', '</div>');

            $this->session->set_flashdata('error_message', 'try again');
            $this->template->load('admin', 'admin/page/create');
//            redirect('/admin/news', 'location');
        } else {
            $data['title'] = $this->input->post('title');
            $data['description'] = $this->input->post('description');



            $is_uploaded = $this->upload->do_upload('file_name');
            if ($is_uploaded) {
                $image_data = $this->upload->data();
                $data['file_name'] = $image_data['file_name'];
                $this->load->model('page_model');
                $this->page_model->add_page($data);

                $this->session->set_flashdata('success', 'Information created');
                redirect('/admin/page', 'location');
            } else {
                $this->session->set_flashdata('error_message', $this->upload->display_errors());
                $this->template->load('admin', 'admin/page/create');
            }

        }
    }

    public function edit_page_save() {
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');

        $this->form_validation->set_rules('title', 'title', 'required');
        $this->form_validation->set_rules('description', 'description', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->form_validation->set_error_delimiters('<div class="text-danger">', '</div>');
            redirect('/admin/page', 'location');
        } else {
            $data['id'] = $this->input->post('id');
            $data['title'] = $this->input->post('title');
            $data['description'] = $this->input->post('description');

            $config['upload_path'] = APPPATH.'/../public/uploads/page/';
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            $config['max_size'] = '1000';
            $config['encrypt_name'] = true;
            $this->load->library('upload', $config);
            $is_uploaded = $this->upload->do_upload('file_name');
            if ($is_uploaded) {
                $image_data = $this->upload->data();
                $data['file_name'] = $image_data['file_name'];
                $id = $this->input->post('id');
                $this->load->model('page_model');
                $news = $this->page_model->get_page_by_id($id);
                unlink(APPPATH.'/../public/uploads/page/' . $news->file_name);
                $this->page_model->edit_page($data);

                $this->session->set_flashdata('success', 'Information edited');
                redirect('/admin/page/', 'location');
            } else {
                $this->load->model('page_model');
                $this->page_model->edit_page($data);

                $this->session->set_flashdata('success', 'Information edited, image unchaged');
                redirect('/admin/page/', 'location');
            }
        }
    }

    public function delete_page($id) {
        $this->load->model('page_model');
        $news = $this->page_model->get_page_by_id($id);
        unlink(APPPATH.'/../public/uploads/page/' . $news->file_name);
        $this->page_model->delete_page($id);
        $this->load->library('session');
        $this->session->set_flashdata('success', 'Information deleted');
        redirect('/admin/page/', 'location');
    }

}