<?php require __DIR__ . '/../html-header.php' ?>
<form action="/saveitem<?= is_null($item) ? '' : '?id=' . $item->id ?>" style="width: 30em;" class="ms-3" method="POST">
    <label for="name" class="form-label">Título</label>
    <input type="text" class="form-control" name="name" value="<?= is_null($item) ? '' : $item->name ?>" required><br>
    <label for="description" class="form-label">Descrição</label>
    <textarea name="description" class="form-control" required><?= is_null($item) ? '' : $item->description ?></textarea><br><br>
    <label for="video" class="form-label">Url</label>
    <input type="url" name="video" class="form-control" value=" <?= is_null($item) ? '' : $item->video ?>"><br>
    <button class="btn btn-primary">Salvar</button>
    <a href="/list" class="btn btn-secondary ms-3">Voltar</a>
</form>
<?php require __DIR__ . '/../html-footer.php';
