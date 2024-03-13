<?php
class CidadaoView {
    public function mostrarFormularioCidadao() {
        include('layout/header.php');
        ?>
        <h1 class="text-center py-5">Cadastro Cidadão</h1>
        <form action="formularioCidadao.php" method="POST">
            <div class="form-floating mb-3 d-grid col-3 mx-auto">
                <input type="text" class="form-control" id="nome" name="nome" placeholder="" required>
                <label for="nome">Nome Completo</label>
            </div>

            <div class="form-floating mb-3 d-grid col-3 mx-auto">
                <input type="text" class="form-control" id="cpf" name="cpf" placeholder="" required>
                <label for="cpf">CPF</label>
            </div>

            <div class="form-floating mb-3 d-grid col-3 mx-auto">
                <input type="text" class="form-control" id="cep" name="cep" placeholder="" required>
                <label for="cep">CEP</label>
            </div>

            <div class="form-floating mb-3 d-grid col-3 mx-auto">
                <input type="text" class="form-control" id="cidade" name="cidade" placeholder="" required>
                <label for="cidade">Cidade</label>
            </div>

            <div class="form-floating mb-3 d-grid col-3 mx-auto">
                <input type="text" class="form-control" id="estado" name="estado" placeholder="" required>
                <label for="estado">Estado</label>
            </div>

            <div class="form-floating mb-3 d-grid col-3 mx-auto">
                <input type="text" class="form-control" id="logradouro" name="logradouro" placeholder="" required>
                <label for="logradouro">Logradouro</label>
            </div>

            <div class="form-floating mb-3 d-grid col-3 mx-auto">
                <input type="number" class="form-control" id="numero" name="numero" placeholder="" required>
                <label for="numero">Número</label>
            </div>

            <div class="form-floating mb-3 d-grid col-3 mx-auto">
                <input type="text" class="form-control" id="telefone" name="telefone" placeholder="" required>
                <label for="telefone">Telefone</label>
            </div>

            <div class="form-floating mb-3 d-grid col-3 mx-auto">
                <input type="email" class="form-control" id="email" name="email" placeholder="" required>
                <label for="email">E-mail</label>
            </div>

            <div class="d-grid col-3 mx-auto">
                <button class="btn btn-primary" type="submit" name="submit" id="submit">Cadastrar</button>
                <a class="btn btn-primary my-3" href="sistema.php">Voltar</a>
            </div>
        </form>
        
        <?php
        include('layout/footer.php');
    }
}
?>