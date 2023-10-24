<?php
include_once '../../access_control/connection.php';
include_once '../../../config/parametros_db.php';
include_once 'j_materia_class.php';

$class_j_materia = new j_materia(PSQLHOST, PSQLUSER, PSQLPW, PSQLDB);

// Insert

// Materia 
if (isset($_POST['aumenta_materia'])) {
    $id_area_materia = $_POST['id_area_materia'];

    // Anexos
    $dados_documentos = "";
    $nome_documentos = "";
    $tipo_documentos = "";
    $tamanho_documentos = 0;
    if (!empty($_POST['action'])) {
        if ($_POST['action'] == 'enviar' && $_FILES["file"]) {
            if ($_FILES["file"]["error"] > 0) {
                echo "Error: " . $_FILES["file"]["error"] . "<br>";
            } else {
                $img = fopen($_FILES['file']['tmp_name'], 'r') or die("cannot read the file\n");
                $documentos = $_FILES['file']['name'];
                $fahe = explode('.', $documentos);
                $formato = strtolower(end($fahe));
                $nome_documentos = $_FILES['file']['name'];
                $tipo_documentos = $_FILES['file']['type'];
                $tamanho_documentos = $_FILES['file']['size'];
                $data = fread($img, filesize($_FILES['file']['tmp_name']));
                $dados_documentos = pg_escape_bytea($data);
            }
        }
    }

    $insert_status = $class_j_materia->aumenta_materia($id_area_materia, $dados_documentos, $nome_documentos, $tipo_documentos, $tamanho_documentos);
}
// Area Materia 
if (isset($_POST['aumenta_area_materia'])) {
    $area_materia = $_POST['area_materia'];
    $code = $_POST['code'];

    $insert_status = $class_j_materia->aumenta_area_materia($area_materia, $code);
}

// Update 

// Area_materia
if (isset($_POST['muda_area_materia'])) {
    $id = $_POST['id_area_materia'];
    $area_materia = $_POST['area_materia'];
    $code = $_POST['code'];

    $update_status = $class_j_materia->muda_area_materia($id, $area_materia, $code);
}

// Hamos 

// Area_materia
if (isset($_POST['hamos_area_materia'])) {
    $tabela = 'area_materia';
    $id = 'id_area_materia';
    $id_dados = $_POST['id_area_materia'];

    $update_status = $class_j_materia->delete($tabela, $id, $id_dados);
    return header("location: ../../index.php?c=area");
}
if (isset($_POST['hamos_materia'])) {
    $tabela = 'materia';
    $id = 'id_materia';
    $id_dados = $_POST['id_materia'];
    $id_area_materia = $_POST['id_area_materia'];

    $update_status = $class_j_materia->delete($tabela, $id, $id_dados);
    return header("location: ../../index.php?c=materia_klik&id=$id_area_materia");
}

// View Dados iha Navegador Ex: PDF
if (!empty($_GET['id']) && $_GET['action'] == 'ExibirNoNavegador') {
    $id = htmlspecialchars($_GET['id']);
    $estado = $class_j_materia->get_documentos($id);
}
