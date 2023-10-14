<div class="wrapper d-flex flex-row" style="height: 85vh;">
    <aside>
        <div class="all-albums">
            
            <?php foreach ($albums as $album): ?>

            <a href="/album?name=<?= $album->getAlbumName() ?>">
                <?php if($_GET['name'] == $album->getAlbumName()) { ?>
                    <div class="album album-active text-start p-2">
                        <h2 class="fs-6"><?= $album->getAlbumName() ?></h2>
                    </div>
                <?php } else { ?>
                    <div class="album text-start p-2">
                        <h2 class="fs-6"><?= $album->getAlbumName() ?></h2>
                    </div>
                <?php } ?>
            </a>
            
            <?php endforeach; ?>
            
        </div>
    </aside>
