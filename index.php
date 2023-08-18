<?php
    require('database.php');

    $result = mysqli_query($connect, "SELECT * from content");
?>

<body>
    <a href="/cms/cms-edit.php">navigate to edit page</a>
    <a href="/cms/add-content.php">navigate to add content page</a>
    <h1 style="text-align: center; padding: 2rem;">All cms content</h1>
    <?php
        while ($data = mysqli_fetch_array($result)) {
            if ($data['title'] && $data['description']) {
                echo '<div style="text-align: center; max-width: 800px; margin: auto;">';
                echo "<h2>".$data['title']."</h2>";
                echo '<p style="text-align: start;">'.$data['description'].'</p>';
                echo '<div style="text-align: start;">';
                echo '<a href="#">Read more</a>';
                echo '</div>';
                echo '</div>';
            }
        }
    ?>
    
    <?php mysqli_free_result($result); ?>
</body>