<?php 

// require_once $_SERVER['DOCUMENT_ROOT'] . '/app/model/Model.php';

// class ImageModel
// {
//     public function __construct()
//     {
//         // parent::__construct();
//     }

//     public function getImagesList($albumName)
//     {
//         $query =   "SELECT images.* FROM images 
//                     INNER JOIN albums ON images.album_id = albums.id 
//                     WHERE albums.album_name = '$albumName'";
                
//         // $mysqli = mysqli_query($this->mysqli, $query);
        
//         if($mysqli) {
//             $images = [];
//             // $album = mysqli_fetch_assoc($mysqli);

//             while ($image = mysqli_fetch_assoc($mysqli)) {
//                 // echo $album['album_name'] . '<br/>';
//                 $images[] = $image;
//             }
//         }

//         return $images;
//     }
// }

class ImageModel 
{
    private $id;
    private $image_name;
    private $image;
    private $description;

    public function getImageId()
    {
        return $this->id;
    }

    public function getImageName()
    {
        return $this->image_name;
    }

    public function getImage()
    {
        return $this->image;
    }

    public function getDescription()
    {
        return $this->description;
    }
    
    public function __construct($id, $image_name, $image, $description)
    {
        $this->id = $id;
        $this->image_name = $image_name;
        $this->image = $image;
        $this->description = $description;
    }
}
