<h1>Álbum Musicais</h1>

<a href="?page=newAlbum" class="btn btn-success"> Adicionar Novo Álbum</a>

<div class="row">
    <?php
    $albums = getAlbums();
    //    var_dump($albums);

    //    for ($i = 1; $i <= 10; $i++):
    foreach ($albums as $album):
        $infoAlbum = explode('/', $album);
        $nameAlbum = $infoAlbum[1];
//$imgAlbum = $album . '/' . $nameAlbum . 'jpg';
        $imgAlbum = "{$album}/{$nameAlbum}.jpg";
        ?>

        <div class="col-3 album">
            <a href="?page=musics&album=<?= $nameAlbum ?>"><img src="<?= $imgAlbum ?>" alt="<?= $nameAlbum ?>"
                                                                class="img-album">
                <h4>
                    <?= $nameAlbum ?>
                </h4></a>
        </div>
    <?php
    endforeach;
    //    endfor;
    ?>
</div>
