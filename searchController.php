<?php
   require_once('Artistes.php');

   
  
   $word = $_GET['searchBar'];

   $searchModel = new Artistes;
   $search = $searchModel->search($word);
   $searchStart = $searchModel->searchStart($word);

   $resultAllSearchByLetters = ['startBy' => $searchStart, 'allSearches' => $search];
   echo(json_encode($resultAllSearchByLetters));

?>