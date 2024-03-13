<?php
require_once 'model/formularioCidadaoModel.php';
require_once 'view/formularioCidadaoView.php';

class CidadaoController {
    private $model;
    private $view;

    public function __construct($model, $view) {
        $this->model = $model;
        $this->view = $view;
    }

    public function handleRequest() {
        if (isset($_POST['submit'])) {
            include_once('config.php');

            $nome = $_POST['nome'];
            $cpf = $_POST['cpf'];
            $cep = $_POST['cep'];
            $cidade = $_POST['cidade'];
            $estado = $_POST['estado'];
            $logradouro = $_POST['logradouro'];
            $numero = $_POST['numero'];
            $telefone = $_POST['telefone'];
            $email = $_POST['email'];

            $this->model->cadastrarCidadao($nome, $cpf, $cep, $cidade, $estado, $logradouro, $numero, $telefone, $email);

            header('Location: sistema.php');
        }
        
        $this->view->mostrarFormularioCidadao();
    }
}
?>
