<?php
$id = $_GET['id'];
$titulu = $get_table->get_table_uuid('', 'tipu_programa', 'id_tipu_programa', $id, '');
$programa = $get_table->get_table_uuid('', 'programa', 'id_tipu_programa', $id, '');
?>

<!-- ======= Breadcrumbs ======= -->
<section id="breadcrumbs" class="breadcrumbs bg-white">
  <div class="container">

    <ol>
      <li><a href="index.php">Home</a></li>
      <li>Programa Detalho</li>
    </ol>

  </div>
</section><!-- End Breadcrumbs -->

<!-- ======= Team Section ======= -->
<section class="team section-bg">
  <div class="container" data-aos="fade-up">

    <div class="section-title">
      <h2>
        <?php foreach ($titulu as $loop) {
          echo $loop['tipu_programa'];
        } ?>
      </h2>
    </div>

    <div class="row">

      <?php
      foreach ($programa as $loop) {
        echo '<div class="col-lg-4" data-aos="zoom-in" data-aos-delay="100">
                <div class="member d-flex align-items-start">
                  <div class="member-info">
                    <h4>' . $loop['titulu'] . '</h4>
                    <span>' . $loop['data_hahu_rejistu'] . ' to ' . $loop['data_remata_rejistu'] . '</span>
                    <p>' . $loop['rezumu'] . '</p>
                    <br>
                      <a href="?c=le_programa&id='. $loop['id_programa'] .'" class="text-primary">Le Kontinua...</i></a>
                  </div>
                </div>
              </div>';
      }
      ?>

    </div>

  </div>
</section><!-- End Team Section -->