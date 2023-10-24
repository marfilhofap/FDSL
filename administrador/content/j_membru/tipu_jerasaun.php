<?php
$dados = $get_table->get_table('tipu_jerasaun order by tipu_jerasaun');
?>

<div class="container-fluid">
    <div class="row">
        <div class="col-xl-12 col-lg-7">
            <div class="card shadow mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Tipu Jerasaun</h6>
                    <a href="#" class="btn btn-success btn-icon-split" data-toggle="modal" data-target="#aumenta_tipu_jerasaun">
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
                                    <th>Tipu Jerasaun</th>
                                    <th>Data Inisiu</th>
                                    <th>Komentariu</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $no = 1;
                                foreach ($dados as $loop) {
                                    echo
                                    '<tr>
                                        <td>' . $no++ . '</td>
                                        <td>' . $loop['tipu_jerasaun'] . '</td>
                                        <td>' . $loop['data_inisiu'] . '</td>
                                        <td>' . $loop['komentariu'] . '</td>
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
<div class="modal fade" id="aumenta_tipu_jerasaun" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
            <form action="controller/j_materia/j_materia_handler.php" method="POST" class="col p-4 position-static" enctype="multipart/form-data">
                <div class="modal-header bg-gradient-success">
                    <h5 class="modal-title text-white" id="exampleModalLabel">Aumenta Tipu Jerasaun</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row justify-content-md-center mt-4">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="naran_kompletu">Jerasaun:</label>
                                <input type="email" class="form-control" id="naran_kompletu" placeholder="Hatama Tipu Jerasaun">
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-group">
                                <div class="form-group">
                                    <label for="naran_kompletu">Data Hahu:</label>
                                    <input type="date" class="form-control" id="naran_kompletu" placeholder="Hatama Hahu">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-md-center mt-2">
                        <div class="col-md-8">
                            <div class="form-group">
                                <div class="form-group">
                                    <label for="exampleFormControlTextarea1">Komentariu:</label>
                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Kansela</button>
                    <button type="button" class="btn btn-success">Rai</button>
                </div>
            </form>
        </div>
    </div>
</div