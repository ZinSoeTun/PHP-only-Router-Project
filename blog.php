<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Hello I am Blog .
        <?php
        // blog.php

        if (isset($blogID)) {
            echo "<h1>Hello I am Blog.</h1>";
            echo "<h1>Blog Post ID: $blogID</h1>";
            // Retrieve and display the blog post data based on $blogID
        } else {
            echo "<h1>No Blog ID provided.</h1>";
        }
        ?>


    </h1>
</body>

</html>