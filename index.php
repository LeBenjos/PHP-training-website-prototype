<?php include_once "include/functions.php";
    [$titre, $page, $body, $headerlinks, $collection] = home();
?><?php include "./include/head.php"; ?>
    <main>
        <div class="ready-to-live">
            <?php foreach($collection as $text) : ?>
                <h2><?= $text ?></h2>
            <?php endforeach; ?>
        </div>
        <div class="gallery g1">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </main>
<?php include "./include/foot.php"; ?>