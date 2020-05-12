<?php
	$this->load->view('admin/head');
?>

<body>
    <?php 
    	$this->load->view('admin/nav');
        $this->load->view('admin/header');
    ?>
        <div class="breadcrumbs">
                    <!-- <div class="alert alert-success alert-dismissible col-lg-12">
                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                        <strong>Success!</strong><br>
                    </div> -->
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
                                    <li><a href="<?php echo site_url('Dashboard'); ?>">Home</a></li>
                                    <li><a href="<?php echo site_url('Barang'); ?>">Barang</a></li>
                                    <li class="active">Edit Barang</li>
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
                                <strong class="card-title">Edit</strong> Barang
                            </div>
                            <div class="card-body card-block">
                                <form action="#" method="post" enctype="multipart/form-data" class="form-horizontal">
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="select" class=" form-control-label">Kategori</label></div>
                                        <div class="col-12 col-md-9">
                                            <select name="kategori" id="kategori" class="form-control">
                                                <option value="1">DSLR</option>
                                                <option value="2">Mirroles</option>
                                                <option value="3">Action Cam</option>
                                                <option value="4">Digital</option>
                                                <option value="5">Aksesoris</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="nm-input" class=" form-control-label">Nama Barang</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="nm_barang" name="nm_barang" value="Canon Eos 500D" class="form-control"></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="jml-input" class=" form-control-label">Jumlah</label></div>
                                        <div class="col-12 col-md-9"><input type="number" id="jml" name="jml" min="1" value="15" class="form-control"></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="harga-input" class=" form-control-label">Harga</label></div>
                                        <div class="col-12 col-md-9"><input type="number" id="harga-input" name="harga-input" value="50000000" min="1000" class="form-control"></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="gambar-input" class=" form-control-label">Gambar</label></div>
                                        <div class="col-12 col-md-9"><input type="file" id="gambar" name="gambar" class="form-control-gambar"></div>
                                    </div>
                                    <div class="row form-group ">
                                        <div class="col col-md-3">
                                            <a href="<?php echo site_url('Barang'); ?>" class="btn btn-warning btn-sm"><i class="fa fa-angle-double-left"></i> Kembali</a>
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
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- .animated -->
        </div><!-- .content -->
        <div class="clearfix"></div>
<?php 
	$this->load->view('admin/footer');
?>