<?php
    require('link.php');
?>

<body>
    <a href="/cms">back to index</a>
    <h1 style="text-align: center; padding: 2rem;">Add content page</h1>

    <form action="/cms/add-data-to-db.php" method="POST">
        <div style="max-width: 800px; margin: auto; text-align: center;">
            <input name="title" type="text" placeholder="title">
            <input name="description" type="text" placeholder="description">
            <button type="submit">post to db</button>
        </div>
    </form>
</body>