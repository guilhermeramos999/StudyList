<?php require __DIR__ . '/../html-header.php' ?>

<section class="" style="margin-top: 100px">
  <div class="mask d-flex align-items-center h-100 gradient-custom-3">
    <div class="container h-100 ">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-9 col-lg-7 col-xl-6">
          <div class="card" style="border-radius: 15px;">
            <div class="card-body p-5">
              <h2 class="text-uppercase text-center mb-5"><?= !isset($item) ? 'Cadastre' : 'Edite' ?> um Tópico</h2>

              <form action="/saveitem<?= is_null($item) ? '' : '?id=' . $item->id ?>" style="width: 30em;" class="ms-3 align-items-center " method="POST">

                <div class="form-outline mb-4">
                  <label for="name" class="form-label">Título</label>
                  <input type="text" class="form-control" name="name" value="<?= is_null($item) ? '' : $item->name ?>" required><br>
                </div>

                <div class="form-outline mb-4">
                  <label for="video" class="form-label">Url</label>
                  <input type="url" name="video" class="form-control" value=" <?= is_null($item) ? '' : $item->video ?>"><br>
                </div>

                <div class="form-outline mb-4">
                  <label for="description" class="form-label">Descrição</label>
                  <textarea name="description" class="form-control" required><?= is_null($item) ? '' : $item->description ?></textarea><br><br>
                </div>

                <div class="d-flex justify-content-center">
                  <button class="btn btn-primary">Salvar</button>
                  <a href="/list" class="btn btn-secondary ms-3">Voltar</a>
                </div>

                <p class="text-center text-black mt-5 mb-0"><b>OBS:</b> Ao salvar uma URL de um vídeo, o mesmo será reproduzido.</p>

              </form>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>



<?php require __DIR__ . '/../html-footer.php';
