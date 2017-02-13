<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->model('News_model');
		$data['news'] = $this->News_model->get_news();

		$this->load->model('School_model');
		$data['school'] = $this->School_model->get_school();

		$this->load->model('Photo_model');
		$data['photo'] = $this->Photo_model->get_photo();

		$this->load->view('welcome_message', $data);
	}
	public function school()
	{
		$this->load->model('School_model');
		$data['school'] = $this->School_model->get_school();
		$data['title'] = 'School';
		$this->template->load('default', 'school', $data);
	}

	public function get_all_news($id = null)
	{
		$this->load->library('pagination');
		$this->load->library('form_validation');
		$config['base_url'] = base_url() . 'index.php/welcome/get_all_news';
		$config['total_rows'] = $this->db->count_all('news');
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
		//var_dump($this->uri->segment(3));die;
		$this->pagination->initialize($config);
		$this->load->model('news_model');
		$data['all_news'] = $this->news_model->get_news_admin($id, $config['per_page'], $this->uri->segment(3));

		$data['title'] = 'Our News';
		$this->template->load('default', 'all_news', $data);
	}
	public function get_news($id)
	{
		$this->load->model('news_model');
		$data['news_show'] = $this->news_model->get_news_by_id($id);
		$data['title'] = 'News';
		$this->template->load('default', 'news_show', $data);
	}

}
