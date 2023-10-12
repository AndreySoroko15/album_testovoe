<?php 

require_once $_SERVER['DOCUMENT_ROOT'] . '/app/model/Model.php';

class AlbumModel extends Model
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
            // $album = mysqli_fetch_assoc($mysqli);

            while ($album = mysqli_fetch_assoc($mysqli)) {
                // echo $album['album_name'] . '<br/>';
                $albums[] = $album;
            }
        }

        return $albums;
    }
}
