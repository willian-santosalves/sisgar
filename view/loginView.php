<?php
class LoginView {
    public function mostrarFormulario() {
        include('layout/header.php');
        ?>
        <div>
            <h1 class="text-center py-5">Login</h1>
            <form action="login.php" method="POST">
                <div class="form-floating mb-3 d-grid col-3 mx-auto">
                    <input type="text" class="form-control" id="email" name="email" placeholder="example@gmail.com">
                    <label for="email">Email</label>
                </div>
                <div class="form-floating mb-3 d-grid col-3 mx-auto">
                    <input type="password" class="form-control" id="senha" name="senha" placeholder="Senha">
                    <label for="senha">Senha</label>
                </div>

                <div class="d-grid col-3 mx-auto">
                    <button class="btn btn-primary" type="submit" name="submit" id="submit">Entrar</button>
                    <a class="btn btn-primary mt-3" href="home.php">Voltar</a>
                </div>
            </form>
        </div>
        <?php
        include('layout/footer.php');
    }
}
?>