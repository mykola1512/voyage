<?php 
$page = isset($_GET['page']) ? $_GET['page'] : 'home';

switch ($page) {
    case 'registo':
        include 'registo.php';
        break;
    case 'login':
        include 'login.php';
        break;
    case 'adicionar_destino':
        include 'adicionar_destino.php';
        break;
    case 'listar_destinos':
        include 'listar_destinos.php';
        break;
    case 'aboutus':
        include 'aboutus.php';
        break;
    case 'perfil':
        include 'perfil.php';
        break;
    default:
        include 'home.php';
        break;
}
?>