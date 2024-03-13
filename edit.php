<?php
include_once('config.php');
include_once('controller/editController.php');

if (!empty($_GET['id'])) {
    $controller = new EditController($conexao);
    $controller->editarAtendimento($_GET['id']);
} else {
    header('Location: sistema.php');
}
?>