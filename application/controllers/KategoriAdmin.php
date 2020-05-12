<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class KategoriAdmin extends CI_Controller {
	function __construct(){
	    parent::__construct();
	    //validasi jika user belum login
	    if($this->session->userdata('masuk') == 'user'){
	        redirect('Page');
	    }elseif ($this->session->userdata('masuk') != 'admin') {
            $url=base_url();
	        redirect($url);
	    }
		// load Session Library
		$this->load->library('session');
			
		// load url helper
		$this->load->helper('url');

		$this->load->model('MAdmin');
		$this->load->library('form_validation');
	}

	public function index(){
		$data['kategori'] = $this->MAdmin->Get('kategori');
		$this->load->view("admin/kategori/index.php", $data);
	}

	public function in_kat(){
		$this->load->view("admin/kategori/in_kat.php");
	}

	public function ed_kat(){
		$this->load->view("admin/kategori/ed_kat.php");
	}
}