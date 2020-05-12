<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class BarangAdmin extends CI_Controller {
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

	public function index()
	{
        // load view admin/overview.php
        $this->load->view("admin/barang/index.php");
	}

	public function in_barang()
	{
        // load view admin/overview.php
        $this->load->view("admin/barang/in_barang.php");
	}

	public function ed_barang()
	{
        // load view admin/overview.php
        $this->load->view("admin/barang/ed_barang.php");
	}

	public function detail_barang()
	{
        // load view admin/overview.php
        $this->load->view("admin/barang/detail_barang.php");
	}
}