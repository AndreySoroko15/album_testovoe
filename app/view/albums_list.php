<div class="wrapper d-flex flex-row" style="height: 85vh;">
    <aside>
        <div class="d-flex align-items-center justify-content-center album-header pt-4 pb-4">
            <!-- <button class="add-album-button text-center mt-4 p-2">
                Добавить альбом
            </button> -->
            <form action="/create-album" method="POST">
                <div class="input-group">
                    <input  type="text" class="form-control" name="album_name" 
                            id="add-album-name" placeholder="Имя альбома">
                    <div class="input-group-append">
                        <button type="submit" class="btn btn-dark add-album-button">
                            <i class="fa-solid fa-plus"></i>
                        </button>
                    </div>
                </div>
            </form>
        </div>

        <div class="all-albums">
            
            <?php foreach ($albums as $album): ?>
                
            <a href="/album?albumName=<?= $album->getAlbumName() ?>">
                <?php if($_GET['albumName'] == $album->getAlbumName()) { ?>
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


    
