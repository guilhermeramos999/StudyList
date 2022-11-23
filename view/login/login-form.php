<?php require __DIR__ . '/../html-header.php' ?>

<form action="/authlogin" method="POST">
    <div class="mb-1 col-sm-5 ms-5">
        <label for="email" class="form-label">E-mail</label>
        <input type="email" name="email" class="form-control col-form-label" placeholder="name@example.com" required><br>
    </div>
    <div class="mb-1 col-sm-5 ms-5">
        <label for="password" class="form-label">Senha</label>
        <input type="password" name="password" class="form-control" required><br>
    </div>
    <button class="btn btn-primary ms-5 mb-2">Entrar</button>
</form>
<a href="/register" class="btn btn-danger ms-5">Registrar-se</a>

<?php require __DIR__ . '/../html-footer.php';
