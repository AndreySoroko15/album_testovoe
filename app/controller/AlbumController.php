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
        $query =   "SELECT * FROM albums 
                    WHERE user_id = '$user_id'
                    ORDER BY album_name ASC";

        $mysqli = mysqli_query($this->mysqli, $query);
        
        if($mysqli) {
            $albums = [];

            while ($album = mysqli_fetch_assoc($mysqli)) {
                // echo $album['album_name'] . '<br/>';

                $albums[] = new AlbumModel($album['id'], $album['album_name'], $album['created_at']);
            }
        }

        return $albums;
    }

    public function currentAlbum($albumName)
    {
        session_start();

        $user_id = $_SESSION['user_id'];
        $album_name = $albumName;

        $query = "SELECT * FROM albums WHERE album_name = '$album_name' AND user_id = '$user_id'";

        // echo $query;
        $mysqli = mysqli_query($this->mysqli, $query);

        if($mysqli) {
            // while ($album = mysqli_fetch_assoc($mysqli)) {
            //     $currentAlbum = new AlbumModel($album['id'], $album['album_name'], $album['created_at']);
            // }
            while ($album = mysqli_fetch_assoc($mysqli)) {
                $currentAlbum = $album['id'];
            }

        }

        // echo '<pre>' . print_r($currentAlbum, true) . '</pre>';
        return $currentAlbum;
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

    public function create()
    {
        session_start();

        if(!empty($_POST['album_name'])) {

            $albumName = $_POST['album_name'];
            $userId = $_SESSION['user_id'];

            $query =   "INSERT INTO albums (album_name, user_id)
                        VALUES ('$albumName', '$userId')";

            mysqli_query($this->mysqli, $query);
        }

        // echo $query;3
        header("Location: {$_SERVER['HTTP_REFERER']}");
    }

}