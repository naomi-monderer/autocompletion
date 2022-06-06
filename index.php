
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=IM+Fell+English&family=Kurale&family=Manjari:wght@100&family=Permanent+Marker&family=Quicksand:wght@500&family=Sonsie+One&display=swap"
     rel="stylesheet"> 
    <script src="script.js"></script>
    <link rel="stylesheet" href="style/index.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" rel="stylesheet">
    <title>Gwokaang</title>
</head>
<body>
    <main>
        <section class="section1">
            <p>
            Welcome to  <span class="p-Gwokanng">Gwokanng</span>! </br>
            Type into the search bar to descover all the artists you can find on this browser!  🍋
            </p>
        </section>
        <section class="parent-titles">
            <h1 class="lets-try"> Let's try</h1>
            <h1 class="h1-Gwokanng">Gwokanng</h1>
        </section>
        <section class="section3">
            <article >
                <form  class="form" action="recherche.php" method="get" id="form">
                <input type="text" placeholder="Search" name="searchBar" autocomplete="off" >
                <button id="searchButton"  type="submit"><i class="fa fa-search"></i></button>
                </form>
            </article>
            <article class="autocomplete" >

                <div class="parent" id="parent-div">
                    <ul class="parent-li1" id="suggestions">
                        
                        </ul>
                        
                        <hr id="separator">
                        
                        <ul id="all-result">
                            
                            </ul>
                            
                        </div>
            </article>
        </section>
        <section class="section4">
            <p class="filling">Gwokanng</p>
        </section>
    </main>
    <footer>
        <div class='star-lien'>
            <img src="Star1.svg" alt="" >
            <a class="lien-github" href="https://github.com/naomie-monderer/autocompletion" target="_blank"><i class="fa-brands fa-github-alt"></i></a>
        </div>
        
    </footer>
</body>
</html>
<?php

?>

