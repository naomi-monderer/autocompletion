<?php
require_once('Artistes.php');

class ArtistesController 
{
    public function __construct()
    {
        $this->model = new Artistes;
        
    }
    public function allArtistes()
    {
        $allArtistes = $this->model->getAll();
        return $allArtistes;
    }
    
    public function getOneArtist($id)
    {
        $artist = $this->model->getById($id);
        return $artist;
    }

    public function getSearchStart()
    {
        $getSearchStart = $this->model->searchStart($word);
        return $getSearchStart;
    }

    public function getAllSearches()
    {
        $getAllSearches = $this->model->allSearches($word);
    }
}
?>