<h1>Cadastrar Álbum</h1>

<div class="form-group">
    <a href="?page=albums">Voltar para álbums</a>
</div>

<form action="#" method="post" enctype="multipart/form-data">
    <div class="form-group">
        <input type="text" name="name" placeholder="Nome:" class="form-control">
    </div>
    <div class="form-group">
        <input type="file" name="image" class="form-group">
    </div>
    <button type="submit" class="btn btn-success">Cadastrar</button>
</form>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $album = $_POST['name'];
    $path = "albums/{$album}";

    if (!is_dir($path)) {
        mkdir($path);
    }
    $file = $_FILES['image'];
    $fileInfo = explode('.', $file['name']);

    $extension = $fileInfo['1'];
    $nameImage = $album . '.' . $extension;
    if (move_uploaded_file($file['tmp_name'], $path . '/' . $nameImage)) {
        header('Location:?page=albums');
    } else {
        echo 'Falha no Uploads...';
    }
//    echo 'HI FOI...';
//    var_dump($_FILES['image']);
}


?>