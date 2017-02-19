<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Video extends CI_Controller {



    public function index($page_number = null) {

        //////////pagiantion
        $this->load->library('pagination');
        $this->load->library('form_validation');
        $config['base_url'] = base_url() . 'admin/video/index';
        $config['total_rows'] = $this->db->count_all('video');
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
        $this->pagination->initialize($config);
        $this->load->model('video_model');
        $data['video'] = $this->video_model->get_url($page_number, $config['per_page']);
        $data['title'] = 'Video list';

        $this->template->load('admin', 'admin/video/index', $data);
    }

    public function video_show($id) {
        $this->load->model('video_model');
        $data['video_show'] = $this->video_model->get_video_by_id($id);
        $data['title'] = 'Video Show';
        $this->template->load('admin', 'admin/video/show', $data);
    }
    public function create_video() {
        $this->load->library('form_validation');
        $data['title'] = 'Video Create';
        $this->template->load('admin', 'admin/video/create', $data);
    }
    public function edit_video($id) {
        $this->load->model('video_model');
        $data['video_show'] = $this->video_model->get_video_by_id($id);
        $data['title'] = 'Video Edit';
        $this->template->load('admin', 'admin/video/edit', $data);
    }
    public function add_video() {
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
        $this->form_validation->set_rules('url', 'url', 'trim|required');

        if ($this->form_validation->run() == FALSE) {
            $this->form_validation->set_error_delimiters('<div class="text-danger">', '</div>');
            $this->session->set_flashdata('error_message', 'try again');
            $this->template->load('admin', 'admin/video/create');
        }
        else {
                $data['url'] = $this->input->post('url');
                $this->load->model('video_model');
                $this->video_model->add_video($data);

                $this->session->set_flashdata('success', 'Information created');
                redirect('/admin/video', 'location');
            }

    }

    public function edit_video_save() {
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');

        $this->form_validation->set_rules('url', 'url', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->form_validation->set_error_delimiters('<div class="text-danger">', '</div>');
            redirect('/admin/video', 'location');
        } else {
            $data['id'] = $this->input->post('id');
            $data['url'] = $this->input->post('url');

            $this->load->model('video_model');
            $this->video_model->edit_video($data);

            $this->session->set_flashdata('success', 'Information edited');
            redirect('/admin/video/', 'location');
        }


    }

    public function delete_video($id) {
        $this->load->model('video_model');
        $this->video_model->delete_video($id);
        $this->load->library('session');
        $this->session->set_flashdata('success', 'Information deleted');
        redirect('/admin/video/', 'location');
    }

}