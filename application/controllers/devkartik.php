<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Devkartik extends My_Controller {

	public $details;
	public function __construct(){
		parent::__construct();
		$this->load->model('DevKartikModel');
		$this->details['professional_details']=$this->DevKartikModel->pull_professional_details();
		$this->details['attachments']=$this->DevKartikModel->pull_attachments();
		$this->details['social']=$this->DevKartikModel->pull_social_profiles();
	}
	
	public function index()
	{	
		$data['title']="Kartik Chaudhari";
		$this->load->view('common/head', $data);
		$this->load->view('about/content', ['details'=>$this->details]);
		$this->load->view('common/footer');
	}

	public function resume(){
		$data['title']="Resume";
		$this->load->view('common/head', $data);
		$this->load->view('resume/content', ['details'=>$this->details]);
		$this->load->view('common/footer');
	}

	public function portfolio(){
		$data['title']="Portfolio";
		$this->load->view('common/head', $data);
		$this->load->view('portfolio/content', ['details'=>$this->details]);
		$this->load->view('common/footer');
	}

	public function contact(){
		$data['title']="Contact";
		$this->load->view('common/head', $data);
		$this->load->view('contact/content', ['details'=>$this->details]);
		$this->load->view('common/footer');
	}
	public function blog(){
		$data['title']="Blog";
		$this->load->view('common/head', $data);
		$this->load->view('blog/content', ['details'=>$this->details]);
		$this->load->view('common/footer');
	}
}
