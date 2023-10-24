<?php
$kartaun = $get_table->get_table("view_kartaun order by naran_kompletu ASC");
$jerasaun_fdsl = $get_table->get_table("view_jerasaun_fdsl order by naran_kompletu ASC");
$tipu_kartaun = $get_table->get_table("tipu_kartaun order by tipu_kartaun ASC");
?>

<div class="container-fluid">
    <div class="row">
        <div class="col-xl-12 col-lg-7">
            <div class="card shadow mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Kartaun</h6>
                    <a href="#" class="btn btn-success btn-icon-split" data-toggle="modal" data-target="#insert_kartaun">
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
                                    <th>ID</th>
                                    <th>Naran</th>
                                    <th>Sexu</th>
                                    <th>Tlf</th>
                                    <th>Tipu Jerasaun</th>
                                    <th>Tipu Kartaun</th>
                                    <th>Asaun</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $no = 1;
                                foreach ($kartaun as $loop) {
                                    echo '<tr>
                                        <td>' . $loop['id_rejistu'] . '</td>     
                                        <td>' . $loop['naran_kompletu'] . '</td>
                                        <td>' . $loop['sexu'] . '</td>     
                                        <td>' . $loop['nu_telemovel'] . '</td>
                                        <td>' . $loop['tipu_jerasaun'] . '</td>     
                                        <td>' . $loop['tipu_kartaun'] . '</td>
                                        <td>
                                            <div class="d-flex justify-content-center flex-shrink-0">
                                                <a href="content/j_kartaun/tcpdf/kartaun_fdsl.php?id='.$loop['id_kartaun'].'" target="_blank" class="btn btn-sm btn-light btn-active-primary">
                                                    <i class="fas fa-eye"></i>
                                                </a>

                                                <a href="#" class="btn btn-sm btn-light btn-active-primary" 
                                                data-toggle="modal" 
                                                data-target="#edit_kartaun" 
                                                data-id_kartaun="' . $loop['id_kartaun'] . '">
                                                    <i class="fas fa-pen"></i>
                                                </a>

                                                <a href="#" class="btn btn-sm btn-light btn-active-primary" 
                                                data-toggle="modal" 
                                                data-target="#delete_kartaun" 
                                                data-id_kartaun="' . $loop['id_kartaun'] . '">
                                                    <i class="fas fa-trash"></i>
                                                </a>
                                            </div>
                                        </td>
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

<!-- Modal Aumenta -->
<div class="modal fade" id="insert_kartaun" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header bg-gradient-success">
                <h5 class="modal-title text-white" id="exampleModalLabel">Kria Kartaun Foun</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="controller/j_kartaun/j_kartaun_handler.php" method="POST" class="col p-4 position-static" enctype="multipart/form-data">
                <div class="modal-body">
                    <div class="row justify-content-md-center mt-4">
                        <div class="col-md-5">
                            <div class="form-group">
                                <label for="id_identidade">Naran:</label>
                                <select class="form-control" id="id_identidade" name="id_identidade">
                                    <?php
                                    echo '<option selected hidden>- Hili Naran -</option>';
                                    foreach ($jerasaun_fdsl as $loop) {
                                        echo '<option value="' . $loop['id_identidade'] . '">' . $loop['naran_kompletu'] . '</option>';
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-5">
                            <div class="form-group">
                                <label for="id_tipu_kartaun">Tipu Kartaun:</label>
                                <select class="form-control" id="id_tipu_kartaun" name="id_tipu_kartaun">
                                    <?php
                                    echo '<option selected hidden>- Hili Tipu Kartaun -</option>';
                                    foreach ($tipu_kartaun as $loop) {
                                        echo '<option value="' . $loop['id_tipu_kartaun'] . '">' . $loop['tipu_kartaun'] . '</option>';
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Kansela</button>
                    <button type="submit" class="btn btn-success" name="insert_kartaun">Rai</button>
                </div>
            </form>
        </div>
    </div>
</div>