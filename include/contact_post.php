<?php include_once "./include/functions.php";

    [$titre, $page, $body, $headerlinks, $informations] = contact();
    
    $name = filter_input(INPUT_POST, "firstname");

?><?php include "./include/head.php"; ?>
    <main class="post">
        <h2 class="thanks">Thanks you <?= $name ?></h2>
    </main>
<?php include "./include/foot.php"; ?>