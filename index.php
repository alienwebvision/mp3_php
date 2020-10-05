<!DOCTYPE html>
<html lang="pt-br"
<head>
    <meta charset="UTF-8">

    <title>MP3 em PHP</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
          integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
<div class="container">
    <?php
    include_once 'helpers.php';

    if (isset($_GET['page'])) {
        if (file_exists("pages/{$_GET['page']}.php")) {
            include_once "pages/{$_GET['page']}.php";
        } else {
            include_once('pages/error404.php');
        }
    } else {
        include_once 'pages/albums.php';
    }
    ?>

</div>
</body>
</html>