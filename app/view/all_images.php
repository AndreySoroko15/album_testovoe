<div class="albums-dashboard">
    <div class="d-flex align-items-center justify-content-evenly album-header pb-3">
        <button class="add-image-button text-center mt-3 p-2">
            Добавить изображение
        </button>
        <div class="search-album pt-4 pb-2">
            <form method="GET" action="#" class="search-form">
                <div class="input-group">
                    <input  type="text" class="form-control" id="search" 
                            name="search" placeholder="Найти изображение">
                    <div class="input-group-append">
                        <button type="submit" class="btn btn-dark">
                            <i class="fa-solid fa-magnifying-glass"></i>
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="row">
        <?php foreach ($images as $image): ?>
        <div class="album-card col-3 p-4 text-center">
            <img src="http://placehold.it/150x100">
            <p><?= $image['image_name'] ?></p>
        </div>
        <?php endforeach; ?>
    </div>
</div>
</div>

<!-- Всплывающее окно добавление изображения -->
<div class="add-image-block d-none">
    <form action="#" class="add-image-form form-group p-5" method="POST">
        <input type="text" class="form-control" name="image_name" placeholder="Имя изображения" id="image_name">
        <textarea class="form-control mt-4 mb-4" name="description" placeholder="Описание" id="description_image"></textarea>
        <input type="file" class="form-control" name="image" id="image_file">
    </form>
</div>
<script>
    $(document).ready(function() {
        $('.add-image-button').on('click', function() {
            let image_block = $('.add-image-block');

            if(image_block.hasClass('d-none')) {
                image_block.removeClass('d-none').addClass('d-block');
            } else {
                image_block.removeClass('d-block').addClass('d-none');
            }
        })
    })
</script>
