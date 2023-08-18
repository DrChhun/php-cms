<?php 
    require('database.php');

    $result = mysqli_query($connect, "SELECT * from content");
?>

<body>
    <a href="/cms">back to index</a>
    <a href="/cms/add-content.php">go to add content page</a>
    <h1 style="text-align: center; padding: 2rem;">CMS edit page</h1>

    <?php
        while ($data = mysqli_fetch_array($result)) {
            if ($data['title'] && $data['description']) {
                echo    '<div style="max-width: 800px; margin: auto; text-align: center;">';
                echo    '<h2>'.$data['title'].'</h2>';
                echo    '<p style="text-align: start;">'.$data['description'].'</p>';
                echo    '<div style="display: flex; flex-direction: column; text-align: start; gap: 15px;">';
                echo    '<a style="color: green;" href="#">Edit this content</a>';
                echo    '<a style="color: red;" href="#">Delete this content</a>';
                echo    '</div>';
                echo    '</div>';
            }
        }
    ?>
</body>