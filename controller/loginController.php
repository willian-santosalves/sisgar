<?php
require_once 'model/loginModel.php';
require_once 'view/loginView.php';

class LoginController {
    private $model;
    private $view;

    public function __construct($model, $view) {
        $this->model = $model;
        $this->view = $view;
    }

    public function handleRequest() {
        session_start();

        if (isset($_POST['submit']) && !empty($_POST['email']) && !empty($_POST['senha'])) {
            $email = $_POST['email'];
            $senha = $_POST['senha'];

            $atendente_id = $this->model->autenticarUsuario($email, $senha);

            if (!$atendente_id) {
                session_unset();
                header('Location: login.php');
            } else {
                $_SESSION['email'] = $email;
                $_SESSION['senha'] = $senha;
                $_SESSION['atendente_id'] = $atendente_id;
                header('Location: sistema.php');
            }
        } else {
            $this->view->mostrarFormulario();
        }
    }
}
?>