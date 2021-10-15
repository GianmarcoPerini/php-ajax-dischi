
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>

<?php require __DIR__ . "/importazione/database.php"; ?>


    <div class="box">
        <?php foreach ($albums as $album){; ?>
            <div class="cards">
                <div class="img-box">
                    <img src="<?php echo $album['poster']?>" alt="">
                </div>
                <h3 class="text-center mt-2"> <?php echo $album['title']; ?> </h3>
                <p>Artist: <?php echo $album['author']; ?> </p>
                <p>Author: <?php echo $album['genre']; ?> </p>
                <p>Release date: <?php echo $album['year']; ?> </p>
            </div>
        <?php }; ?>
    </div>

</body>
</html>