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
        $data['barang'] = $this->MAdmin->GetKategori();
        $this->load->view("admin/barang/index.php",$data);
	}

	public function tambahbarang()
	{
        // load view admin/overview.php
        $this->load->view("admin/barang/in_barang.php");
	}

	public function tambahbarangbaru()
	{
        $data['kategori'] = $this->MAdmin->Get('kategori');
        $this->load->view("admin/barang/in_barang.php",$data);
	}

	public function in_barangbaru(){
      	$nm_brg = $this->input->post('nm_brg',TRUE);
      	$kategori = $this->input->post('kategori',TRUE);
      	$jumlah_brg = $this->input->post('jumlah_brg',TRUE);
      	$harga_brg = $this->input->post('harga_brg',TRUE);
      	$ket_brg = $this->input->post('ket_brg',TRUE);

		move_uploaded_file($_FILES["gambar"]["tmp_name"], "images/barang/".$_FILES["gambar"]["name"]);
		$gambar = $_FILES["gambar"]["name"];


		$data = array(
			'id' => '',
			'nm_barang' => $nm_brg,
			'id_kategori' => $kategori,
			'jumlah_barang' => $jumlah_brg,
			'harga_barang' => $harga_brg,
			'ket_barang' => $ket_brg,
			'gambar' => $gambar
		);
        $this->MAdmin->Insert('tb_barang',$data);

		$pg = $this->db->insert_id();
		$c_date=date("Y-m-d H:i:s");
		$detail = array(
			'id' => '',
			'id_barang' => $pg,
			'tgl_masuk' => $c_date,
			'jumlah' => $jumlah_brg
		);
		$this->MAdmin->Insert('barang_masuk', $detail);

		$this->session->set_flashdata('msg_berhasil','Data Berhasil Ditambah');
        redirect(site_url('BarangAdmin/tambahbarangbaru'));
	}

	public function tambahstokbarang()
	{
		$data['barang'] = $this->MAdmin->Get('tb_barang');
        $this->load->view("admin/barang/in_stokbarang.php",$data);
	}

	public function in_stokbarang(){
      	$barang = $this->input->post('barang',TRUE);
      	$jumlah_brg = $this->input->post('jumlah_brg',TRUE);

		$c_date=date("Y-m-d H:i:s");
		$data = array(
			'id' => '',
			'id_barang' => $barang,
			'tgl_masuk' => $c_date,
			'jumlah' => $jumlah_brg
		);
        $this->MAdmin->Insert('barang_masuk',$data);

		$this->session->set_flashdata('msg_berhasil','Data Berhasil Ditambah');
        redirect(site_url('BarangAdmin/tambahstokbarang'));
	}

	public function editbarang()
	{
        // load view admin/overview.php
        $this->load->view("admin/barang/ed_barang.php");
	}

	public function detailbarang()
	{
        // load view admin/overview.php
        $this->load->view("admin/barang/detail_barang.php");
	}

	public function hapusbarang($id)
	{
		$where = array('id'=> $id);
		$this->MAdmin->Delete('tb_barang',$where);

		$this->session->set_flashdata('msg_berhasil','Data Berhasil Dihapus');
        // redirect(site_url('BarangAdmin'));
	}
}