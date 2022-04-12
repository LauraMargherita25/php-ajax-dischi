<?php 
    include './data.php'
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php foreach ($arrDischi as $disco) : ?>
        <img src="<?= $disco["poster"]?>" alt="">
        <h1><?= $disco["title"]?></h1>
        <h2><?= $disco["author"]?></h2>
        <p><?= $disco["genre"]?></p>
        <p><?= $disco["year"]?></p>
    <?php endforeach ?>

</body>

</html>



	
	
