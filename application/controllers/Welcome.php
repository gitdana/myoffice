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

	 function _construct()
	 {
		parent::__construct();

		$this->load->model('queries');
	 }


	public function index()
	{
		$this->load->model('queries');
		$getLocation = $this->queries->getLocation();
		$getCategory = $this->queries-> getCategory();
		$getHall = $this->queries->getHall();
		$this->load->view('home',['getLocation'=>$getLocation,'getCategory'=>$getCategory,'getHall'=>$getHall]);
	}

	public function getRecords(){

	    $this->load->model('queries');
		$location = $this->input->post('pick_location');
		$category = $this->input->post('pick_category');
		$hall = $this ->input->post('pick_hall');
		$capacity = $this->input->post('pick_capacity');
		
		$this->load->view('adsearch',['getLocation'=>$location ,'getCategory'=>$category,'getHall'=>$hall ,'getCapacity'=>$capacity]);
	}

	
	
}
