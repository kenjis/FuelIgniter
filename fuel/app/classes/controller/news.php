<?php

class Controller_News extends CI_Controller {

	public function before()
	{
		parent::before();
		$this->load->model('news_model');
	}

	public function action_index()
	{
		$data['news'] = $this->news_model->get_news();
		$data['title'] = 'News archive';
		
		$this->load->view('templates/header', $data);
		$this->load->view('news/index', $data);
		$this->load->view('templates/footer');
	}
	
	public function action_view($slug)
	{
		$data['news_item'] = $this->news_model->get_news($slug);
		
		if (empty($data['news_item']))
		{
			show_404();
		}
	
		$data['title'] = $data['news_item']['title'];
	
		$this->load->view('templates/header', $data);
		$this->load->view('news/view', $data);
		$this->load->view('templates/footer');
	}
	
	public function action_create()
	{
		$this->load->helper('form');
		$this->load->library('form_validation');
	
		$data['title'] = 'Create a news item';
	
		$this->form_validation->set_rules('title', 'Title', 'required');
		$this->form_validation->set_rules('text', 'text', 'required');
	
		if ($this->form_validation->run() === FALSE)
		{
			$this->load->view('templates/header', $data);
			$this->load->view('news/create');
			$this->load->view('templates/footer');
		}
		else
		{
			$this->news_model->set_news();
			$this->load->view('news/success');
		}
	}
}
