<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Website extends CI_Controller {
	public function index()
	{
		$this->load->view('pages/index');
	}
	public function about_us(){
		$this->load->view('pages/about_us');
	}
	public function contact(){
		$this->load->view('pages/contact');
	}
	public function service(){
		$this->load->view('pages/service');
	}
	public function blog_list(){
		$this->load->view('pages/blog_list');
	}
}
?>
