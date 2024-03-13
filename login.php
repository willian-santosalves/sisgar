<?php
require_once 'controller/loginController.php';
require_once 'model/loginModel.php';
require_once 'view/loginView.php';

include_once('config.php');

$model = new UserModel($conexao);
$view = new LoginView();
$controller = new LoginController($model, $view);

$controller->handleRequest();
?>