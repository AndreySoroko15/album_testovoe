<div class="albums-dashboard">
    <div class="d-flex align-items-center justify-content-evenly album-header">
        <button class="add-image-button text-center p-2">
            Добавить изображение
        </button>
        <div class="search-album pt-4">
            <form method="POST" action="/search" class="search-form">
                <div class="input-group">
                    <input  type="text" class="form-control" id="search" 
                            name="search" placeholder="Найти изображение">
                    <input type="hidden" name="album_id" class="form-control" value="<?= $currentAlbum ?>">
                    <div class="input-group-append">
                        <button type="submit" class="btn btn-dark find-image-button">
                            <i class="fa-solid fa-magnifying-glass"></i>
                        </button>
                    </div>
                </div>
                <p class="error"><?= $not_found_image ?></p>
            </form>
        </div>
    </div>

<?php if(!empty($images)) { ?>     
    
    <div class="row">

    <?php foreach ($images as $image): ?>

        <a href="/image?imageName=<?= $image->getImageName() ?>" class="col-3 p-4 ">
            <div class="album-card text-center">
                <div class="allImagesCard d-flex justify-content-center">
                    <img src="<?= $image->getImage() ?>">
                </div>
                <p><?= $image->getImageName() ?></p>
            </div>
        </a>

    <?php endforeach; ?>
    
</div>

<?php } else if (isset($_GET['albumName'])) { ?>

    <div class="d-flex justify-content-center align-items-center" style="height: 80%;">
        <h1>Альбом пуст</h1>
    </div>

<? } else { ?>
    
    <div class="d-flex justify-content-center align-items-center" style="height: 80%;">
        <h1>Альбом не выбран</h1>
    </div>
    
<? } ?>
</div>
</div>
