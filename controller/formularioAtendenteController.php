<?php
require_once 'model/formularioAtendenteModel.php';
require_once 'view/formularioAtendenteView.php';

class RegisterController {
    private $model;
    private $view;

    public function __construct($model, $view) {
        $this->model = $model;
        $this->view = $view;
    }

    public function handleRequest() {
        if (isset($_POST['submit'])) {
            $nome = $_POST['nome'];
            $email = $_POST['email'];
            $senha = $_POST['senha'];

            $result = $this->model->inserirUsuario($nome, $email, $senha);

            if ($result) {
                header('Location: login.php');
            } else {
                // Lógica para lidar com falha na inserção
            }
        } else {
            $this->view->mostrarFormulario();
        }
    }
}
?>
