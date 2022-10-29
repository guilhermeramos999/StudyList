<?php require __DIR__ . '/../html-header.php' ?>
    <a href="/item-management">Novo item</a>

    <?php foreach ($items as $item) : ?>
        <h4><?= $item->name ?></h4>
        <p><?= $item->description ?></p>
        <a href="/view-item?id=<?= $item->id?>">Visualizar</a>
        <a href="/item-management?id=<?= $item->id?>">Editar</a>
        <a href="/item-remove?id=<?= $item->id?>">Excluir</a>
    <?php endforeach ?>
</body>

</html>