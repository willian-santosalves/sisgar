<?php

include_once('model/graficosModel.php');

class DashboardController
{
    private $model;

    public function __construct($conexao)
    {
        $this->model = new DashboardModel($conexao);
    }

    public function exibirDashboard()
    {
        $dados_estados = $this->model->obterDadosEstados();
        $dados_motivos = $this->model->obterDadosMotivos();
        $dados_atendentes = $this->model->obterDadosAtendentes();

        include('view/graficosView.php');
    }
}
?>
