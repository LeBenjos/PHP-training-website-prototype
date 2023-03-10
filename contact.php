<?php include_once "./include/functions.php";
    [$titre, $page, $body, $headerlinks, $informations] = contact();
?><?php include "./include/head.php"; ?>
    <main>
        <h2>IMPORTANT :</h2>
        <ul>
            <?php 
            foreach($informations as $infos){
                echo "<li>$infos</li>";
            }
            ?>
        </ul>
    </main>
<?php include "./include/foot.php"; ?>