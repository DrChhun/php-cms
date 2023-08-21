<?php 
    require('database.php');
    require('link.php');

    $result = mysqli_query($connect, "SELECT * from content order by id DESC");
?>

<body>
    <a href="/cms">back to index</a>
    <a href="/cms/add-content.php">go to add content page</a>
    <h1 class="text-center mx-auto text-5xl font-semibold mt-[84px] mb-[48px] text-[#222222] max-w-xl">Start Manage Your Content.</h1>

    <?php
        while ($data = mysqli_fetch_array($result)) {
            if ($data['title'] && $data['description']) {
                echo '<div class="mx-[266px]">';
                echo '<h2 class="text-2xl font-semibold mb-2 text-[#222222]">'.$data['title'].'</h2>';
                echo '<p class="text-[#717171] text-light text-lg line-clamp-3">'.$data['description'].'</p>';
                echo '<div>';
                echo '</div>';
                echo '<div class="mt-10 flex gap-6">';
                echo '<a href="/cms/delete-content.php?id='.$data['id'].'"><img class="h-[24px]" src="icons/trash.jpg" alt=""></a>';
                echo '<a href="/cms/delete-content.php"><img class="h-[24px]" src="icons/status.jpg" alt=""></a>';
                echo '</div>';
                echo '<hr class="text-[#dddddd] mt-10 mb-6">';
                echo '</div>';
            }
        }
    ?>
</body>