<?php
    $db_user = "root";
    $db_pass = "";
    $db_server = "localhost";
    $db_name = "benchmark";

    //Na osnovu defisanih parametara,definišemo pristup bazi podataka
    $mysqli = new Mysqli($db_server,$db_user, $db_pass,$db_name);
    
?>