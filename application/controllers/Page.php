<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Page extends CI_Controller{
  function __construct(){
    parent::__construct();
    //validasi jika user belum login
    if($this->session->userdata('masuk') == 'admin'){
      redirect('Dashboard');
    }elseif ($this->session->userdata('masuk') != 'user') {
      $url=base_url();
      redirect($url);
    }
  }
 
  function index(){
    $this->load->view('v_dashboard');
  }
}