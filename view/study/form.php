<!DOCTYPE html>
<html>

<head>
    <title>Novo Item</title>
    <meta charset="utf-8">
</head>

<body>
    <?php if (isset($_SESSION['message'])) : ?>
        <p><?= $_SESSION['message'] ?></p>
    <?php endif ?>
    <form action="/saveitem<?= is_null($item) ? '' : '?id=' . $item->id ?>" method="POST">
        <label for="name">Título</label>
        <input type="text" name="name" value="<?= is_null($item) ? '' : $item->name ?>"><br>
        <label for="description">Descrição</label>
        <textarea name="description"><?= is_null($item) ? '' : $item->description ?></textarea><br><br>
        <label for="video">Url</label>
        <input type="url" name="video" value="<?= is_null($item) ? '' : $item->video ?>"><br>
        <button>Salvar</button>
    </form>
</body>

</html>