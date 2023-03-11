<?php include_once "./include/functions.php";
 [$titre, $page, $body, $collection, $headerlinks, $products] = products();
?><?php include "./include/head.php"; ?>
    <main>
        <div class="ready-to-live">
            <h2><span><?= $titre ?></span><?= " |" ?></h2>
            <h2><?= $collection ?></h2>
        </div>
        <?php foreach($products as $product) : ?>
            <article class="products">
                <h3><?= $product["name"] ?></h3>
                <p><?= $product["description"] ?></p>
                <div>
                    <img src="<?= $product["img"]["frontimg"] ?>" alt="<?= $product["img"]["frontalt"] ?>">
                    <img src="<?= $product["img"]["backimg"] ?>" alt="<?= $product["img"]["frontalt"] ?>" class="back">
                </div>
                <strong><?= $product["price"] ?></strong>
            </article>
        <?php endforeach;?>
    </main>
<?php include "./include/foot.php"; ?>