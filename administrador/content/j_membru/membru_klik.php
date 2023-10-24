<?php
$id = $_GET['id'];
$membru_fdsl = $get_table->get_table_uuid("", "view_jerasaun_fdsl", "id_tipu_jerasaun", $id, "");
$tipu_jerasaun = $get_table->get_table_uuid("", "tipu_jerasaun", "id_tipu_jerasaun", $id, "");
?>

<div class="container-fluid">
    <div class="row">
        <div class="col-xl-12 col-lg-7">
            <div class="card shadow mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold">
                        <a href="?c=membru" class="text-primary">Membru</a>
                        &nbsp;&nbsp;&nbsp;/&nbsp;&nbsp;&nbsp;
                        Membru
                        <?php foreach ($tipu_jerasaun as $loop) {
                            echo $loop['tipu_jerasaun'];
                        } ?>
                    </h6>
                    <!-- <a href="#" class="btn btn-success btn-icon-split" data-toggle="modal" data-target="#insert_membru">
                        <span class="text">Aumenta</span>
                        <span class="icon text-white-50">
                            <i class="fas fa-plus"></i>
                        </span>
                    </a> -->
                </div>
                <div class="card-body">

                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>ID Membru</th>
                                    <th>Naran</th>
                                    <th>Sexu</th>
                                    <th>Nu. Tel</th>
                                    <th>Email</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $no = 1;
                                foreach ($membru_fdsl as $loop) {
                                    echo
                                    '<tr>
                                        <td>' . $no++ . '</td>
                                        <td>' . $loop['id_rejistu'] . '</td>
                                        <td>' . $loop['naran_kompletu'] . '</td>
                                        <td>' . $loop['sexu'] . '</td>
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
<div class="modal fade" id="insert_membru" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header bg-gradient-success">
                <h5 class="modal-title text-white" id="exampleModalLabel">Aumenta dadus Membru</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <form>
                <!-- hidden -->
                <input type="email" class="form-control" name="id_tipu_jerasaun" value="<?= $id ?>">
                <div class="modal-body">
                    <div class="row justify-content-md-center mt-4">
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="id_identidade">ID Membru:</label>
                                <input type="email" class="form-control" id="id_identidade" name="id_identidade" placeholder="Hatama Naran Kompletu">
                            </div>
                        </div>
                        <div class="col-md-7">
                            <div class="form-group">
                                <label for="naran_kompletu">Naran:</label>
                                <input type="email" class="form-control" id="naran_kompletu" name="naran_kompletu" placeholder="Hatama Naran Kompletu">

                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-md-center mt-4">
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

                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="nu_telemovel">Nu. Tel:</label>
                                <input type="email" class="form-control" id="nu_telemovel" name="nu_telemovel" placeholder="Hatama Numeru Telemovel">
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
                    <button type="submit" class="btn btn-success" name="">Rai</button>
                </div>
        </div>
    </div>
</div>