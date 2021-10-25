<?php


require __DIR__ ."/data.php";
require __DIR__ ."/function.php";


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="album.css">
</head>
<body>
    <header>
        <a href="index.php">
            <img src="https://himehina.jp/s3/skiyaki/uploads/link/image/28792/splogo_wh.png" alt="">
        </a>
    </header>

    <article>
        <img src="https://himehina.jp/assets/himehina/title_disco-9fbfc3820ecd8db9884cff4c05840a59.png" alt="">
        <img src="" alt="">
    </article>

    <main>

        <div class="albums">
            <?php
                foreach ($albums as $album) { ?>
                <img src="<?php echo $albums['img']; ?>" alt=""> <?php
                } ?>
        </div>
    </main>


    <h1>RANDOM VIDEO</h1>
    <div class="iframe_container">
        <iframe width="560" height="315" src="<?php echo random_video($videos); ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>
    


<?php

require __DIR__ ."/album_footer.html";

?>