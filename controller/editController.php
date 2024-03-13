<?php
include_once('config.php');
include_once('model/editModel.php');

class EditController
{
    private $conexao;

    public function __construct($conexao)
    {
        $this->conexao = $conexao;
    }

    public function editarAtendimento($id)
    {
        $editModel = new EditModel($this->conexao);
        $atendimento = $editModel->getAtendimentoById($id);
        $atendentes = $editModel->getAtendentes();
        $motivos = $editModel->getMotivos();

        if (!$atendimento) {
            header('Location: sistema.php');
            exit;
        }

        include('view/editView.php');
    }

    public function salvarEdicao($postData)
    {
        header('Location: sistema.php');
    }
}
?>
