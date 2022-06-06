<?php
require_once('Artistes.php');

$word = $_GET['searchBar'];


$searchModel = new Artistes;
$searchContains = $searchModel->search($word);
$searchStarts = $searchModel->searchStart($word);

// $artistesData = $searchModel->getById($id);
// echo '<pre>';

// var_dump($artistesData);
// echo '</pre>';


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=IM+Fell+English&family=Kurale&family=Manjari:wght@100&family=Permanent+Marker&family=Quicksand:wght@500&family=Sonsie+One&display=swap"
     rel="stylesheet"> 
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" rel="stylesheet">
    <script src="script.js"></script>
    <link rel="stylesheet" href="style/style.css">

    <title>Recherche</title>
</head>
<body>
<header>
        <article class="parent-title">
            <h1 class="h1-header">Gwokanng </h1>
            <img class="star" src="star3.svg" alt="">
        </article>
        <section class="parent-search-bar">
            <article>
                <form action="recherche.php" method="get" id="form">
            
                        <input type="text" placeholder="Search" name="searchBar" autocomplete="off">
                    <button id="searchButton" type="submit"><i class="fa fa-search"></i></button>
                </form>
                <div class="parent" id="parent-div">
                    <ul class="parent-li1" id="suggestions">
                    
                    </ul>

                    <hr id="separator">

                    <ul id="all-result">

                    </ul>

                </div>
            </article>
        </section>
    </header>
    <main>
        <section>
            <article class="container-list">

                <?php 
                   foreach($searchStarts as $searchStart)
                   { 

                      ?>
                        <form action="element.php" method="get">
                            <input type="hidden" name="hidden_id" value="<?= $searchStart['id'];?>">
                            <button class="button-list" type="submit"  name="display_artiste" value=1>

                            
                            <h1><a class="link" href="element.php?id=<?= $searchStart['id'];?>&display_artiste=1"><?php echo $searchStart['nom_artiste'];?></a></h1>
                            <p class="sublink"><?php  echo $searchStart['legende'];?></p>
                            <p class="sublink"><?php echo $searchStart['lien'];?></p>

                            
                           
                            </button>
                       </form>
                       
                       

                <?php   }


                ?>
            </article>
                <hr class="separator">
            <article>
            <?php   
                    
                    foreach($searchContains as $searchContain)
                    { 
                       
                        ?>
                        <form action="element.php" method="get">
                            <button class="button-list" type="submit"  name="display_all_searches">
                                <input type="hidden" name="hidden_id" value="<?= $searchContain['id'];?>">
                                
                                
                                <h1><?php echo $searchContain['nom_artiste'];?></h1>
                                <p class="sublink"><?php  echo $searchContain['legende'];?></p>
                                <p class="sublink"><?php echo $searchContain['lien'];?></p>
                            </button>
                        </form>
                        
 
                 <?php   }


            ?>
                

            </article> 
        </section>
     </main>
     <footer>
         <div>
            <a class="lien-github" href="https://github.com/naomie-monderer/autocompletion">
                <i class="fa-brands fa-github-alt"></i>
            </a>
         </div>
     </footer>
 </body>
 </html>
 <?php
if(isset($_GET['display_artiste']))
{
    $id = $_GET['hidden_id'];
    $getById = $searchModel->getById($id);
    ?>
   
    <?php

    var_dump($getById);
    
    // header('Location: element.php');

}
if(isset($_GET['display_all_searches']))
{
    $id = $_GET['hidden_id_all_searches'];
    $getById = $searchModel->getById($id);
    // header('Location: element.php');
}
 ?>
       
   