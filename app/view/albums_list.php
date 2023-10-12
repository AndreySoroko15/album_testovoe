<div class="wrapper d-flex flex-row" style="height: 85vh;">
    <aside>
        <div class="all-albums">
            <?php foreach ($albums as $album): ?>
            <a href="/album?name=<?= $album['album_name'] ?>">
                <div class="album text-start p-2">
                    <h2 class="fs-6"><?= $album['album_name'] ?></h2>
                    <!-- <input type="hidden" class="userChatId" value="{{ $user->id }}"> -->
                </div>
            </a>
            <?php endforeach; ?>
        </div>
    </aside>
