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
                            <a href="<?php echo site_url('Barang/detail_barang') ?>" class="close" data-dismiss="alert" aria-label="close">&times;</a>
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
                                    <li class="active">Barang</li>
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
                                <a href="<?php echo site_url('Barang/in_barang') ?>"><span class="badge badge-success"><i class=" fa fa-plus"></i></span></a>
                                <strong class="card-title">Barang</strong>
                            </div>
                            <div class="card-body">
                                <table id="bootstrap-data-table" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Kategori</th>
                                            <th>Nama Barang</th>
                                            <th>Jumlah</th>
                                            <th>Harga</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>DSLR</td>
                                            <td>Canon EOS 75D</td>
                                            <td>10 pcs</td>
                                            <td>35000000 /pcs</td>
                                            <td>
                                            <a href="<?php echo site_url('Barang/detail_barang') ?>"
                                             class="btn btn-outline-secondary btn-sm"><i class="fa fa-eye"></i></a>
                                            <a onclick="return confirm('Apakah akan diedit?')"
                                             href="<?php echo site_url('Barang/ed_barang') ?>"
                                             class="btn btn-outline-primary btn-sm"><i class="fa fa-pencil"></i></a>
                                            <a onclick="return confirm('Apakah akan dihapus?')"
                                             href="#" class="btn btn-outline-danger btn-sm"><i class="fa fa-trash"></i></a>
                                            </td>
                                        </td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>Action Cam</td>
                                            <td>Go Pro 5</td>
                                            <td>20 pcs</td>
                                            <td>10000000 /pcs</td>
                                            <td>
                                            <a href="<?php echo site_url('Barang/detail_barang') ?>"
                                             class="btn btn-outline-secondary btn-sm"><i class="fa fa-eye"></i></a>
                                            <a onclick="return confirm('Apakah akan diedit?')"
                                             href="<?php echo site_url('Barang/ed_barang') ?>"
                                             class="btn btn-outline-primary btn-sm"><i class="fa fa-pencil"></i></a>
                                            <a onclick="return confirm('Apakah akan dihapus?')"
                                             href="#" class="btn btn-outline-danger btn-sm"><i class="fa fa-trash"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>DSLR</td>
                                            <td>Nikon D5000</td>
                                            <td>10 pcs</td>
                                            <td>15000000 /pcs</td>
                                            <td>
                                            <a href="<?php echo site_url('Barang/detail_barang') ?>"
                                             class="btn btn-outline-secondary btn-sm"><i class="fa fa-eye"></i></a>
                                            <a onclick="return confirm('Apakah akan diedit?')"
                                             href="<?php echo site_url('Barang/ed_barang') ?>"
                                             class="btn btn-outline-primary btn-sm"><i class="fa fa-pencil"></i></a>
                                            <a onclick="return confirm('Apakah akan dihapus?')"
                                             href="#" class="btn btn-outline-danger btn-sm"><i class="fa fa-trash"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td>Mirroles</td>
                                            <td>Canon M10</td>
                                            <td>30 pcs</td>
                                            <td>5000000 /pcs</td>
                                            <td>
                                            <a href="<?php echo site_url('Barang/detail_barang') ?>"
                                             class="btn btn-outline-secondary btn-sm"><i class="fa fa-eye"></i></a>
                                            <a onclick="return confirm('Apakah akan diedit?')"
                                             href="<?php echo site_url('Barang/ed_barang') ?>"
                                             class="btn btn-outline-primary btn-sm"><i class="fa fa-pencil"></i></a>
                                            <a onclick="return confirm('Apakah akan dihapus?')"
                                             href="#" class="btn btn-outline-danger btn-sm"><i class="fa fa-trash"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>5</td>
                                            <td>Aksesoris</td>
                                            <td>Tripod Takara</td>
                                            <td>45 pcs</td>
                                            <td>350000 /pcs</td>
                                            <td>
                                            <a href="<?php echo site_url('Barang/detail_barang') ?>"
                                             class="btn btn-outline-secondary btn-sm"><i class="fa fa-eye"></i></a>
                                            <a onclick="return confirm('Apakah akan diedit?')"
                                             href="<?php echo site_url('Barang/ed_barang') ?>"
                                             class="btn btn-outline-primary btn-sm"><i class="fa fa-pencil"></i></a>
                                            <a onclick="return confirm('Apakah akan dihapus?')"
                                             href="#" class="btn btn-outline-danger btn-sm"><i class="fa fa-trash"></i></a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
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