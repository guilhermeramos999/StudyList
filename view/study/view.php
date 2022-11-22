<?php require __DIR__ . '/../html-header.php'; ?>

<section style="background-color: #eee; height: 903px;">
  <div class="container h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-lg-12 col-xl-11">
        <div class="card text-black" style="border-radius: 25px;">
          <div class="card-body p-md-5 ">
            <div class="row justify-content-center">

            <div class="card-header bg-primary text-white" style="font-weight: bold; text-transform: uppercase; text-align:center;">
                  <?= $item->name ?>
            </div>
            <?php if ($item->video !== '') : ?>
                <?php if (str_contains($item->video, 'youtube')) : ?>
                    <div class="ratio ratio-16x9 container-sm mb-5">
                        <iframe src="<?= $item->video ?>" title="YouTube video" allowfullscreen></iframe>
                    </div>
            <?php else : ?>
                
            <?php endif ?>
            <?php endif ?>
            <div class="card">
                <div class="card-body">
                    <div class="text-black" style="font-weight: bold; text-transform: uppercase; border-bottom: 1px solid gray;">
                        Descrição:                  
                    </div>
                    <p class="card-text" style="margin-top: 15px;"><?= $item->description ?></p>  
                    <a href="<?= $item->video ?>" class="btn btn-primary" target="blank">Ver Artigo</a>
                </div>      
            </div>      
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


<?php require __DIR__ . '/../html-footer.php'; ?>