<?php
include_once '../../access_control/connection.php';
include_once '../../../config/parametros_db.php';
include_once 'j_assets_class.php';

$class_j_assets = new j_assets(PSQLHOST, PSQLUSER, PSQLPW, PSQLDB);

// Insert
if (isset($_POST['insert_tipo_assets'])) {
    $tipo_assets = $_POST['tipo_assets'];

    $update_status = $class_j_assets->insert_tipo_assets($tipo_assets);
}

// Edit
if (isset($_POST['edit_tipo_assets'])) {
    $id_tipo_assets = $_POST['id_tipo_assets'];
    $tipo_assets = $_POST['tipo_assets'];

    $update_status = $class_j_assets->edit_tipo_assets($id_tipo_assets, $tipo_assets);
}

// Delete
if (isset($_POST['delete_tipo_assets'])) {
    $table_name = 'tipo_assets';
    $id = 'id_tipo_assets';
    $id_dados = $_POST['id_tipo_assets'];

    $update_status = $class_j_assets->delete($table_name, $id, $id_dados);
    return header("location: ../../index.php?c=tipu_assets");
}

