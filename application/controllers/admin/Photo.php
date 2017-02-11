<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Photo extends CI_Controller {



    public function index($id = null) {

        //////////pagiantion
        $this->load->library('pagination');
        $this->load->library('form_validation');
        $config['base_url'] = base_url() . 'index.php/admin/photo';
        $config['total_rows'] = $this->db->count_all('photo');
        $config['per_page'] = 15;
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
        $this->load->model('photo_model');
        $data['photo'] = $this->photo_model->get_photo_admin($id, $config['per_page'], $this->uri->segment(3));

        $this->load->view('admin/photo/index', $data);
    }

    public function admin_photo_show($id) {
        $this->load->model('photo_model');
        $data['photo_show'] = $this->photo_model->get_photo_admin($id);
        $this->load->view('admin/photo/show', $data);
    }
    public function create_photo() {
        $this->load->view('admin/photo/create');
    }
    public function edit_photo($id) {
        $this->load->model('photo_model');
        $data['photo_show'] = $this->photo_model->get_photo_show($id);
        $this->load->view('admin/photo/edit',$data);
    }
    public function add_photo() {
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');

            $config['upload_path'] = APPPATH.'/../public/uploads/photo/';
            $config['allowed_types']        = 'gif|jpg|png';
            $config['max_size']             = 1000;

            $this->load->library('upload', $config);
            $this->upload->do_upload('userfile');

            $image_data = $this->upload->data();
            $data['file_name'] = rand(1,999).'_'.$image_data['file_name'];
            $this->load->model('photo_model');
            $this->photo_model->add_photo($data);

            $this->session->set_flashdata('success', 'Information created');
            redirect('/admin/photo', 'location');

    }

    public function edit_photo_save() {
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');

        $this->form_validation->set_rules('url', 'url', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->form_validation->set_error_delimiters('<div class="text-danger">', '</div>');
            redirect('/admin/photo', 'location');
        } else {
            $data['id'] = $this->input->post('id');
            $data['url'] = $this->input->post('url');

            $this->load->model('photo_model');
            $this->photo_model->edit_photo($data);

            $this->session->set_flashdata('success', 'Information edited');
            redirect('/admin/photo/', 'location');
        }
    }

    public function delete_photo($id) {


        $this->load->model('photo_model');
        $this->photo_model->delete_photo($id);
        $this->load->library('session');
        $this->session->set_flashdata('success', 'Information deleted');
        redirect('/admin/photo/', 'location');
    }

}