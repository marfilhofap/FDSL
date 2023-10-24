<?php
$lista_utilijador = $get_table->get_table("utilijador");
$lista_jerasaun = $get_table->get_table("view_jerasaun_fdsl order by naran_kompletu ASC");
?>

<div class="container-fluid">
    <div class="row">
        <div class="col-xl-12 col-lg-7">
            <div class="card shadow mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Utilijador</h6>
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
                                    <th>Naran</th>
                                    <th>Email</th>
                                    <th>Username</th>
                                    <th>Assaun</th>


                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $conta = 1;
                                foreach ($lista_utilijador as $lista) { ?>
                                    <tr>
                                        <td><?php echo $conta; ?></td>
                                        <td><?php echo $lista['naran_kompletu'] ?></td>
                                        <td><?php echo $lista['email'] ?></td>
                                        <td><?php echo $lista['username'] ?></td>
                                        <td>
                                            <div class="d-flex justify-content-center flex-shrink-0">
                                                <!-- <a href="#" class="btn btn-sm btn-light btn-active-primary" data-toggle="modal" data-target="#edit_utilijador" data-id_utilijador="<?= $lista['id_utilijador'] ?>">
                                                    <i class="fas fa-pen"></i>
                                                </a> -->

                                                <a href="#" class="btn btn-sm btn-light btn-active-primary" data-toggle="modal" data-target="#hamos_utilijador" data-id_utilijador="<?= $lista['id_utilijador'] ?>">
                                                    <i class=" fas fa-trash"></i>
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                <?php
                                    $conta++;
                                } ?>
                            </tbody>
                        </table>
                    </div>

                </div>

            </div>
        </div>
    </div>
</div>


<div class="modal fade" id="jerasaun_fdsl" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header bg-gradient-success">
                <h5 class="modal-title text-white" id="exampleModalLabel">Aumenta Utilijador</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="controller/j_utilijador/j_utilijador_handler.php" method="POST" class="col p-4 position-static" enctype="multipart/form-data">
                <div class="modal-body">
                    <div class="row justify-content-md-center mt-4">
                        <div class="col-md-12">
                            <div class="form-group">
                                <div class="form-group">
                                    <label for="naran_kompletu">Naran Kompletu:</label>
                                    <select class="form-control" id="id_jerasaun_fdsl" name="id_jerasaun_fdsl">
                                        <option hidden selected>- Hili Naran -</option>
                                        <?php
                                        foreach ($lista_jerasaun as $loop) {
                                            echo '<option value="' . $loop['id_jerasaun_fdsl'] . '">' . $loop['naran_kompletu'] . '</option>';
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Kansela</button>
                    <button type="submit" class="btn btn-success" name="insert_utilijador">Rai</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Modal Delete -->
<div class="modal fade" id="hamos_utilijador" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-header bg-gradient-danger">
                <h5 class="modal-title text-white" id="exampleModalLabel">Delete Utilijador</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="controller/j_utilijador/j_utilijador_handler.php" method="POST" class="col p-4 position-static" enctype="multipart/form-data">
                <div class="modal-body">
                    <div class="row justify-content-md-center mt-4">
                        <div class="col-md-12">
                            <div class="form-group">
                                <p>Tebes hakarak hamos dados ne?</p>

                                <input type="hidden" class="form-control" id="id_utilijador" name="id_utilijador">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Lae</button>
                    <button type="submit" class="btn btn-danger" name="hamos_utilijador">Sim</button>
                </div>
            </form>
        </div>
    </div>
</div>


<script>
    $(document).ready(function() {

        $('#hamos_utilijador').on('show.bs.modal', function(event) {

            var button = $(event.relatedTarget)
            var id_utilijador = button.data('id_utilijador')


            var modal = $(this)
            modal.find('#id_utilijador').val(id_utilijador)


        })

    })
</script>