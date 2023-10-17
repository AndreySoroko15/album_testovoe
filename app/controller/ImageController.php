<?php 

require_once $_SERVER['DOCUMENT_ROOT'] . '/app/controller/Controller.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/app/model/ImageModel.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/app/controller/AlbumController.php';

class ImageController extends Controller
{

    public function __construct()
    {
        parent::__construct();
    }

    public function getImages($albumName)
    {
        $query =   "SELECT images.* FROM images 
                    INNER JOIN albums ON images.album_id = albums.id 
                    WHERE albums.album_name = '" . $albumName . "'";
                
        $mysqli = mysqli_query($this->mysqli, $query);
        
        if($mysqli) {
            $images = [];
            // $album = mysqli_fetch_assoc($mysqli);

            while ($image = mysqli_fetch_assoc($mysqli)) {
                // echo $album['album_name'] . '<br/>';
                // $images[] = $image;
                $images[] = new ImageModel($image['id'], $image['image_name'], $image['image'], $image['description']);

            }
        }

        return $images;
    }

    public function create() 
    {
        if($_FILES['image']['size'] > 0) {
            $file = $_FILES['image'];
            
            
            if(getimagesize($file['tmp_name']) == false) {
                // print_r($file);
                // die();
                header("Location: {$_SERVER['HTTP_REFERER']}");
            } else {
            // print_r($_FILES);
            // die();
            
            $pathFile = "storage/images/{$file['name']}";
            
            $typeFile = explode('/', $file['type']);
            $typeFile = $typeFile[1];
            
            $nameImage = $_POST['image_name'];
            $imageDescription = $_POST['description'];

            $albumId = $_POST['album_id'];
            
            // print_r($file);
            // die();
            
            if(!move_uploaded_file($file['tmp_name'], $pathFile)) {
                    echo 'Файл не загружен';
                } 
            // echo $typeFile;
            
            $query =   "INSERT INTO images (image_name, image, description, album_id) 
                        VALUES ('$nameImage.$typeFile', '$pathFile', '$imageDescription', '$albumId')";

            // echo $query;

            $mysqli = mysqli_query($this->mysqli, $query);
        }
    }

        header("Location: {$_SERVER['HTTP_REFERER']}");
    }

    public function delete() 
    {
        $image_id = $_POST['image_id'];

        $query = "DELETE FROM images WHERE id = '{$image_id}'";

        $mysqli = mysqli_query($this->mysqli, $query);

        if($mysqli) {
            header("Location: {$_SERVER['HTTP_REFERER']}");
        }
    }

    public function showAllImages() 
    {
        session_start();

        if(isset($_SESSION['login'])) {
            
            // $albumObj = new AlbumController();
            // $albums = $albumObj->currentAlbum($_GET['albumName']);
            
            $albumObj = new AlbumController();
            $albums = $albumObj->getAlbums();
            $image = $_SESSION['user_id'];

            $currentAlbum = $albumObj->currentAlbum($_GET['albumName']);
            //ничего другого для получения текущего алalьбома в методе show не придумал 
            $_SESSION['currentAlbum'] = $currentAlbum;

            $images = $this->getImages($_GET['albumName']);

            // print_r($images);
            // die();

            $mysqli = $this->mysqli;

        require_once 'app/view/head.php';
        require_once 'app/view/albums_list.php';
        require_once 'app/view/all_images.php';
        require_once 'app/view/footer.php';
        }
    }

    public function show() 
    {
        session_start();

        $currentAlbum = $_SESSION['currentAlbum'];
        $currentImageName = $_GET['imageName'];

        $query =   "SELECT * FROM images
                    WHERE album_id = '$currentAlbum'
                    AND image_name = '$currentImageName'";

        // echo $query;

        $mysqli = mysqli_query($this->mysqli, $query);
        
        if($mysqli) {
            $image = mysqli_fetch_assoc($mysqli);

            $currentImage = new ImageModel($image['id'], $image['image_name'], $image['image'], $image['description']);
        }

        require_once 'app/view/head.php';
        require_once 'app/view/image.php';
        require_once 'app/view/footer.php';
    }

    public function search() 
    {

        session_start();

        if(isset($_SESSION['login'])) {
            $albumObj = new AlbumController();
            $albums = $albumObj->getAlbums();

            $query =   "SELECT * FROM images 
                        WHERE album_id = '{$_POST['album_id']}' 
                        AND image_name LIKE '%{$_POST['search']}%'";

            // echo $query;
            // die();

            $mysqli = mysqli_query($this->mysqli, $query);

            if($mysqli) {
                $images = [];

                while ($image = mysqli_fetch_assoc($mysqli)) {
                    $images[] = new ImageModel($image['id'], $image['image_name'], $image['image'], $image['description']);
                }
            }

            if(empty($images)) {
                $not_found_image = 'Совпадений не найдено';
            }

            // echo '<pre>' . print_r($images, true) . '</pre>';
            // die();

            $mysqli = $this->mysqli;

            require_once 'app/view/head.php';
            require_once 'app/view/albums_list.php';
            require_once 'app/view/all_images.php';
            require_once 'app/view/footer.php';
        }
    }
}


