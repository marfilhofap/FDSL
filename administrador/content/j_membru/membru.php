<?php
$tipu_jerasaun = $get_table->get_table("tipu_jerasaun order by tipu_jerasaun ASC");
?>

<div class="container-fluid">
    <div class="row">
        <div class="col-xl-12 col-lg-7">
            <div class="card shadow mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Dadus Membru</h6>
                    <a href="#" class="btn btn-success btn-icon-split" data-toggle="modal" data-target="#jerasaun_fdsl">
                        <span class="text">Aumenta</span>
                        <span class="icon text-white-50">
                            <i class="fas fa-plus"></i>
                        </span>
                    </a>
                </div>
                <div class="card-body">
                    <div class="row">
                        <?php
                        $no = 1;
                        foreach ($tipu_jerasaun as $loop) {
                            $membro_fdsl = $get_table->get_table_uuid("", "view_jerasaun_fdsl", "id_tipu_jerasaun", $loop['id_tipu_jerasaun'], "");
                            echo '<div class="col-xl-3 col-md-6 mb-4">
                                    <div class="card border-left-primary shadow h-100 py-2">
                                        <div class="card-body">
                                            <a href="?c=membru_klik&id=' . $loop['id_tipu_jerasaun'] . '" class="text-decoration-none">
                                                <div class="row no-gutters align-items-center">
                                                
                                                    <div class="col mr-2">
                                                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                            Membro : ' . $loop['tipu_jerasaun'] . '</div>
                                                        <div class="h5 mb-0 font-weight-bold text-gray-800">Total: ' . count($membro_fdsl) . '</div>
                                                    </div>
                                                    <div class="col-auto">
                                                        <i class="fas fa-users fa-2x text-gray-300"></i>
                                                    </div>
                                                
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>';
                        }
                        ?>
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
                        <div class="col-md-7">
                            <div class="form-group">
                                <label for="id_membru">Naran Kompletu</label>
                                <input type="text" class="form-control" id="naran_kompletu" name="naran_kompletu" placeholder="Hatama Naran Kompletu">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="sexu">Sexo:</label>
                                <select class="form-control" id="sexu" name="sexu">
                                    <option hidden selected>- Hili Sexo -</option>
                                    <option value="M">Mane</option>
                                    <option value="F">Feto</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-md-center mt-4">
                        <div class="col-md-2">
                            <div class="form-group">
                                <div class="form-group">
                                    <label for="data_moris">Data Moris:</label>
                                    <input type="date" class="form-control" name="data_moris" placeholder="Hatama Naran Kompletu">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-group">
                                <div class="form-group">
                                    <label for="naran_kompletu">Jerasaun:</label>
                                    <select class="form-control" id="id_tipu_jerasaun" name="id_tipu_jerasaun">
                                        <option hidden selected>- Hili Jerasaun -</option>
                                        <?php
                                        foreach ($tipu_jerasaun as $loop) {
                                            echo '<option value="' . $loop['id_tipu_jerasaun'] . '">' . $loop['tipu_jerasaun'] . '</option>';
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="nu_telemovel">Nu. Tel:</label>
                                <input type="text" class="form-control" id="nu_telemovel" name="nu_telemovel" placeholder="Hatama Numeru Telemovel">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="email">Email:</label>
                                <input type="email" class="form-control" id="email" name="email" placeholder="Hatama Email">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Kansela</button>
                    <button type="submit" class="btn btn-success" name="hatama_membru_foun">Rai</button>
                </div>
            </form>
        </div>
    </div>
</div>