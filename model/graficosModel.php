<?php

class DashboardModel
{
    private $conexao;

    public function __construct($conexao)
    {
        $this->conexao = $conexao;
    }

    public function obterDadosEstados()
    {
        $sql_estados = "SELECT e.estado AS estado,
                        (SELECT COUNT(*) FROM endereco WHERE cidadao_id = a.cidadao_id) AS quantidade
                        FROM atendimento AS a
                        JOIN endereco AS e ON e.cidadao_id = a.cidadao_id
                        JOIN cidadao AS c ON e.cidadao_id = c.cidadao_id
                        GROUP BY e.estado";

        $result_estados = $this->conexao->query($sql_estados);
        $dados_estados = [];

        while ($linha = mysqli_fetch_array($result_estados, MYSQLI_ASSOC)) {
            $dados_estados[] = [
                'estado' => $linha['estado'],
                'quantidade' => (int)$linha['quantidade']
            ];
        }

        return $dados_estados;
    }

    public function obterDadosMotivos()
    {
        $sql_motivos = "SELECT m.descricao AS descricao, count(a.motivo_id) AS quantidade
                        FROM motivos AS m, atendimento AS a
                        WHERE m.motivo_id = a.motivo_id
                        GROUP BY a.motivo_id;";

        $result_motivos = $this->conexao->query($sql_motivos);
        $dados_motivos = [];

        while ($linha = mysqli_fetch_array($result_motivos, MYSQLI_ASSOC)) {
            $dados_motivos[] = [
                'descricao' => $linha['descricao'],
                'quantidade' => (int)$linha['quantidade']
            ];
        }

        return $dados_motivos;
    }

    public function obterDadosAtendentes()
    {
        $sql_atendentes = "SELECT at.nome AS atendente, COALESCE(subq.quantidade_atendimentos, 0) AS quantidade_atendimentos
                            FROM atendente AS at
                            LEFT JOIN (
                                SELECT a_sub.atendente_id, COUNT(a_sub.atendimento_id) AS quantidade_atendimentos
                                FROM atendimento AS a_sub
                                GROUP BY a_sub.atendente_id) AS subq
                            ON at.atendente_id = subq.atendente_id;";

        $result_atendentes = $this->conexao->query($sql_atendentes);
        $dados_atendentes = [];

        while ($linha = mysqli_fetch_array($result_atendentes, MYSQLI_ASSOC)) {
            $dados_atendentes[] = [
                'atendente' => $linha['atendente'],
                'quantidade_atendimentos' => (int)$linha['quantidade_atendimentos']
            ];
        }

        return $dados_atendentes;
    }
}
?>