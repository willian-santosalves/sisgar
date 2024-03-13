<?php
require_once 'config.php';
require_once 'controller/atendimentoController.php';
require_once 'model/atendimentoModel.php';
require_once 'view/atendimentoView.php';

$model = new AtendimentoModel($conexao);
$view = new AtendimentoView();
$controller = new AtendimentoController($model, $view, $conexao);

$controller->handleRequest();
?>