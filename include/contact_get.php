<?php include_once "./include/functions.php";
    [$titre, $page, $body, $headerlinks, $informations] = contact();
?><?php include "./include/head.php"; ?>
    <main>
        <h2>CONTACT US :</h2>
        <ul>
            <?php 
            foreach($informations as $infos){
                echo "<li>$infos</li>";
            }
            ?>
        </ul>
        <form method="POST">

            <input id="name" name="firstname" type="text" placeholder="Jhon" required>
            <input id="mail" name="mail" type="email" placeholder="johndoe@gmail.com" required>
            <textarea id="message" name="message" placeholder="Enter your message..." required></textarea>

            <input id="send" type="submit" value="Send">            
        </form>
    </main>
<?php include "./include/foot.php"; ?>