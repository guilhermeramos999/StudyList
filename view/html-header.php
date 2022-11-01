<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <title><?= $pageName ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>

<body>
    <nav class="navbar navbar-dark bg-dark mb-5">
        <a class="navbar-brand ms-3" href="<?= isset($_SESSION['logged']) ? '/list' : '/login' ?>">DevEasy<?= isset($_SESSION['logged']) ? ' - ' . $user->name : '' ?></a>
        <?php if (isset($_SESSION['logged'])) : ?>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link me-3" href="/logout">Sair</a>
                </li>
            </ul>
        <?php endif ?>
    </nav>

    <?php if (isset($_SESSION['message'])) : ?>
        <p class="alert alert-<?= $_SESSION['message_type'] ?> col-sm-5 ms-5"><?= $_SESSION['message'] ?></p>
    <?php endif ?>