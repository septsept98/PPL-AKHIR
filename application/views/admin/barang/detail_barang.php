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
                                    <li class="active">Detail Barang</li>
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
                                <strong class="card-title">Detail</strong> Barang
                            </div>
                            <div class="card-body card-block">
                                    <div class="row form-group">
                                        <div class="col col-md-4">

                                           <img class="card-img-top" src="https://i.imgur.com/MUBS4Gh.png" alt="Card image cap">
                                        </div>
                                        <div class="col-12 col-md-8">
                                            <h3>Canon Eos 500D</h3>
                                            <strong>DSLR</strong>
                                            <address class="mt-3">
                                              <strong>Jumlah</strong><br>
                                              15<br>
                                              <br>
                                              <b>Harga</b><br>
                                              Rp. 5000000/unit
                                            </address>
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col">
                                            <a href="<?php echo site_url('Barang'); ?>" class="btn btn-warning btn-sm"><i class="fa fa-angle-double-left"></i> Kembali</a>
                                        </div>
                                    </div>
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