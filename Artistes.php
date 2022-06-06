<?php
 require_once('DataBase.php');

class Artistes extends DataBase
{
    
    
    public function __construct()
    {
        parent::__construct();
    }
    // récupération de toutes les infos de ma table artistes-- utiliser pour l'affichage dans la page recherche.php
    public function getAll()
    {
        $requete = $this->bdd->prepare('SELECT * FROM `artistes`');
        $requete->execute();
        $result = $requete->fetch();
        

        return $result;
    }

    //récupération d'un seul artiste de ma table artistes-utiliser pour l'affichage dans la page element.php
    public function getById($id)
    {
        $requete = $this->bdd->prepare('SELECT * FROM `artistes` WHERE `id`= :id');
        $requete->execute(array(':id' => $id));
        $result= $requete->fetchAll(PDO::FETCH_ASSOC);

        return $result;
    }

    //
    public function search($word)
    {
        $wordBind = '%'.$word.'%';
        $wordBind2 = $word.'%';

        $requete = $this->bdd->prepare('SELECT * FROM artistes WHERE nom_artiste LIKE :wordBind AND nom_artiste NOT LIKE :wordBind2');
        $requete->execute(array(':wordBind' => $wordBind ,
                                ':wordBind2' => $wordBind2 ));
        $result = $requete->fetchAll();

        return $result;
    }

    public function searchStart($word)
    {
        $wordBind = $word.'%';        
        $requete = $this->bdd->prepare('SELECT * FROM artistes WHERE nom_artiste LIKE :wordBind');
        $requete->execute(array(':wordBind' => $wordBind));
        $result = $requete->fetchAll();

        return $result;
    }
}

?>