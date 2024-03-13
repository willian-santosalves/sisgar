<?php

class CidadaoModel {
    private $conexao;

    public function __construct($conexao) {
        $this->conexao = $conexao;
    }

    public function cadastrarCidadao($nome, $cpf, $cep, $cidade, $estado, $logradouro, $numero, $telefone, $email) {
        $this->conexao->begin_transaction();

        try {
            $sqlCidadao = "INSERT INTO cidadao (nome, cpf) VALUES ('$nome', '$cpf')";
            $this->conexao->query($sqlCidadao);

            $cidadao_id = $this->conexao->insert_id;

            $sqlEndereco = "INSERT INTO endereco (cidadao_id, logradouro, numero, cidade, estado, cep)
                            VALUES ('$cidadao_id', '$logradouro', '$numero', '$cidade', '$estado', '$cep')";
            $this->conexao->query($sqlEndereco);

            $sqlContato = "INSERT INTO contato (cidadao_id, telefone, email)
                        VALUES ('$cidadao_id', '$telefone', '$email')";
            $this->conexao->query($sqlContato);

            $this->conexao->commit();

        } catch (Exception $e) {
            $this->conexao->rollback();
        }
    }
}
?>