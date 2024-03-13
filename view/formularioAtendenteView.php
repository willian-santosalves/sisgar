<?php
class RegisterView {
    public function mostrarFormulario() {
        include('layout/header.php');
        ?>

        <h1 class="text-center py-5">Cadastro</h1>
        <form action="formularioAtendente.php" method="POST">
            <div class="form-floating mb-3 d-grid col-3 mx-auto">
                <input type="text" class="form-control" id="nome" name="nome" placeholder="" required>
                <label for="nome">Nome Completo</label>
            </div>

            <div class="form-floating mb-3 d-grid col-3 mx-auto">
                <input type="text" class="form-control" id="email" name="email" placeholder="" required>
                <label for="email">Email</label>
            </div>

            <div class="form-floating mb-3 d-grid col-3 mx-auto">
                <input type="password" class="form-control" id="senha" name="senha" placeholder="" required>
                <label for="senha">Senha</label>
            </div>

            <div class="d-grid col-3 mx-auto">
                <button class="btn btn-primary" type="submit" name="submit" id="submit">Cadastrar</button>
                <a class="btn btn-primary mt-3" href="home.php">Voltar</a>
            </div>
        </form>

        <?php
        include('layout/footer.php');
    }
}
?>