<?php

 
    require_once(__DIR__ . "/classes/category.php");
    require_once(__DIR__ . "/classes/product.php");
    require_once(__DIR__ . "/classes/food.php");
    require_once(__DIR__ . "/classes/accessories.php");
    
 //categorie
    $category_dog = new Category(1, "Cane", "");
    $categoty_cat = new Category(2, "Gatto", "");

//prodotti gatto
//cibo
    $cat_umido = new Food("img/umido_gatto.jpeg","Mousse", 30, $category_cat, "umido", "kudo","manzo" );
//accessori
    $cat_bed = new Accessories ("img/cuccia_gatto.jpeg", "Cuccia Gatto", 30, $category_cat,"Cuccia");


//prodotti cane
//cibo
    $dog_croccantini = new Food ("img/croccantini_cane.jpeg", "Croccantini", 25, $category_Dog,"Secco","Kudo","Pollo");
//accessori
    $kong = new Accessories("img/kong.jpeg","Kong", 9, $category_dog,2,"Gioco");





    $products = [ $cat_umido, $cat_bed, $kong,$dog_croccantini ];
   