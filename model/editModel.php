<?php
class EditModel
{
    private $conexao;

    public function __construct($conexao)
    {
        $this->conexao = $conexao;
    }

    public function getAtendimentoById($id)
    {
        $sqlSelect = "SELECT atendimento.atendimento_id, cidadao.nome AS nome, cidadao.cpf, atendente.nome AS atendente, atendimento.data_atendimento, motivos.descricao 
        FROM atendimento
        JOIN cidadao ON atendimento.cidadao_id = cidadao.cidadao_id
        JOIN atendente ON atendimento.atendente_id = atendente.atendente_id
        JOIN motivos ON atendimento.motivo_id = motivos.motivo_id
        WHERE atendimento.atendimento_id=$id";

        $result = $this->conexao->query($sqlSelect);

        return ($result->num_rows > 0) ? $result->fetch_assoc() : null;
    }

    public function getAtendentes()
    {
        $sqlAtendente = "SELECT atendente_id, nome FROM atendente";
        $resultAtendente = $this->conexao->query($sqlAtendente);

        $atendentes = [];
        while ($row = $resultAtendente->fetch_assoc()) {
            $atendentes[] = $row;
        }

        return $atendentes;
    }

    public function getMotivos()
    {
        $sqlMotivos = "SELECT motivo_id, descricao FROM motivos";
        $resultMotivos = $this->conexao->query($sqlMotivos);

        $motivos = [];
        while ($row = $resultMotivos->fetch_assoc()) {
            $motivos[] = $row;
        }

        return $motivos;
    }
}
?>