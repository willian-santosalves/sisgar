<?php
require_once 'model/sistemaModel.php';
require_once 'view/sistemaView.php';

class AtendimentoController {
    private $model;
    private $view;

    public function __construct($model, $view) {
        $this->model = $model;
        $this->view = $view;
    }

    public function handleRequest() {
        session_start();

        if ((!isset($_SESSION['cpf']) == true) and (!isset($_SESSION['senha']) == true)) {
            unset($_SESSION['cpf']);
            unset($_SESSION['senha']);
            header('Location: login.php');
        }

        if (!empty($_GET['search'])) {
            $search = $_GET['search'];
        } else {
            $search = null;
        }

        $result = $this->model->getAtendimentos($search);

        $this->view->mostrarAtendimentos($result);
    }
}
?>