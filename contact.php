<?php 

include "./include/functions.php";

$methode = filter_input(INPUT_SERVER, "REQUEST_METHOD");

switch($methode){
    case "GET":
        contactWait();
        break;
    case "POST":
        contactSend();
        break;
}
?>