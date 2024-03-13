<?php

class UserModel {
    private $conexao;

    public function __construct($conexao) {
        $this->conexao = $conexao;
    }

    public function inserirUsuario($nome, $email, $senha) {
        $query = "INSERT INTO atendente(atendente_id, nome, email, senha) VALUES (default, '$nome', '$email', '$senha')";
        return mysqli_query($this->conexao, $query);
    }
}
?>