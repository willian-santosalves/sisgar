<?php
require_once 'controller/formularioAtendenteController.php';
require_once 'model/formularioAtendenteModel.php';
require_once 'view/formularioAtendenteView.php';

include_once('config.php');

$model = new UserModel($conexao);
$view = new RegisterView();
$controller = new RegisterController($model, $view);

$controller->handleRequest();
?>