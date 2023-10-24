<?php
include_once '../../access_control/connection.php';
include_once '../../../config/parametros_db.php';
include_once 'j_publikasaun_class.php';
include_once '../get_table.php';

$class_j_publikasaun = new j_publikasaun(PSQLHOST, PSQLUSER, PSQLPW, PSQLDB);
$get_table = new gestaoTabelas(PSQLHOST, PSQLUSER, PSQLPW, PSQLDB);

// Tpu Publikasaun
if (isset($_POST['insert_tipu_publikasaun'])) {
    $tipu_publikasaun = $_POST['tipu_publikasaun'];

    $status = $class_j_publikasaun->insert_tipu_publikasaun($tipu_publikasaun);
}

if (isset($_POST['update_tipu_publikasaun'])) {
    $id = $_POST['id_tipu_publikasaun'];
    $tipu_publikasaun = $_POST['tipu_publikasaun'];

    $status = $class_j_publikasaun->update_tipu_publikasaun($id, $tipu_publikasaun);
}

if (isset($_POST['delete_tipu_publikasaun'])) {
    $table_name = 'tipu_publikasaun';
    $id = 'id_tipu_publikasaun';
    $id_dados = $_POST['id_tipu_publikasaun'];

    $status = $get_table->delete($table_name, $id, $id_dados);

    return header("location: ../../index.php?c=tipu_publikasaun");
}

