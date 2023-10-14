<?php 

require_once $_SERVER['DOCUMENT_ROOT'] . '/app/model/AlbumModel.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/app/controller/Controller.php';

class AlbumController extends Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function getAlbums() 
    {
        session_start();

        $user_id = $_SESSION['user_id'];
        $query = "SELECT * FROM albums WHERE user_id = '$user_id'";

        $mysqli = mysqli_query($this->mysqli, $query);
        
        if($mysqli) {
            $albums = [];

            while ($album = mysqli_fetch_assoc($mysqli)) {
                // echo $album['album_name'] . '<br/>';

                $albums[] = new AlbumModel($album['id'], $album['album_name']);
            }
        }

        return $albums;
    }

    public function notSelectedAlbum()
    {
        session_start();

        if(isset($_SESSION['login'])) {
            
            $albums = $this->getAlbums();

            require_once 'app/view/head.php';
            require_once 'app/view/albums_list.php';
            require_once 'app/view/empty_album.php';
            require_once 'app/view/footer.php';
        } else {
            header('Location: /login');
        }
    }

}