<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <title><?= $pageName ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <link href="style.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.6/dist/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.2.1/dist/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/a8c877ae9b.js" crossorigin="anonymous"></script>
</head>

<body>
<nav class="navbar navbar-primary bg-primary navbar-expand-sm ">
  <a class="navbar-brand text-light" href="/list" style="margin-left: 100px; font-weight: bold;">
    <img src="https://i.postimg.cc/1zVx1Xss/logo.png" width="40" height="40" alt="logo">
    STUDY NOTE
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-list-4" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  
  <div class="collapse navbar-collapse justify-content-end" id="navbar-list-4" style="margin-right: 100px;">
            
            <a class="navbar- text-light" style="font-size:13px; font-weight:bold; text-decoration:none;" href="<?= isset($_SESSION['logged']) ? '/list' : '/login' ?>">SEJA BEM VINDO(A)
            <br><span style="text-transform: uppercase; text-align: center;"><?= isset($_SESSION['logged']) ? '' . $user->name : '' ?><p><span></a>
            <?php if (isset($_SESSION['logged'])) : ?>
 
    <ul class="navbar-nav">
        <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <img src="https://thumbs.dreamstime.com/b/salesman-icon-189410337.jpg" width="40" height="40" class="rounded-circle">
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="/logout">Sair</a>
        </div>
        <?php endif ?>
      </li>   
    </ul>
  </div>
</nav>

    <?php if (isset($_SESSION['message'])) : ?>
        <p style="text-align: center;" class="alert alert-<?= $_SESSION['message_type'] ?>"><?= $_SESSION['message'] ?></p>
    <?php endif ?>