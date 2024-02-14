<?php
$content = isset($_GET['c']) ? $_GET['c'] : "index";
// include('content/dashboard.php');

switch ($content) {
    case 'index':
        include __DIR__ . '/../content/dashboard.php';
        break;
    case 'materia':
        include __DIR__ . '/../content/j_materia/materia.php';
        break;
    case 'materia_klik':
        include __DIR__ . '/../content/j_materia/materia_klik.php';
        break;
    case 'area':
        include __DIR__ . '/../content/j_materia/area.php';
        break;
    case 'publikasaun':
        include __DIR__ . '/../content/j_publikasaun/publikasaun.php';
        break;
    case 'insert_publikasaun':
        include __DIR__ . '/../content/j_publikasaun/insert_publikasaun.php';
        break;
    case 'tipu_publikasaun':
        include __DIR__ . '/../content/j_publikasaun/tipu_publikasaun.php';
        break;
    case 'partisipante_programa':
        include __DIR__ . '/../content/j_programa/partisipante_programa.php';
        break;
    case 'partisipante_programa_detalho':
        include __DIR__ . '/../content/j_programa/partisipante_programa_detalho.php';
        break;
    case 'programa':
        include __DIR__ . '/../content/j_programa/programa.php';
        break;
    case 'tipu_programa':
        include __DIR__ . '/../content/j_programa/tipu_programa.php';
        break;
    case 'membru':
        include __DIR__ . '/../content/j_membru/membru.php';
        break;
    case 'membru_klik':
        include __DIR__ . '/../content/j_membru/membru_klik.php';
        break;
    case 'estrutura':
        include __DIR__ . '/../content/j_membru/estrutura.php';
        break;
    case 'tipu_jerasaun':
        include __DIR__ . '/../content/j_membru/tipu_jerasaun.php';
        break;
    case 'tipu_estrutura':
        include __DIR__ . '/../content/j_membru/tipu_estrutura.php';
        break;
    case 'utilijador':
        include __DIR__ . '/../content/j_utilijador/utilijador.php';
        break;
    case 'nivel_asesu':
        include __DIR__ . '/../content/j_utilijador/nivel_asesu.php';
        break;
    case 'tipu_assets':
        include __DIR__ . '/../content/j_assets/tipu_assets.php';
        break;
    case 'dados_assets':
        include __DIR__ . '/../content/j_assets/dados_assets.php';
        break;
    case 'tipu_kartaun':
        include __DIR__ . '/../content/j_kartaun/tipu_kartaun.php';
        break;
    case 'dados_kartaun':
        include __DIR__ . '/../content/j_kartaun/dados_kartaun.php';
        break;
    case 'sertifikadu':
        include __DIR__ . '/../content/j_sertifikadu/sertifikadu.php';
        break;
    case 'tipu_sertifikadu':
        include __DIR__ . '/../content/j_sertifikadu/tipu_sertifikadu.php';
        break;
    default:
        include __DIR__ . '/../content/dashboard.php';
        break;
}
