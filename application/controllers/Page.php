<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Page extends CI_Controller{
  function __construct(){
    parent::__construct();
    //validasi jika user belum login
    if($this->session->userdata('masuk') == 'admin'){
      redirect('PageAdmin');
    }elseif ($this->session->userdata('masuk') != 'user') {
      $url=base_url();
      redirect('login');
    }

    // load Session Library
    $this->load->library('session');
      
    // load url helper
    $this->load->helper('url');

    $this->load->model('MAdmin');
    $this->load->library('form_validation');
  }
 
  function index(){
    $data['kategori'] = $this->MAdmin->Get('kategori');
    $this->load->view('front/index',$data);
  }

  function barang($id){
    $where = array('id'=> $id);
    $data['kat'] = $this->MAdmin->GetWhere('kategori',$where);
    $data['barang'] = $this->MAdmin->GetWhereKategori($id);
    $this->load->view('front/barang',$data);
  }
}