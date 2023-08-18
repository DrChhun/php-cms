<?php 
    require('database.php');

    $title = $_POST['title'];
    $description = $_POST['description'];

    $query = "INSERT INTO content (title, description) value ('$title', '$description')";
?>

<body>
    <?php 
        if($_POST['title'] != '' && $_POST['description'] != '') {
            mysqli_query($connect, $query);
            echo "you success add data";
        }  else {
            echo "fail to insert data into database";
        }
    ?>
</body>