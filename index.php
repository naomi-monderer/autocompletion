<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="script.js"></script>
    <link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" href="style/index.css">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" rel="stylesheet">
    <title>Gwokay</title>
</head>
<body>
    <main>
        <section>
            <p>
            Welcome to  <span>Gwokanng</span>! </br>
            Type into the search bar to descover all the artists you can find on this browser!  🍋
            </p>
        </section>
        <section>
            <h1> Let's try</h1>
            <h1>Gwokanng</h1>
        </section>
        <section>
            <article>
                <form action="recherche.php" method="get" id="form">
                <input type="text" placeholder="Search" name="searchBar">
                <button id="searchButton" type="submit"><i class="fa fa-search"></i></button>
                
            </form>
            </article>
            <div class="parent" id="parent-div">
                <ul class="parent-li1" id="suggestions">
                
                </ul>

                <hr>

                <ul id="all-result">

                </ul>

            </div>
        </section>
        <section>
            <p>Gwokanng</p>
        </section>
    </main>
    <footer>
        <a href=""></a>
        <i class="fa-brands fa-github-alt"></i>
    </footer>
</body>
</html>
<?php
// if (isset($_POST['searchBar']))
// {
//     $_SESSION['results'] = Artiste ;     
// }
?>

