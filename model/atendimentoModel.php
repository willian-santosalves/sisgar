<?php

class AtendimentoModel {
    private $conexao;

    public function __construct($conexao) {
        $this->conexao = $conexao;
    }

    public function cadastrarAtendimento($cpf, $data_atendimento, $motivo_id, $atendente_id) {
        $this->conexao->begin_transaction();

        try {
            $sqlCidadao = "SELECT cidadao_id FROM cidadao WHERE cpf = '$cpf'";
            $resultCidadao = $this->conexao->query($sqlCidadao);

            if ($resultCidadao->num_rows > 0) {
                $row = $resultCidadao->fetch_assoc();
                $cidadao_id = $row['cidadao_id'];
            }

            $sqlCadastro = "INSERT INTO atendimento (atendente_id, cidadao_id, motivo_id, data_atendimento) 
                            VALUES ('$atendente_id', '$cidadao_id', '$motivo_id', '$data_atendimento')";
            $this->conexao->query($sqlCadastro);

            $this->conexao->commit();

        } catch (Exception $e) {
            $this->conexao->rollback();
        }
    }
}
?>