<?php 
    require('database.php');
    require('link.php');

    $id = $_GET['post_id'];

    $result = mysqli_query($connect, "SELECT * from content where id = $id");
?>

<body>
    <?php 
        while ($data = mysqli_fetch_array($result)) {
            if ($data['title'] && $data['description']) {
                echo '<div class="mx-[266px]">';
                echo '<h2 class="text-5xl font-semibold mb-2 text-[#222222] mt-[86px]">'.$data['title'].'</h2>';
                echo '<p class="text-[#717171] text-light text-lg">'.$data['description'].'</p>';
                echo '<div>';
                echo '</div>';
                echo '</div>';
            }
        }
    ?>
</body>