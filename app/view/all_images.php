<div class="albums-dashboard">

    <!-- шапка с добавлением и поиском изображения -->
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
        <div class="image-card text-center">
            <div class="image d-flex justify-content-center">
                <img src="<?= $image->getImage() ?>">
                <form method="POST" action="/delete-image" class="delete-image-form">
                    <input type="hidden" name="image_id" value="<?= $image->getImageId() ?>">
                    <button type="submit" class="btn btn-light">
                        <i class="fa-solid fa-xmark"></i>
                    </button>
                </form>
                <form method="POST" action="/like" class="like-form">
                    <input type="hidden" name="image_id" class="form-control" value="<?= $image->getImageId() ?>">
                        
<!-- по другому без фреймворка реализовать не получалось, поэтому отображение лайков пришлось захардкодить -->
    <?php
            $queryLikedImage = "SELECT * FROM likes WHERE user_id = '{$_SESSION['user_id']}' 
                                AND image_id = '{$image->getImageId()}'";
            $result = mysqli_query($mysqli, $queryLikedImage);
            $is_liked = mysqli_num_rows($result) > 0;

            if($is_liked) { 
    ?>

                    <button type="submit" class="btn btn-light">
                        <i class="fa-solid fa-heart"></i>
                    </button>

    <?php   } else { ?>

                        <button type="submit" class="btn btn-light like-image-button">
                            <i class="fa-regular fa-heart"></i>
                        </button>

    <?php } ?>

                </form>
            </div>
            <p><?= $image->getImageName() ?></p>
        </div>
    </a>
    
<?php endforeach; ?>


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

