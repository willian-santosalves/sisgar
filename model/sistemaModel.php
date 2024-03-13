<?php
class AtendimentoModel {
    private $conexao;

    public function __construct($conexao) {
        $this->conexao = $conexao;
    }

    public function getAtendimentos($search = null) {
        if (!empty($search)) {
            $data = $search;
            $sql = "SELECT atendimento.atendimento_id, cidadao.nome AS nome, cidadao.cpf, atendente.nome AS atendente, atendimento.data_atendimento, motivos.descricao 
            FROM atendimento
            JOIN cidadao ON atendimento.cidadao_id = cidadao.cidadao_id
            JOIN atendente ON atendimento.atendente_id = atendente.atendente_id
            JOIN motivos ON atendimento.motivo_id = motivos.motivo_id
            WHERE cidadao.cidadao_id LIKE '%$data%' OR cidadao.nome LIKE '%$data%' OR cidadao.cpf LIKE '%$data%'
            ORDER BY atendimento.atendimento_id";
        } else {
            $sql = "SELECT atendimento.atendimento_id, cidadao.nome AS nome,
            cidadao.cpf, atendente.nome AS atendente,
            atendimento.data_atendimento, motivos.descricao
            FROM atendimento
            JOIN cidadao ON atendimento.cidadao_id = cidadao.cidadao_id
            JOIN atendente ON atendimento.atendente_id = atendente.atendente_id
            JOIN motivos ON atendimento.motivo_id = motivos.motivo_id
            ORDER BY atendimento.atendimento_id";
        }

        $result = $this->conexao->query($sql);

        return $result;
    }
}
?>