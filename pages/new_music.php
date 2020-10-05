<h1>Cadastrar Nova Música</h1>

<div class="form-group">
    <a href="?page=albums">Voltar para o álbums <?= $_GET['album'] ?></a>
</div>

<form action="#" method="post" enctype="multipart/form-data">
    <!--<div class="form-group">-->
    <!--<input type="text" name="name" placeholder="Nome:" class="form-control">-->
    <!--</div>-->
    <div class="form-group">
        <input type="file" name="audio" class="form-group">
    </div>
    <button type="submit" class="btn btn-success">Cadastrar</button>
</form>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $album = $_GET['album'];

    $path = "albums/{$album}/music/";
a
    if (!is_dir($path)) {
        mkdir($path);
    }
    if (move_uploaded_file($_FILES['audio']['tmp_name'], $path . $_FILES['audio']['name'])) {
        header("Location: ?page=musics&album={$album}");
    } else {
        echo 'Falha no Uploads da música...';
    }

//    var_dump($_FILES['audio']);
}
