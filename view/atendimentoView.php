<?php
class AtendimentoView {
    public function mostrarFormularioAtendimento($motivos) {
        include('layout/header_logado.php');
        ?>
        <h1 class="text-center py-5">Cadastro Atendimento</h1>
        <form action="atendimento.php" method="POST">

            <div class="form-floating mb-3 d-grid col-3 mx-auto">
                <input type="text" class="form-control" id="cpf" name="cpf" value="" placeholder="" required>
                <label for="cpf">CPF</label>
            </div>

            <div class="form-floating mb-3 d-grid col-3 mx-auto">
                <input type="datetime" class="form-control" id="data_atendimento" name="data_atendimento" value="" placeholder="" required>
                <label for="data_atendimento">Data do atendimento</label>
            </div>

            <div class="form-floating mb-3 d-grid col-3 mx-auto">
                <select class="form-control" id="motivo" name="motivo">
                    <?php
                        include('config.php');
                        $sqlMotivos = "SELECT motivo_id, descricao FROM motivos";
                        $resultMotivos = $conexao->query($sqlMotivos);

                        while ($row = $resultMotivos->fetch_assoc()) {
                            echo "<option value='" . $row['motivo_id'] . "'>" . $row['descricao'] . "</option>";
                        }
                    ?>
                </select>
                <label for="motivo">Motivos</label>
            </div>

            <div class="d-grid col-3 mx-auto">
                <button class="btn btn-primary" type="submit" name="submit" id="submit">Salvar</button>
                <a class="btn btn-primary my-3" href="sistema.php">Voltar</a>
            </div>

            <input type="hidden" name="atendente_id" value="<?php echo $_SESSION['atendente_id']; ?>">
        </form>

        <script>
            var dataAtual = new Date();
            var dia = dataAtual.getDate().toString().padStart(2, '0');
            var mes = (dataAtual.getMonth() + 1).toString().padStart(2, '0');
            var ano = dataAtual.getFullYear();
            var horas = dataAtual.getHours().toString().padStart(2, '0');
            var minutos = dataAtual.getMinutes().toString().padStart(2, '0');
            var segundos = dataAtual.getSeconds().toString().padStart(2, '0');
            
            var dataHoraAtual = `${ano}-${mes}-${dia} ${horas}:${minutos}:${segundos}`;
            
            document.getElementById("data_atendimento").value = dataHoraAtual;
        </script>
        <?php
        include('layout/footer.php');
    }
}
?>