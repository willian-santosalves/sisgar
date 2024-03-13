<?php

    include_once('config.php');

    if(isset($_POST['update']))
    {
        $id = $_POST['id'];
        $atendente_id = $_POST['atendente'];
        $data_atendimento = $_POST['data_atendimento'];
        $motivo_id = $_POST['motivo'];

        $sqlUpdate = "UPDATE atendimento
        SET
        atendente_id='$atendente_id',
        data_atendimento='$data_atendimento',
        motivo_id='$motivo_id'
        WHERE atendimento_id='$id'";

        $result = $conexao->query($sqlUpdate);
    }
    header('Location: sistema.php');

?>