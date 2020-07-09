<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class BarangKeluar extends CI_Controller {
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
        $data['barang'] = $this->MAdmin->GetKeluar();
        $this->load->view("admin/barang/daftarkeluar.php",$data);
	}

	public function barangkeluar($id)
	{
		$data['barang_masuk'] = $this->MAdmin->GetBarangMasuk($id);
		$data['barang'] = $this->MAdmin->GetKategoriWhere($id);
        $this->load->view("admin/barang/keluar_barang.php", $data);
	}

	public function keluarkan(){
      	$id_barang = $this->input->post('id',TRUE);
      	$jumlah = $this->input->post('jml',TRUE);
      	$ket_brg = $this->input->post('ket_brg',TRUE);
		$c_date=date("Y-m-d H:i:s");

		$data = array('id_barang'=> $id_barang,
						'tanggal_keluar'=> $c_date,
						'jumlah'=> $jumlah,
						'ket'=> $ket_brg
					);

		$this->MAdmin->Insert('barang_keluar', $data);

		$this->session->set_flashdata('msg_berhasil','Data Berhasil Diedit');
        redirect(site_url('BarangKeluar'));
	}
}