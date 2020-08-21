<?php
/* Define a página atual pela URL */
$pagina = 'dashBoard';
 
if(isset($_GET['pagina'])){
    $pagina = $_GET['pagina'];
}
 
/* Carrega o header.php */
include 'main.php';
 
/* Carrega a página escolhida pelo usuário */
switch ($pagina) {
    case 'dashBoard':
        include 'dashBoard.php';
        break;
    case 'cadastroFuncionario':
        include 'cadastroFuncionario.php';
        break;
	case 'cadastroUsuario':
        include 'cadastroUsuario.php';
        break;
    case 'cadastroProjeto':
        include 'cadastroProjeto.php';
        break;
    case 'cadastroCaEpi':
        include 'cadastroCaEpi.php';
        break;
    default:
        include 'error/404.php';
        break;
}
 
/* Carrega o footer.php */
include 'footer.php';

