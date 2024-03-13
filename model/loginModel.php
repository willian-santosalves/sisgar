<?php
class UserModel {
    private $conexao;

    public function __construct($conexao) {
        $this->conexao = $conexao;
    }

    public function autenticarUsuario($email, $senha) {
        $sql = "SELECT * FROM atendente WHERE email = '$email' AND senha = '$senha'";
        $result = $this->conexao->query($sql);

        if (mysqli_num_rows($result) < 1) {
            return false;
        } else {
            $linha = mysqli_fetch_array($result, MYSQLI_ASSOC);
            return $linha['atendente_id'];
        }
    }
}
?>