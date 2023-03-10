<?php include_once "include/functions.php";
 [$titre, $page, $body, $collection, $headerlinks, $products] = products();
?><?php include "./include/head.php"; ?>
    <main>
        <h2>Clothes | <?= $collection ?> </h2>
        <ul>
            <?php foreach($products as $product) : ?>
                <article class="products">
                    <h2><?= $product["name"] ?></h2>
                    <p><?= $product["description"] ?></p>
                    <img src="<?= $product["img"] ?>" alt="<?= $product["alt"] ?>">
                    <strong><?= $product["price"] ?></strong>
                </article>
            <?php endforeach;?>
        </ul>
    </main>
<?php include "./include/foot.php"; ?>