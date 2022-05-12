<?php
require_once('Artistes.php');
// $id = $_GET($searchStarts['id']);
var_dump($id);
$searchModel = new Artistes;
// $searchContains = $searchModel->search($word);
// $searchStarts = $searchModel->searchStart($word);
$getById = $searchModel->getById($id)

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="script.js"></script>
    <title>Document</title>
</head>
<body>
    
<?php require_once('include/header.php'); ?>

<main>
    <section>
        <article>
        <?php 
                 
                     
                       ?>
                       <h1><?php echo $getById['nom_artiste'];?></h1>
                       <?= '<img src="image/' . $getById['image'] . '" height=250 width=250 />' ?></br>
                       
                       <p><?php  echo $getById['legende'];?></p>
                       <p><?php echo $getById['date'];?></p>
                       <p><?php echo $getById['lien'];?></p>
                       
                       

                <?php    ?>
        </article>
        <article>

         

        </article>
    </section>
</main>
</body>
</html>