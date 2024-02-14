        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-secondary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
                <div class="sidebar-brand-icon">
                    <!-- <i class="fas fa-laugh-wink"></i> -->
                    <!-- <i class="bi bi-ubuntu"></i> -->

                    <img src="img/logo_fdsl.jpeg" class="img-fluid rounded-circle w-50" alt="Logo FDSL">

                </div>
                <div class="sidebar-brand-text mx-3">FDSL</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item <?= !isset($_GET['c']) ? 'active' : '' ?>">
                <a class="nav-link" href="index.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Nav Item - Jestaun Materia -->
            <li class="nav-item <?= isset($_GET['c']) && ($_GET['c'] == 'materia' || $_GET['c'] == 'area' || $_GET['c'] == 'materia_klik') ? 'active' : '' ?>">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#j_materia" aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-book"></i>
                    <span>Jestaun Materia</span>
                </a>
                <div id="j_materia" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Jestaun Materia:</h6>
                        <a class="collapse-item <?= isset($_GET['c']) && ($_GET['c'] == 'materia' || $_GET['c'] == 'materia_klik')  ? 'active' : '' ?>" href="?c=materia">
                            Materia
                        </a>
                        <a class="collapse-item <?= isset($_GET['c']) && ($_GET['c'] == 'area') ? 'active' : '' ?>" href="?c=area">
                            Area
                        </a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - Jestaun Publikasaun -->
            <li class="nav-item <?= isset($_GET['c']) && ($_GET['c'] == 'publikasaun' || $_GET['c'] == 'tipu_publikasaun') ? 'active' : '' ?>">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#j_publikasaun" aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-globe"></i>
                    <span>Jestaun Publikasaun</span>
                </a>
                <div id="j_publikasaun" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Jestaun Publikasaun:</h6>
                        <a class="collapse-item <?= isset($_GET['c']) && ($_GET['c'] == 'publikasaun') ? 'active' : '' ?>" href="?c=publikasaun">
                            Publikasaun
                        </a>
                        <a class="collapse-item <?= isset($_GET['c']) && ($_GET['c'] == 'tipu_publikasaun') ? 'active' : '' ?>" href="?c=tipu_publikasaun">
                            Tipu
                        </a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - Jestaun Programa -->
            <li class="nav-item <?= isset($_GET['c']) && ($_GET['c'] == 'partisipante_programa' || $_GET['c'] == 'partisipante_programa_detalho' || $_GET['c'] == 'programa' || $_GET['c'] == 'tipu_programa') ? 'active' : '' ?>">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#j_programa" aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-briefcase"></i>
                    <span>Jestaun Programa</span>
                </a>
                <div id="j_programa" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Jestaun Programa:</h6>
                        <a class="collapse-item <?= isset($_GET['c']) && ($_GET['c'] == 'partisipante_programa' || $_GET['c'] == 'partisipante_programa_detalho') ? 'active' : '' ?>" href="?c=partisipante_programa">
                            Partisipante
                        </a>
                        <a class="collapse-item <?= isset($_GET['c']) && ($_GET['c'] == 'programa') ? 'active' : '' ?>" href="?c=programa">
                            Programa
                        </a>
                        <a class="collapse-item <?= isset($_GET['c']) && ($_GET['c'] == 'tipu_programa') ? 'active' : '' ?>" href="?c=tipu_programa">
                            Tipu
                        </a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - Jestaun Membru -->
            <li class="nav-item <?= isset($_GET['c']) && ($_GET['c'] == 'membru' || $_GET['c'] == 'tipu_jerasaun' || $_GET['c'] == 'estrutura' || $_GET['c'] == 'tipu_estrutura') ? 'active' : '' ?>">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#j_membru" aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-users"></i>
                    <span>Jestaun Membru</span>
                </a>
                <div id="j_membru" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Jestaun Membru:</h6>
                        <a class="collapse-item <?= isset($_GET['c']) && ($_GET['c'] == 'membru') ? 'active' : '' ?>" href="?c=membru">
                            Membro
                        </a>
                        <a class="collapse-item <?= isset($_GET['c']) && ($_GET['c'] == 'estrutura') ? 'active' : '' ?>" href="?c=estrutura">
                            Estrutura
                        </a>
                        <a class="collapse-item <?= isset($_GET['c']) && ($_GET['c'] == 'tipu_jerasaun') ? 'active' : '' ?>" href="?c=tipu_jerasaun">
                            Tipu Jerasaun
                        </a>
                        <a class="collapse-item <?= isset($_GET['c']) && ($_GET['c'] == 'tipu_estrutura') ? 'active' : '' ?>" href="?c=tipu_estrutura">
                            Tipu Estrutura
                        </a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - Jestaun Assets -->
            <li class="nav-item <?= isset($_GET['c']) && ($_GET['c'] == 'tipu_assets' || $_GET['c'] == 'dados_assets') ? 'active' : '' ?>">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#j_assets" aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-home"></i>
                    <span>Jestaun Assets</span>
                </a>
                <div id="j_assets" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Jestaun Utilijador:</h6>
                        <a class="collapse-item <?= isset($_GET['c']) && ($_GET['c'] == 'tipu_assets') ? 'active' : '' ?>" href="?c=tipu_assets">
                            Tipo Assets
                        </a>
                        <a class="collapse-item <?= isset($_GET['c']) && ($_GET['c'] == 'dados_assets') ? 'active' : '' ?>" href="?c=dados_assets">
                            Dados Assets
                        </a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - Jestaun Kartaun -->
            <li class="nav-item <?= isset($_GET['c']) && ($_GET['c'] == 'tipu_kartaun' || $_GET['c'] == 'dados_kartaun') ? 'active' : '' ?>">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#j_kartaun" aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-home"></i>
                    <span>Jestaun Kartaun</span>
                </a>
                <div id="j_kartaun" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Jestaun Utilijador:</h6>
                        <a class="collapse-item <?= isset($_GET['c']) && ($_GET['c'] == 'dados_kartaun') ? 'active' : '' ?>" href="?c=dados_kartaun">
                            Kartaun
                        </a>
                        <a class="collapse-item <?= isset($_GET['c']) && ($_GET['c'] == 'tipu_kartaun') ? 'active' : '' ?>" href="?c=tipu_kartaun">
                            Tipo Kartaun
                        </a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - Jestaun Sertifikadu -->
            <li class="nav-item <?= isset($_GET['c']) && ($_GET['c'] == 'sertifikadu' || $_GET['c'] == 'tipu_sertifikadu') ? 'active' : '' ?>">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#j_sertifikadu" aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-home"></i>
                    <span>Jestaun Sertifikadu</span>
                </a>
                <div id="j_sertifikadu" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Jestaun Sertifikadu:</h6>
                        <a class="collapse-item <?= isset($_GET['c']) && ($_GET['c'] == 'sertifikadu') ? 'active' : '' ?>" href="?c=sertifikadu">
                            Sertifikadu
                        </a>
                        <a class="collapse-item <?= isset($_GET['c']) && ($_GET['c'] == 'tipu_sertifikadu') ? 'active' : '' ?>" href="?c=tipu_sertifikadu">
                            Tipu Sertifikadu
                        </a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - Jestaun Utilijador -->
            <li class="nav-item <?= isset($_GET['c']) && ($_GET['c'] == 'utilijador' || $_GET['c'] == 'nivel_asesu') ? 'active' : '' ?>">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#j_utilijador" aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-key"></i>
                    <span>Jestaun Utilijador</span>
                </a>
                <div id="j_utilijador" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Jestaun Utilijador:</h6>
                        <a class="collapse-item <?= isset($_GET['c']) && ($_GET['c'] == 'utilijador') ? 'active' : '' ?>" href="?c=utilijador">
                            Utilijador
                        </a>
                        <a class="collapse-item <?= isset($_GET['c']) && ($_GET['c'] == 'nivel_asesu') ? 'active' : '' ?>" href="?c=nivel_asesu">
                            Nivel Asesu
                        </a>
                    </div>
                </div>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->