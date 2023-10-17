<?php 

require_once 'app/controller/Controller.php';

class LikeController extends Controller
{
    public function __construct() 
    {
        parent::__construct();
    }

    public function like() 
    {
        session_start();

        $user = $_SESSION['user_id'];
        $image = $_POST['image_id'];

        $queryLikedImage = "SELECT * FROM likes WHERE user_id = '$user' AND image_id = '$image'";

        $mysqliGetLikedImage = mysqli_query($this->mysqli, $queryLikedImage);

        if(mysqli_num_rows($mysqliGetLikedImage) > 0) {
            $queryRemoveLike = "DELETE FROM likes WHERE user_id = '$user' AND image_id = '$image'";

            $mysqliRemoveLike = mysqli_query($this->mysqli, $queryRemoveLike);

            unset($_SESSION['isLiked'][$image]);
        } else {
            $queryAddLike = "INSERT INTO likes (user_id, image_id) VALUES ('$user', '$image')";

            $mysqliAddLike = mysqli_query($this->mysqli, $queryAddLike);
        }
        
        header("Location: {$_SERVER['HTTP_REFERER']}");
    }
}