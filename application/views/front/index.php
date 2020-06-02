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
      <h4 class="col-12 mb-4 mt-4"> <center>Informasi Barang</center> </h4>
        <?php foreach ($kategori as $kat): ?>
        <div class="col-3 mb-4"> 
          <div class="card">
            <div class="card-body">
              <a href="<?= site_url('Page/barang/'.$kat->id)?>" title="<?= $kat->kategori ?>">
                <img class="card-img-top" src="<?php echo base_url('assets/frontend/images/'.$kat->img_kat)?>" alt="">
              </a>
              <h4 class="card-title text-center">
                <a href="<?= site_url('Page/barang/'.$kat->id)?>" class="text-dark"><?= $kat->kategori ?></a>
              </h4>
            </div>
          </div>
        </div>
        <?php endforeach; ?>
    </div>
</div>


<?php
    $this->load->view('front/footer');
$this->load->view('front/master');
?>