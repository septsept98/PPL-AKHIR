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
                                    <li><a href="<?php echo site_url('Kategori'); ?>">Kategori</a></li>
                                    <li class="active">Edit Kategori</li>
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
                                <strong class="card-title">Edit</strong> Kategori
                            </div>
                            <div class="card-body card-block">
                                <form action="#" method="post" enctype="multipart/form-data" class="form-horizontal">
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="nm_kategori" class=" form-control-label">Nama Kategori</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="nm_kategori" name="nm_kategori" class="form-control" value="DSLR"></div>
                                    </div>  
                                    <div class="row form-group ">
                                        <div class="col col-md-3">
                                            <a href="<?php echo site_url('Kategori'); ?>" class="btn btn-warning btn-sm"><i class="fa fa-angle-double-left"></i> Kembali</a>
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