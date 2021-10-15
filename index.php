<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<?php require __DIR__ . "/database.php"; ?>

    <?php foreach ($albums as $album){; ?>
        <div class="card">
            <div class="img-box">
                <img src="<?php echo $album['poster']?>" alt="">
            </div>
            <p> <?php echo $album['title']; ?> </p>
            <p> <?php echo $album['author']; ?> </p>
            <p> <?php echo $album['genre']; ?> </p>
            <p> <?php echo $album['year']; ?> </p>
        </div>
    <?php }; ?>

</body>
</html>