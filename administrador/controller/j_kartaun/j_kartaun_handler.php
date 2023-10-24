<?php
include_once '../../access_control/connection.php';
include_once '../../../config/parametros_db.php';
include_once 'j_kartaun_class.php';
include_once '../get_table.php';

$class_j_kartaun = new j_kartaun(PSQLHOST, PSQLUSER, PSQLPW, PSQLDB);
$get_table = new gestaoTabelas(PSQLHOST, PSQLUSER, PSQLPW, PSQLDB);

$dt = new DateTime("now", new DateTimeZone('Asia/Dili'));
$dt->setTimestamp(time());

// Tipu Kartaun
if (isset($_POST['insert_tipu_kartaun'])) {
    $tipu_kartaun = $_POST['tipu_kartaun'];

    $update_status = $class_j_kartaun->insert_tipu_kartaun($tipu_kartaun);
}

if (isset($_POST['edit_tipu_kartaun'])) { 
    $id_tipu_kartaun = $_POST['id_tipu_kartaun'];
    $tipu_kartaun = $_POST['tipu_kartaun'];

    $update_status = $class_j_kartaun->edit_tipu_kartaun($id_tipu_kartaun, $tipu_kartaun);
}

if (isset($_POST['delete_tipu_kartaun'])) {
    $table_name = 'tipu_kartaun';
    $id = 'id_tipu_kartaun';
    $id_dados = $_POST['id_tipu_kartaun'];

    $status = $get_table->delete($table_name, $id, $id_dados);

    return header("location: ../../index.php?c=tipu_kartaun");
}

// Kartaun
if (isset($_POST['insert_kartaun'])) {
    $id_identidade = $_POST['id_identidade'];
    $id_tipu_kartaun = $_POST['id_tipu_kartaun'];
    $verifikasaun = md5($_POST['id_identidade']);
    $data_oras = $dt->format('d-m-Y (H:i)');

    $update_status = $class_j_kartaun->insert_kartaun($id_identidade, $id_tipu_kartaun, $verifikasaun, $data_oras);
}

// if (isset($_POST['edit_tipu_kartaun'])) { 
//     $id_tipu_kartaun = $_POST['id_tipu_kartaun'];
//     $tipu_kartaun = $_POST['tipu_kartaun'];

//     $update_status = $class_j_kartaun->edit_tipu_kartaun($id_tipu_kartaun, $tipu_kartaun);
// }

// if (isset($_POST['delete_tipu_kartaun'])) {
//     $table_name = 'tipu_kartaun';
//     $id = 'id_tipu_kartaun';
//     $id_dados = $_POST['id_tipu_kartaun'];

//     $status = $get_table->delete($table_name, $id, $id_dados);

//     return header("location: ../../index.php?c=tipu_kartaun");
// }