

<?php require __DIR__ . '/../html-header.php' ?>
    <div class="d-flex justify-content-center">   
        <div> 
            <a style="margin-top: 50px; font-weight: bold; font-size: 25px;" href="/item-management" class="btn btn-outline-primary ms-3 mb-5">
            <i class="fa-solid fa-file-circle-plus"></i>  Cadastrar Tópicos
            </a>
        </div>
    </div>

<?php foreach ($items as $item) : ?>
    <div class="row ms-3 mb-3 row-cols-md-2" style="max-heigth: 1em">
        <div class="col-sm-5">
            <div class="card h-00">
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
