<?php include('layout/header_logado.php'); ?>

<h1 class="text-center py-5">Editar Atendimento</h1>
<form action="saveEdit.php" method="POST">
    <div class="form-floating mb-3 d-grid col-3 mx-auto">
        <input type="text" class="form-control" id="nome" name="nome" value="<?php echo $atendimento['nome'] ?>" placeholder="" required readonly>
        <label for="nome">Nome Completo</label>
    </div>

    <div class="form-floating mb-3 d-grid col-3 mx-auto">
        <input type="text" class="form-control" id="cpf" name="cpf" value="<?php echo $atendimento['cpf'] ?>" placeholder="" required readonly>
        <label for="cpf">CPF</label>
    </div>

    <div class="form-floating mb-3 d-grid col-3 mx-auto">
        <select class="form-control" id="atendente" name="atendente">
            <?php
            foreach ($atendentes as $row) {
                echo "<option value='" . $row['atendente_id'] . "'>" . $row['nome'] . "</option>";
            }
            ?>
        </select>
        <label for="atendente">Atendente</label>
    </div>

    <div class="form-floating mb-3 d-grid col-3 mx-auto">
        <input type="datetime" class="form-control" id="data_atendimento" name="data_atendimento" value="<?php echo $atendimento['data_atendimento'] ?>" placeholder="" required>
        <label for="data_atendimento">Data do atendimento</label>
    </div>

    <div class="form-floating mb-3 d-grid col-3 mx-auto">
        <select class="form-control" id="motivo" name="motivo">
            <?php
            foreach ($motivos as $row) {
                echo "<option value='" . $row['motivo_id'] . "'>" . $row['descricao'] . "</option>";
            }
            ?>
        </select>
        <label for="motivo">Motivos</label>
    </div>

    <div class="d-grid col-3 mx-auto">
        <button class="btn btn-primary" type="submit" name="update" id="update">Salvar</button>
        <a class="btn btn-primary my-3" href="sistema.php">Voltar</a>
    </div>

    <input type="hidden" name="id" value="<?php echo $atendimento['atendimento_id'] ?>">
</form>

<?php include('layout/footer.php'); ?>