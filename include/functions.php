<?php

function home(){
    // HEAD
    // ----------------------------------------------------------------
    $titre = "Jacker";
    $page = "| Home";
    $body = "home";
    // ----------------------------------------------------------------

    // HEADER | NAV
    // ----------------------------------------------------------------
    $headerlinks = [
        '"#" class="here"' => "Home",
        '"./products.php"' => "Products",
        '"./contact.php"' => "Contact"
    ];
    // $linkindex = "#"; // $textindex = "Home"; // $linkproduct = "./produits.php"; // $textproduct = "Products"; // $linkcontact = "./contact.php"; // $textcontact = "Contact";
    // ----------------------------------------------------------------

    // MAIN
    // ----------------------------------------------------------------
    $collection = ["New collection", "Ready to live"];
    // $new = "New collection"; // $collection = "Ready to live";
    // ----------------------------------------------------------------

    return [$titre, $page, $body, $headerlinks, $collection];
}

function products(){
    // HEAD
    // ----------------------------------------------------------------
    $titre = "Jacker";
    $page = "| Products";
    $body = "products";
    // ----------------------------------------------------------------

    // HEADER | NAV
    // ----------------------------------------------------------------
    $collection = "Ready to live";
    $headerlinks = [
        '"./index.php"' => "Home",
        '"#" class="here"' => "Products",
        '"./contact.php"' => "Contact",
    ];
    // ----------------------------------------------------------------

    // MAIN
    // ----------------------------------------------------------------
    $products = [
        [
            "name" => "TRAIN SURFING - LONG SLEEVES", 
            "description" => "100% cotton | 210gsm | Silkscreen front, back and sleeve | Secret print | Wide cut, if hesitating between two sizes, take below", 
            "img" => [
                "frontimg" => "./assets/products/cloth1.2.webp",
                "frontalt" => "FRONT TRAIN SURFING - LONG SLEEVES - BLACK",
                "backimg" => "./assets/products/cloth1.1.webp",
                "backalt" => "BACK TRAIN SURFING - LONG SLEEVES - BLACK",
            ],
            "price" => "55€",
        ],
        [
            "name" => "UNDERGROUND - HOODIE - BLACK", 
            "description" => "100% cotton | 410gsm | Screen print front and back | Secret Label | Wide cut, if hesitating between two sizes, take below", 
            "img" => [
                "frontimg" => "./assets/products/cloth2.2.webp",
                "frontalt" => "FRONT UNDERGROUND - HOODIE - BLACK",
                "backimg"  => "./assets/products/cloth2.1.webp",
                "backalt" => "BACK UNDERGROUND - HOODIE - BLACK",
            ],
            "price" => "95€",
        ],
        [
            "name" => "RTL STRIPED POLO - MULTI", 
            "description" => "100% cotton | All Over pattern | Wide cut, if hesitating between two sizes, take below", 
            "img" => [
                "frontimg" => "./assets/products/cloth3.1.webp",
                "frontalt" => "FRONT RTL STRIPED POLO",
                "backimg"  => "./assets/products/cloth3.2.webp",
                "backalt" => "BACK RTL STRIPED POLO",
            ],
            "price" => "80€",
        ],
    ];
    // ----------------------------------------------------------------

    return [$titre, $page, $body, $collection, $headerlinks, $products];
}

function contact(){
    // HEAD
    // ----------------------------------------------------------------
    $titre = "Jacker";
    $page = "| Contact";
    $body = "contact";
    // ----------------------------------------------------------------
    
    // HEADER NAV
    // ----------------------------------------------------------------
    $headerlinks = [
        '"./index.php"' => "Home",
        '"./products.php"' => "Products",
        '"#" class="here"' => "Contact",
    ];
    // ----------------------------------------------------------------
    
    // MAIN
    // ----------------------------------------------------------------
    $informations = [
        "Pour toutes questions relatives à une commande, merci d'indiquer votre Numéro de commande afin que nous puissions vous renseigner plus facilement.", 
        "Si vous nous avez contacté mais n'avez pas reçu de réponse, pensez à vérifier vos indésirables/spams, au cas où nos e-mails y atterrissent.",
    ];
    // ----------------------------------------------------------------

    return [$titre, $page, $body, $headerlinks, $informations];
}

function footer(){
    // FOOTER
    // ----------------------------------------------------------------
    $description = "Born in 2011, Jacker was firstly a free magazine about street culture, distributed in more than 400 shops worldwide. In 2014, a clothing brand is born, in the same spirit as the magazine.";
    $jacker = [
        "link" => "https://jacker.fr/",
        "text" => "© Jacker",
    ];
    $connector = "prototype model by";
    $benjamin = [
        "link" => "http://www.benjaminschinkel.com/",
        "text" => "Benjamin SCHINKEL",
    ];
    // ----------------------------------------------------------------

    return [$description, $jacker, $connector, $benjamin];
}

?>