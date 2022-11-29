<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

<section class="" style="height: 937px">
  <div class="container-fluid h-custom">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-md-9 col-lg-6 col-xl-5">
        <h1 style="font-size: 24px; font-style: italic;" class="text-primary text-center"> Domine seu trabalho, organize sua vida, lembre-se de tudo, enfrente cada projeto com suas anotações e com praticidade no <span style="font-weight: bold; color: black;">Study Note<span></h1>
        <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/draw2.webp" class="img-fluid" alt="Sample image">
      </div>
      <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">

        <form action="/authlogin" method="POST">
          <a class="form-outline mb-3 d-flex justify-content-center align-items-center" href="">
            <img src="https://i.postimg.cc/4yH5qS4L/logo.jpg" alt="logo">
          </a>

          <!-- Email input -->
          <div class="form-outline mb-3">
            <input type="email" name="email" id="form3Example3" class="form-control form-control-lg" placeholder="Digite o seu E-mail" required />
            <label for="email" class="form-label"></label>
          </div>

          <!-- Password input -->
          <div class="form-outline mb-3">
            <input type="password" id="form3Example4" name="password" class="form-control form-control-lg" placeholder="Digite a sua Senha" required />
            <label class="form-label" for="password"></label>
          </div>

          <div class="text-center text-lg-start mt-3 pt-2">

            <button class="btn btn-primary btn-lg" style="padding-left: 2.5rem; padding-right: 2.5rem;">Entrar</button>
            <p class="small fw-bold mt-2 pt-1 mb-0">Ainda não tem conta? <a href="/register" class="link-blue">Cadastre-se</a></p>
          </div>

        </form>
        <?php if (isset($_SESSION['message'])) : ?>
          <p class="alert alert-<?= $_SESSION['message_type'] ?>"><?= $_SESSION['message'] ?></p>
        <?php endif ?>
      </div>

    </div>
  </div>

</section>

<?php require __DIR__ . '/../html-footer.php';
