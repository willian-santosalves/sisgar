<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <style>
        body {
            text-align: center;
        }
    </style>

</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container-fluid">
        <div class="col-6 p-3">
            <img src="assets/img/logo_garca.png" alt="Logo empresa">
        </div>

        <button class="navbar-toggler" type="button" data-bs-toggle="colapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expandef="false">
        <span class="navbar-toggler-icon"></span>
        </button>

        <a href="#" class="text-white text-decoration-none fs-3 me-5">SISGAR</a>

    </div>
</nav>
<br>

<h1 class="text-center py-5">Sistema de Atendimento</h1>

<div class="d-grid gap-2 d-md-flex justify-content-md-center pt-5">
    <a href="login.php" class="btn btn-primary me-md-2" type="button">Logar</a>
    <a href="formularioAtendente.php"class="btn btn-primary" type="button">Cadastrar</a>
</div>

<script src="assets/js/bootstrap.bundle.min.js"></script>

<div class="container-fluid mt-5">
<div class="row">
    <div class="col-12 text-center p-3 fixed-bottom bg-primary text-white">
        SISGAR &copy; <?php echo date('Y') ?>
        <span class="ms-3 me-3">|</span>
        <a href="mailto:sisgar@sisgar.com" class="link-email text-white">sisgar@sisgar.com</a>
        <span class="ms-3 me-3">|</span>
    </div>
</div>
<script src="assets/js/bootstrap.bundle.min.js"></script>
</body>
</html>