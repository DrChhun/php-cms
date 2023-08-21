<?php
    require('link.php');
?>

<body>
    <a href="/cms">back to index</a>
    <h1 class="text-5xl font-semibold text-center mx-auto max-w-xl mt-[84px] mb-[60px]">Posting New Content Here!</h1>

    <form action="/cms/add-data-to-db.php" method="POST">
        <div class="flex flex-col" style="max-width: 440px; margin: auto; text-align: center;">
            <input name="title" type="text" class="border border-1 px-[16px] py-[14px] rounded-md border-[#b0b0b0] mb-[14px]" placeholder="Input Your Title">
            <input name="description" type="text" class="border border-1 px-[16px] py-[14px] rounded-md border-[#b0b0b0] mb-5" placeholder="Input Your Content Detail">
            <button class="bg-[#6EBA4A] w-full py-[14px] text-white font-semibold rounded-md" type="submit">POST</button>
        </div>
    </form>
</body>