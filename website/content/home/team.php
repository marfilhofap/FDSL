<?php
$estrutura_fdsl = $get_table->get_table('view_estrutura_fdsl');
?>

<!-- ======= Team Section ======= -->
<section id="team" class="team section-bg">
  <div class="container" data-aos="fade-up">

    <div class="section-title">
      <h2>EKIPA</h2>
      <p>FDSL agora dadaun iha ekipa lubuk ida mak jere no mobilija aktividade sira hotu tuir planu asaun anual ne'ebe mak FDSL iha, Ekipa sira mak hanesan tuir mai ne'e:</p>
    </div>

    <div class="row">

      <?php
      foreach ($estrutura_fdsl as $loop) {
        echo '<div class="col-lg-6" data-aos="zoom-in" data-aos-delay="100">
                <div class="member d-flex align-items-start">
                  <div class="pic"><img src="assets/img/team/team-1.jpg" class="img-fluid" alt=""></div>
                  <div class="member-info">
                    <h4>' . $loop['naran_kompletu'] . ' (' . $loop['id_rejistu'] . ')</h4>
                    <span>' . $loop['tipu_estrutura_fdsl'] . '</span>
                    <p>Explicabo voluptatem mollitia et repellat qui dolorum quasi</p>
                    <div class="social">
                      <a href=""><i class="ri-facebook-fill"></i></a>
                      <a href=""><i class="ri-instagram-fill"></i></a>
                      <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                      <a href=""> <i class="ri-github-fill"></i> </a>
                    </div>
                  </div>
                </div>
              </div>';
      }
      ?>

    </div>

  </div>
</section><!-- End Team Section -->