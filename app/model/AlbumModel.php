<?php 

// require_once $_SERVER['DOCUMENT_ROOT'] . '/app/model/Model.php';

class AlbumModel 
{
    private $id;
    private $album_name;

    // public function __construct()
    // {
    //     parent::__construct();
    // }
    public function getId() 
    {
        return $this->id;
    }

    public function getAlbumName()
    {
        return $this->album_name;
    }

    public function __construct($id, $album_name)
    {
        $this->id = $id;
        $this->album_name = $album_name;
    }

}
