<?php  
    $this->load->view('front/header');
?>

<!-- <div class="inner">
    
    <h1> <center> Detail Informasi Barang </center> </h1>

         &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
        <a href="detail_digital" title="Kamera Digital"><img src="assets/frontend/images/digital.png" width="100px" /></a>
        Kamera Digital
         &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
        <a href="detail_slr" title="Kamera Slr"><img src="assets/frontend/images/slr.png" width="100px" /></a>
        Kamera Slr
        &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
        <a href="detail_mirrorles" title="Kamera Mirrorles"><img src="assets/frontend/images/mirrorles.png" width="100px" /></a>
        Kamera Mirrorles
        &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
        <br> <br> <br> <br>
         &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
        <a href="detail_drone" title="Drone"><img src="assets/frontend/images/drone.png" width="100px" /></a>
        Drone
        &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
        <a href="detail_aksesoris" title="Aksesoris"><img src="assets/frontend/images/aksesoris.png" width="100px" /></a>
        Aksesoris
        &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
        <a href="detail_lensa" title="Lensa"><img src="assets/frontend/images/lensa.png" width="100px" /></a>
        Lensa
        </p>
    </div>
</div> -->
<div class="inner">
    <div class="row">
    <?php foreach ($kat as $kategori): ?>
      <h4 class="col-12 mb-4 mt-4"> <center>Informasi <?php echo $kategori->kategori; ?> </center> </h4>
    <?php endforeach; ?>
        <?php foreach ($barang as $brg): ?>
        <div class="col-3 mb-4"> 
          <div class="card">
            <div class="card-body">
              <img class="card-img-top" src="<?php echo base_url('images/barang/'.$brg->gambar)?>" alt="">
              <h4 class="card-title text-center">
                <a href="" class="text-dark"><?= $brg->nm_barang ?></a>
              </h4>
              <h6 class="card-subtitle mb-2 text-muted"><?= "Rp. ".number_format($brg->harga_barang,2,',','.'); ?></h6>
              <h6 class="card-subtitle mb-2 text-muted">Stok : <?= $brg->jumlah_barang ?></h6>
              <div class="card-text">
                <?= $brg->ket_barang ?>
              </div>
              <!-- <a href="#" class="btn btn-primary">Learn More</a> -->
            </div>
          </div>
        </div>
        <?php endforeach; ?>
        <div class="col-12 mb-4">
            <a href="<?= site_url('Page');?>" class="btn btn-warning">Kembali</a>
        </div>
    </div>
</div>


<?php
    $this->load->view('front/footer');
$this->load->view('front/master');
?>