<?php
require_once 'controller/sistemaController.php';
require_once 'model/sistemaModel.php';
require_once 'view/sistemaView.php';

include_once('config.php');

$model = new AtendimentoModel($conexao);
$view = new AtendimentoView();
$controller = new AtendimentoController($model, $view);

$controller->handleRequest();
?>