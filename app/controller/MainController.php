<?php 

class MainController {
    public function index()
    {
        require_once 'app/view/head.php';
        require_once 'app/view/albums_list.php';
        require_once 'app/view/empty_album.php';
        require_once 'app/view/footer.php';

    }
} 