<?php
require_once 'model/atendimentoModel.php';
require_once 'view/atendimentoView.php';

class AtendimentoController {
    private $model;
    private $view;
    private $conexao;

    public function __construct($model, $view, $conexao) {
        $this->model = $model;
        $this->view = $view;
        $this->conexao = $conexao;
    }

    public function handleRequest() {
        session_start();

        $sqlMotivos = "SELECT motivo_id, descricao FROM motivos";
        $resultMotivos = $this->conexao->query($sqlMotivos);
        $motivos = [];
        while ($row = $resultMotivos->fetch_assoc()) {
            $motivos[] = $row;
        }

        if (isset($_POST['submit'])) {
            $cpf = $_POST['cpf'];
            $data_atendimento = $_POST['data_atendimento'];
            $motivo_id = $_POST['motivo'];
            $atendente_id = $_POST['atendente_id'];

            $this->model->cadastrarAtendimento($cpf, $data_atendimento, $motivo_id, $atendente_id);

            header('Location: sistema.php');
        }

        $this->view->mostrarFormularioAtendimento($motivos);
    }
}
?>