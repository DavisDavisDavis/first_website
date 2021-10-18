<?php

require __DIR__ ."/album_header.html";
require __DIR__ ."/data.php";


?>

<main>
    <div class="albums">
        <?php
            foreach ($albums as $album) { ?>
            <img src="<?php echo $album; ?>" alt=""> <?php
            } ?>
    </div>
</main>

<?php

require __DIR__ ."/album_footer.html";

?>