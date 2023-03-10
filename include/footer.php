<?php include_once "./include/functions.php";
    [$description, $jacker, $connector, $benjamin] = footer();
?>
<footer>
    <p><?= $description?></p>
    <div>
        <a href="<?= $jacker["link"] ?>" target="_blanck"><?= $jacker["text"] ?></a>
        <span><?= $connector ?></span>
        <a href="<?= $benjamin["link"] ?>" target="_blanck"><?= $benjamin["text"] ?></a>
    </div>
</footer>