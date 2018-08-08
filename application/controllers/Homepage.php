<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Homepage extends CI_Controller
{

public function __construct()
{
  parent::__construct();
}
public function videos(){
$this->load->view('home_page/homepage');
}

}

 ?>
