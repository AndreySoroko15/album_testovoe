<div class="container">
    <div class="row">
        <div class="image-block d-flex align-items-center justify-content-center col-9">
            <img src="<?= $currentImage->getImage() ?>" alt="">
        </div>

        <div class="description-block d-flex align-items-center flex-column col-3">
            <div class="description text-center p-2 mt-4 mb-4">
                <h1 class="fs-5">Имя</h1>
                <p><?= $currentImage->getImageName() ?></p>
            </div>
            
            <div class="description text-center p-3 mt-4 mb-4">
                <h1 class="fs-5">Описание</h1>
                <p><?= $currentImage->getDescription() ?></p>
            </div>
        <!-- <img src="storage/images/rabstol_net_differ_cartoons_13.jpg" alt=""> -->
        </div>
        <!-- <img src="storage/images/rabstol_net_differ_cartoons_13.jpg" alt=""> -->
    </div>
</div>