<?php 
    $indexPage = "All cms content";
    $connect = mysqli_connect("127.0.0.1", "root", "085622539", "phpcms");
    if (!$connect) {
        echo("database error");
        exit();
    }
?>