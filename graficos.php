<?php
session_start();
include_once('config.php');
include_once('controller/graficosController.php');

if ((!isset($_SESSION['cpf']) == true) and (!isset($_SESSION['senha']) == true)) {
    unset($_SESSION['cpf']);
    unset($_SESSION['senha']);
    header('Location: login.php');
}

$dashboardController = new DashboardController($conexao);
$dashboardController->exibirDashboard();
?>