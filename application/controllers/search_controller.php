<?php
/**
 * Created by JetBrains PhpStorm.
 * User: a
 * Date: 2016-01-26
 * Time: 4:09 PM
 * To change this template use File | Settings | File Templates.
 */

class search_controller extends CI_Controller
{


    function __construct()
    {

        parent::__construct();

       

    }

    public function index()
    {
      
       
		$this->load->view('search');

    }


  

}