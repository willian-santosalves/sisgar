<?php
require_once 'controller/formularioCidadaoController.php';
require_once 'model/formularioCidadaoModel.php';
require_once 'view/formularioCidadaoView.php';

include_once('config.php');

$model = new CidadaoModel($conexao);
$view = new CidadaoView();
$controller = new CidadaoController($model, $view);

$controller->handleRequest();
?>