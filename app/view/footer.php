        </main>
        <footer class="d-flex justify-content-center fixed-bottom align-items-center">
            <div class="footer-icons">
                <a href="https://github.com/AndreySoroko15" class="m-2"><i class="fa-brands fa-github fs-3"></i></a>
                <a href="https://www.linkedin.com/in/soroko-andrew-php/" class="m-2">
                    <i class="fa-brands fa-linkedin fs-3"></i>
                </a>
                <a href="https://t.me/an_soroko" class="m-2"><i class="fa-brands fa-telegram fs-3"></i></a>
            </div>
        </footer>
        </div>

        
        <!-- scripts -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"                  
                integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" 
                crossorigin="anonymous" defer>
        </script>
        <script src="https://kit.fontawesome.com/556b924220.js" crossorigin="anonymous"></script>
    </body>
    </html>

    <!-- Всплывающее окно добавление изображения -->
    <!-- Пришлось вставить сюда, тк из-за d-none все после этого блока переставало отображаться -->
    <div class="add-image-block d-none">
        <div class="close-add-image-block">
            <i class="fa-solid fa-xmark"></i>
        </div>
        <form action="/create-image" class="add-image-form form-group p-5 d-flex justify-content-center flex-column" method="POST" enctype="multipart/form-data">
            <input type="text" class="form-control" name="image_name" placeholder="Имя изображения" id="image_name">
            <textarea class="form-control mt-4 mb-4" name="description" placeholder="Описание" id="description_image"></textarea>
            <input type="file" class="form-control" name="image" id="image_file">
            <button type="submit" class="btn btn-secondary mt-4">Загрузить</button>
            <input type="hidden" class="form-control" name="album_id" value="<?= $currentAlbum ?>">
        </form>
    </div>
