<?php 
    require('database.php');

    $id = $_GET['id'];

    $query = "delete from content where id = $id";
?>

<body>
    <?php 
        // echo $id."gg";
        if($_GET['id'] != '') {
            mysqli_query($connect, $query);
            echo "you success delete data";
        }  else {
            echo "fail to delete data in database";
        }
    ?>
</body>