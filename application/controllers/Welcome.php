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
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
	public function index()
	{
		$this->load->view('index');
		
	}
	public function about()
	{
		$this->load->view('about');
		
	}
	public function cleaning_services()
	{
		$this->load->view('cleaning_services');
		
	}
	public function air_conditioning()
	{
		$this->load->view('air_conditioning');
		
	}
	public function pest_control()
	{
		$this->load->view('pest_control');
		
	}
	public function clients()
	{
		$this->load->view('clients');
		
	}
	public function photo_gallery()
	{
		$this->load->view('photo_gallery');
		
	}

	public function video_gallery()
	{
		$this->load->view('video_gallery');
		
	}

	public function contact()
	{
		$this->load->view('contact');
		
	}
	
	
	
}
