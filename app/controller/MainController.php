<?php 

// require_once $_SERVER['DOCUMENT_ROOT'] . '/app/model/AlbumModel.php';
// require_once $_SERVER['DOCUMENT_ROOT'] . '/app/model/ImageModel.php';

// class MainController {
//     public function index()
//     {
//         session_start();

//         if(isset($_SESSION['login'])) {
            
//             // $album = new AlbumModel();
//             // $albums = $album->getAlbums();

//             require_once 'app/view/head.php';
//             require_once 'app/view/albums_list.php';
//             require_once 'app/view/empty_album.php';
//             require_once 'app/view/footer.php';
//         } else {
//             header('Location: /login');
//         }
//     }

//     public function display() 
//     {
//         session_start();

//         if(isset($_SESSION['login'])) {
            
//             // $album = new AlbumModel();
//             // $albums = $album->getAlbums();

//             $image = new ImageModel();
//             $images = $image->getImagesList($_GET['name']);

//         require_once 'app/view/head.php';
//         require_once 'app/view/albums_list.php';
//         require_once 'app/view/all_images.php';
//         require_once 'app/view/footer.php';
//         }
//     }
// } 