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
                                    <li class="active">Barang Keluar</li>
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
                                <a href="<?php echo site_url('BarangAdmin') ?>"><span class="badge badge-success"><i class=" fa fa-plus"></i></span></a>
                                <strong class="card-title">Tambah Barang Keluar</strong>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-hover" id="table_id" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Nama Barang</th>
                                                <th>Gambar</th>
                                                <th>Tanggal Keluar</th>
                                                <th>Jumlah</th>
                                                <th>Ket</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php if(count($barang)>0): ?>
                                            <?php $no = 1; foreach ($barang as $data): ?>
                                            <tr>
                                                <td>
                                                    <?php echo $no; ?>
                                                </td>
                                                <td>
                                                    <?php echo $data->nm_barang; ?></a>
                                                </td>
                                                <td><img class="card-img-top" src="<?php echo base_url('images/barang/'.$data->gambar)?>" style="width: 50px;">
                                                </td>
                                                <td>
                                                    <?php echo $data->tanggal_keluar; ?>
                                                </td>
                                                <td>
                                                    <?php echo $data->jumlah; ?>
                                                </td>
                                                <td>
                                                    <?php echo $data->ket; ?>
                                                </td>
                                            </tr>
                                            <?php $no++; endforeach; ?>
                                            <?php else: ?>
                                                <td colspan="7" align="center"><strong>Data Kosong</strong></td>
                                            <?php endif; ?>

                                        </tbody>
                                    </table>
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