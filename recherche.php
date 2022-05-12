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
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" rel="stylesheet">
    <script src="script.js"></script>
    <link rel="stylesheet" href="style/style.css">

    <title>Recherche</title>
</head>
<body>
    <header>
        
        <h1>GWOKAY </h1>
        
         <form action="recherche.php" method="get" id="form">
                <button id="searchButton" type="submit"><i class="fa fa-search"></i></button>
                <input type="text" placeholder="Search" name="searchBar">
                
            </form>
            <div class="parent" id="parent-div">
                <ul class="parent-li1" id="suggestions">
                
                </ul>

                <hr>

                <ul id="all-result">

                </ul>

            </div>
    </header>
    <main>
        <section>
            <article class="container-list">

                <?php 
                   foreach($searchStarts as $searchStart)
                   { 

                      ?>
                        <form action="element.php" method="get">
                        <button type="submit"  name="displayArtiste" value="<?php $getByid['id']?>">
                        <a href="element.php?id=<?=$getIdBy['id'] ?>">
                        
                                    
                       <h1><?php echo $searchStart['nom_artiste'];?></h1>
                       <p><?php  echo $searchStart['legende'];?></p>
                       <p><?php echo $searchStart['lien'];?></p>
                       <input type='hidden'name="display" value="<?php $searchStart['id']?>" >
                       <?php var_dump($searchStart['id'])?>
                       </button>
                       </form>
                       
                       

                <?php   }


                ?>
            </article>
                <hr>
            <article>
            <?php   
                    
                    foreach($searchContains as $searchContain)
                    { 
                       
                        ?>
                        <h1><?php echo $searchContain['nom_artiste'];?></h1>
                        <p><?php  echo $searchContain['legende'];?></p>
                        <p><?php echo $searchContain['lien'];?></p>
                        
                        
 
                 <?php   }


            ?>
                

            </article> 
        </section>
     </main>
     <footer>
        
     </footer>
 </body>
 </html>
 <?php
if(isset($_GET['displayArtiste']))
{
    $id = $_GET['display'];
    $getById = $searchModel->getById($id);
    var_dump($getById);
    // header('Location: element.php');

}
 ?>
       
   