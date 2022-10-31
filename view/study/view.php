<?php require __DIR__ . '/../html-header.php'; ?>
<div class="ms-3 mb-4">
    <h4><?= $item->name ?></h4>
</div>
<?php if ($item->video !== '') : ?>
    <?php if (str_contains($item->video, 'youtube')) : ?>
        <div class="ratio ratio-16x9 container-sm mb-5">
            <iframe src="<?= $item->video ?>" title="YouTube video" allowfullscreen></iframe>
        </div>
    <?php else : ?>
        <div class="ms-3 mb-3">
            <a href="<?= $item->video ?>" class="btn btn-primary" target="blank">Artigo</a>
        </div>
    <?php endif ?>
<?php endif ?>
<div style="padding: 0 18em 0;">
    <p><?= $item->description ?></p>
</div>
<?php require __DIR__ . '/../html-footer.php'; ?>