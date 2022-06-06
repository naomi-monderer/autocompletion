<?php
require_once('Artistes.php');
// $id = $_GET($searchStarts['id']);
if(isset($_GET['hidden_id'])){
    $id = $_GET['hidden_id'];
}else{
    $id = $_GET['id'];
}
// var_dump($id);
$searchModel = new Artistes;
// $searchContains = $searchModel->search($word);
// $searchStarts = $searchModel->searchStart($word);
$getById = $searchModel->getById($id);

if(isset($_GET['display_artiste']))
{

    
    $getById = $searchModel->getById($id);
    ?>
   
    <?php

    // var_dump($getById);
    
    // header('Location: element.php');

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=IM+Fell+English&family=Kurale&family=Manjari:wght@100&family=Permanent+Marker&family=Quicksand:wght@500&family=Sonsie+One&display=swap"
     rel="stylesheet"> 
    <script src="script.js"></script>
    <link rel="stylesheet" href="style/style.css">
    <title>Document</title>
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
    <main class="content">
        <section class="presentation">
            
            <?php ?>
                        <h1 class="name"><?php echo $getById[0]['nom_artiste'];?></h1>
                        <?= '<img src="image/' . $getById[0]['image'] . '"  />' ?></br>
                        <article class="infos">
                            <div>
                            <p> <a href="<?php echo $getById[0]['lien'];?>"><?php echo $getById[0]['lien'];?></a></p>
                        <p class="typo"><?php  echo $getById[0]['legende'];?></p>
                        <p><?php echo $getById[0]['date'];?></p>
                            </div>
                        </article>
                        
                        

                    <?php?>
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
