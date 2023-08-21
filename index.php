<?php
    require('database.php');
    require('link.php');

    $result = mysqli_query($connect, "SELECT * from content order by id DESC");
?>

<body>
    <a href="/cms/cms-edit.php">navigate to edit page</a>
    <a href="/cms/add-content.php">navigate to add content page</a>
    <h1 class="text-5xl font-semibold max-w-xl text-center mx-auto mb-10 mt-[84px] text-[#222222]">Hello welcome to my page this is the blog page that I build by my self.</h1>
    <h2 class="text-2xl font-light text-[#717171] text-center mx-auto mb-[48px]">This website I build using PHP and Tailwind.</h2>
    <h2 class="text-xl font-medium text-center mx-auto mb-2">Start Reading</h2>
    <object data="icons/arrow-down.svg" class="mx-auto mb-[48px]" width="24" height="24"> </object>
    <?php
        while ($data = mysqli_fetch_array($result)) {
            if ($data['title'] && $data['description']) {
                echo '<a href="/cms/blog.php?post_id='.$data['id'].'">';
                echo '<div class="mx-[266px] cursor-pointer">';
                echo '<h2 class="text-2xl font-semibold mb-2 text-[#222222]">'.$data['title'].'</h2>';
                echo '<p class="text-[#717171] text-light text-lg">'.$data['description'].'</p>';
                echo '<div>';
                echo '</div>';
                echo '<hr class="text-[#dddddd] mt-10 mb-6">';
                echo '</div>';
                echo '</a>';
            }
        }
    ?>
    
    <?php mysqli_free_result($result); ?>
</body>