<h1>Músicas do Álbum <?= $_GET['album'] ?></h1>
<a href="?page=new_music&album=<?= $_GET['album'] ?>" class="btn btn-success">Cadastrar nova Música</a>
<a href="?page=albums" class="btn btn-info"> Voltar para os Álbuns </a>

<hr>
<?php
$album = $_GET['album'];
$musics = getMusics($album);
var_dump($musics);
foreach ($musics as $music):

//echo "<pre>";
//var_dump($musics);
    ?>
    <div class="col-12">
        <audio src="<?= $music ?>" controls></audio>
    </div>
<?php
endforeach;
?>