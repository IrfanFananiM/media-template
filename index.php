<?php include('layouts/head.php') ?>

<body>
  <!-- Navbar Start -->
  <?php include('layouts/navbar.php') ?>
  <!-- Navbar End -->

  <!-- Main News Slider Start -->
  <div class="container-fluid py-5">
    <div class="container">
      <div class="row">
        <div class="col-lg-8">

          <!-- Carousel -->
          <?php include('layouts/carousel.php') ?>
          <!-- End Carousel -->

          <!-- Pilihan Editor -->
          <?php include('layouts/editor.php') ?>
          <!-- End Pilihan Editor -->

          <!-- Berita Terkini -->
          <?php include('layouts/berita.php') ?>
          <!-- End Berita Terkini -->

        </div>

        <!-- Populer -->
        <?php include('layouts/populer.php') ?>
        <!-- End Populer -->



      </div>
    </div>
  </div>
  <!-- Main News Slider End -->

  <!-- start footer -->
  <?php include('layouts/footer.php') ?>
  <!-- end footer -->
</body>

</html>