<?php
$id = $_GET['id'];
$titulu = $get_table->get_table_uuid('', 'tipu_publikasaun', 'id_tipu_publikasaun', $id, '');
$publikasaun = $get_table->get_table_uuid('', 'publikasaun', 'id_tipu_publikasaun', $id, '');
?>

<!-- ======= Breadcrumbs ======= -->
<section id="breadcrumbs" class="breadcrumbs bg-white">
  <div class="container">

    <ol>
      <li><a href="index.php">Home</a></li>
      <li>Publikasaun Detalho</li>
    </ol>

  </div>
</section><!-- End Breadcrumbs -->

<!-- ======= Team Section ======= -->
<section class="team section-bg">
  <div class="container" data-aos="fade-up">

    <div class="section-title">
      <h2>
        <?php foreach ($titulu as $loop) {
          echo $loop['tipu_publikasaun'];
        } ?>
      </h2>
    </div>

    <div class="row">

      <?php
      foreach ($publikasaun as $loop) {
        echo '<div class="col-lg-4" data-aos="zoom-in" data-aos-delay="100">
                <div class="member d-flex align-items-start">
                  <div class="member-info">
                    <h4>' . $loop['titulu'] . '</h4>
                    <span>' . $loop['data_publikasaun'] . '</span>
                    <p>' . $loop['rezumu'] . '</p>
                    <br>
                      <a href="?c=le_publikasaun&id='. $loop['id_publikasaun'] .'" class="text-primary">Le Kontinua...</i></a>
                  </div>
                </div>
              </div>';
      }
      ?>

    </div>

  </div>
</section><!-- End Team Section -->