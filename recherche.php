<?php
require_once('Artistes.php');
$word = $_GET['searchBar'];
$searchModel = new Artistes;
$searchContains = $searchModel->search($word);
$searchStarts = $searchModel->searchStart($word);

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
            <a class="no-sublink" href="index.php"><h1 class="h1-header">Gwokanng </h1></a>
            <!-- <img class="star" src="Star3.svg" alt=""> -->
            <svg class="star" width="83" height="18" viewBox="0 0 83 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M9.30205 0.772748L11.498 7.33561H18.6041L12.8551 11.3917L15.051 17.9546L9.30205 13.8985L3.55307 17.9546L5.74898 11.3917L0 7.33561H7.10614L9.30205 0.772748Z" fill="white"/>
                <path d="M40.1011 0.772736L42.297 7.3356H49.4032L43.6542 11.3917L45.8501 17.9545L40.1011 13.8985L34.3521 17.9545L36.548 11.3917L30.799 7.3356H37.9052L40.1011 0.772736Z" fill="white"/>
                <path d="M73.3557 0.772736L75.5516 7.3356H82.6577L76.9087 11.3917L79.1047 17.9545L73.3557 13.8985L67.6067 17.9545L69.8026 11.3917L64.0536 7.3356H71.1598L73.3557 0.772736Z" fill="white"/>
            </svg>
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
}

if(isset($_GET['display_all_searches']))
{
    $id = $_GET['hidden_id_all_searches'];
    $getById = $searchModel->getById($id);
  
}
 ?>
       
   