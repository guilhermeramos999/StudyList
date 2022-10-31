<?php require __DIR__ . '/../html-header.php' ?>
<a href="/item-management" class="btn btn-primary ms-3 mb-5">Novo item</a>

<?php foreach ($items as $item) : ?>
    <div class="row ms-3 mb-3">
        <div class="col-sm-5">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title"><?= $item->name ?></h5>
                    <p class="card-text text-break">
                        <span class="d-inline-block text-truncate" style="max-width: 45em;">
                            <?= $item->description ?>
                        </span>
                    </p>
                    <a href="/view-item?id=<?= $item->id ?>" class="btn btn-primary">Visualizar</a>
                    <a href="/item-management?id=<?= $item->id ?>" class="btn btn-secondary">Editar</a>
                    <a href="/item-remove?id=<?= $item->id ?>" class="btn btn-danger">Excluir</a>
                </div>
            </div>
        </div>
    </div>
<?php endforeach ?>
<?php require __DIR__ . '/../html-footer.php';
