<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title>List</title>
    <meta charset="utf-8">
</head>

<body>
    <h4><?= $item->name ?></h4>
    <?php if($item->video !== ''): ?>
        <iframe src="<?= $item->video ?>" allowfullscreen="true"></iframe>
    <?php endif ?>
    <p><?= $item->description ?></p>
</body>

</html>