<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Barang extends CI_Controller {
    public function __construct()
    {
		parent::__construct();
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
}