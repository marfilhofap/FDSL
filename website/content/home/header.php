  <!-- ======= Header ======= -->
  <?php
    $tipu_publikasaun = $get_table->get_table('tipu_publikasaun');
    $tipu_programa = $get_table->get_table('tipu_programa');
    ?>

  <header id="header" class="fixed-top header-inner-pages">
      <div class="container d-flex align-items-center">

          <h1 class="logo me-auto"><a href="index.php">FDSL</a></h1>
          <!-- Uncomment below if you prefer to use an image logo -->
          <!-- <a href="index.php" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

          <nav id="navbar" class="navbar">
              <ul>
                  <li><a class="nav-link scrollto active" href="index.php#hero">Varanda</a></li>
                  <li><a class="nav-link scrollto" href="index.php#about">Konaba Ami</a></li>
                  <li><a class="nav-link scrollto" href="index.php#services">Atendimentu</a></li>
                  <li><a class="nav-link scrollto" href="index.php#team">Ekipa</a></li>
                  <li><a class="nav-link scrollto" href="index.php#contact">Kontaktu</a></li>
                  <!-- <li><a class="nav-link   scrollto" href="#portfolio">Portfolio</a></li> -->
                  <li class="dropdown"><a href="#"><span>Publikasaun</span> <i class="bi bi-chevron-down"></i></a>
                      <ul>
                          <?php
                            foreach ($tipu_publikasaun as $loop) {
                                echo '<li><a href="?c=publikasaun&id='.$loop['id_tipu_publikasaun'].'">'.$loop['tipu_publikasaun'].'</a></li>';
                            }
                            ?>
                      </ul>
                  </li>
                  <li class="dropdown"><a href="#"><span>Programa</span> <i class="bi bi-chevron-down"></i></a>
                      <ul>
                          <?php
                            foreach ($tipu_programa as $loop) {
                                echo '<li><a href="?c=programa&id='.$loop['id_tipu_programa'].'">'.$loop['tipu_programa'].'</a></li>';
                            }
                            ?>
                      </ul>
                  </li>
                  <!-- <li><a class="getstarted scrollto" href="index.php#about">Hahu</a></li> -->
              </ul>
              <i class="bi bi-list mobile-nav-toggle"></i>
          </nav><!-- .navbar -->

      </div>
  </header><!-- End Header -->