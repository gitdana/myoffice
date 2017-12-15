<?php
/**
 * Created by JetBrains PhpStorm.
 * User: a
 * Date: 2016-01-26
 * Time: 4:09 PM
 * To change this template use File | Settings | File Templates.
 */

class Advancesearch_controller extends CI_Controller
{


    function __construct()
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
		$this->load->view('adsearch',['getLocation'=>$getLocation,'getCategory'=>$getCategory,'getHall'=>$getHall]);

    }

    public function searchResult(){
        $this->load->model('queries');
        $location = $this->input->post('pick_location');
		$category = $this->input->post('pick_category');
		$hall = $this ->input->post('pick_hall');
        $capacity = $this->input->post('pick_capacity');
        
        $records = $this->queries->getRecords($location,$category,$hall,$capacity);

    }


  

}