<?php
	$this->load->view('admin/head');
?>

<body>
    <?php 
    	$this->load->view('admin/nav');
        $this->load->view('admin/header');
    ?>
        <div class="breadcrumbs">
            <?php if($this->session->flashdata('msg_berhasil')){ ?>
                <div class="alert alert-success alert-dismissible col-lg-12">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                    <strong>Success!</strong><br> <?php echo $this->session->flashdata('msg_berhasil');?>
                </div>
            <?php } ?>
            <div class="breadcrumbs-inner">
                <div class="row m-0">
                    <div class="col-sm-4">
                        <div class="page-header float-left">
                            <div class="page-title">
                                <h1>CamStore</h1>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <div class="page-header float-right">
                            <div class="page-title">
                                <ol class="breadcrumb text-right">
                                    <li><a href="<?php echo site_url('PageAdmin'); ?>">Home</a></li>
                                    <li><a href="<?php echo site_url('BarangKeluar'); ?>">Barang Keluar</a></li>
                                    <li class="active">Tambah Barang Keluar</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Content -->
        <div class="content">
            <div class="animated fadeIn">
                <div class="row">

                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Barang</strong> Keluar
                            </div>
                            <?php foreach ($barang as $brg) {?>   
                                <form action="<?php echo site_url('BarangKeluar/keluarkan'); ?>" method="post" enctype="multipart/form-data" class="form-horizontal">
                                    <input type="hidden" name="id" value="<?= $brg->id ?>">
                                    <div class="card-body card-block">
                                        <div class="row form-group">
                                            <div class="col col-md-4">
                                               <img class="card-img-top" src="<?php echo base_url('images/barang/'.$brg->gambar)?>" alt="Card image cap">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body card-block">
                                        <div class="row form-group">
                                            <div class="col col-md-3"><label for="nm-input" class=" form-control-label">Nama Barang</label></div>
                                            <div class="col-12 col-md-9"><input type="text" id="nm_barang" name="nm_barang" value="<?php echo $brg->nm_barang; ?>" class="form-control" disabled></div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col col-md-3"><label for="jml-input" class=" form-control-label">Tanggal</label></div>
                                            <div class="col-12 col-md-9"><input type="text" id="tanggal" name="tanggal" value="<?php echo date("Y-m-d"); ?>" class="form-control" disabled></div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col col-md-3"><label for="jml-input" class=" form-control-label">Jumlah</label></div>
                                            <div class="col-12 col-md-9"><input type="number" id="jml" name="jml" min="1" max="<?php echo $brg->jumlah_barang; ?>" class="form-control" placeholder="0" required></div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col col-md-3"><label for="ket-input" class=" form-control-label">Keterangan Barang</label></div>
                                            <div class="col-12 col-md-9"><textarea class="ckeditor" name="ket_brg" id="ket_brg" rows="9" class="form-control"></textarea></div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <div class="col col-md-3">
                                            <button type="button" class="btn btn-secondary btn-sm" onclick="location.href='<?php echo site_url('BarangAdmin'); ?>'"><i class="fa fa-arrow-left"></i>&nbsp;Kembali</button>
                                        </div>
                                        <div class="col-12 col-md-9 text-right">
                                            <button type="reset" class="btn btn-danger btn-sm">
                                                <i class="fa fa-ban"></i> Batal
                                            </button>
                                            <button type="submit" class="btn btn-success btn-sm">
                                                <i class="fa fa-dot-circle-o"></i> Simpan
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            <?php }?>
                        </div>
                    </div>
                </div>
            </div><!-- .animated -->
        </div><!-- .content -->
        <div class="clearfix"></div>
<?php 
	$this->load->view('admin/footer');
?>