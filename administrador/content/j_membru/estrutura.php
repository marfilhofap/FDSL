<?php
include_once 'controller/j_membru/j_membru_class.php';
// $dados = $get_table->get_table('view_estrutura_fdsl');

$aaa = new j_membru(PSQLHOST, PSQLUSER, PSQLPW, PSQLDB);

$dados = $aaa->view_estrutura_fdsl();
?>

<div class="container-fluid">
    <div class="row">
        <div class="col-xl-12 col-lg-7">
            <div class="card shadow mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Estrutura FDSL</h6>
                    <a href="#" class="btn btn-success btn-icon-split" data-toggle="modal" data-target="#jerasaun_fdsl">
                        <span class="text">Aumenta</span>
                        <span class="icon text-white-50">
                            <i class="fas fa-plus"></i>
                        </span>
                    </a>
                </div>
                <div class="card-body">

                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>ID Membru</th>
                                    <th>Naran</th>
                                    <th>Pozisaun</th>
                                    <th>Nu. Tel</th>
                                    <th>Email</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $no = 1;
                                foreach ($dados as $loop) {
                                    echo
                                    '<tr>
                                        <td>' . $no++ . '</td>
                                        <td>' . $loop['id_rejistu'] . '</td>
                                        <td>' . $loop['naran_kompletu'] . '</td>
                                        <td>' . $loop['tipu_estrutura_fdsl'] . '</td>
                                        <td>' . $loop['nu_telemovel'] . '</td>
                                        <td>' . $loop['email'] . '</td>
                                    </tr>';
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>

                </div>

            </div>
        </div>
    </div>
</div>


<!-- Modal Inserir -->
<div class="modal fade" id="jerasaun_fdsl" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header bg-gradient-success">
                <h5 class="modal-title text-white" id="exampleModalLabel">Aumenta dadus Membru</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="controller/j_membru/j_membru_handler.php" method="POST" class="col p-4 position-static" enctype="multipart/form-data">
                <div class="modal-body">
                    <div class="row justify-content-md-center mt-4">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="naran_kompletu">Naran Kompletu:</label>
                                <select class="form-control" id="id_jerasaun_fdsl" name="id_jerasaun_fdsl">
                                    <option hidden selected>- Hili naran -</option>
                                    <?php
                                    $id_jerasaun_fdsl = $get_table->get_table('view_jerasaun_fdsl order by naran_kompletu ASC');
                                    foreach ($id_jerasaun_fdsl as $a) {
                                        echo '<option value="' . $a['id_jerasaun_fdsl'] . '">' . $a['naran_kompletu'] . '</option>';
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="pozisaun">Pozisaun</label>
                                <select class="form-control" id="id_tipu_estrutura_fdsl" name="id_tipu_estrutura_fdsl">
                                    <option hidden selected>- Hili Pozisaun -</option>
                                    <?php
                                    $tipu_estrutura_fdsl = $get_table->get_table('tipu_estrutura_fdsl order by tipu_estrutura_fdsl ASC');
                                    foreach ($tipu_estrutura_fdsl as $a) {
                                        echo '<option value="' . $a['id_tipu_estrutura_fdsl'] . '">' . $a['tipu_estrutura_fdsl'] . '</option>';
                                    }
                                    ?>
                                </select>
                            </div>
                            <div class="row justify-content-md-center mt-4">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <div class="form-group">
                                            <label for="data_inisiu">Data Hahu:</label>
                                            <input type="date" class="form-control" id="data_inisiu" name="data_inisiu" placeholder="Hatama data hahu">
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Kansela</button>
                        <button type="submit" class="btn btn-success" name="jerasaun_fdsl">Rai</button>
                    </div>
            </form>
        </div>
    </div>
</div>