<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <script src="script.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
    <title>ePortfolio Djaâfar BOUMAZA</title>
</head>
<body>
<img src="wallindex.jpg" alt="wallpaper street">
    <main class="mainNav">
        <section class="sectionNav">
            <div class="divNav">
                <h1 class="h1Nav">Djaafar BOUMAZA</h1>
                <ul class="ulNav">
                    <li class="liNav"><a href="#" class="aNav"><button type="submit">Index</button></a></li>
                    <li class="liNav"><a href="#" class="aNav">GitHub</a></li>
                    <li class="liNav"><a href="#" class="aNav">Serveur</a></li>
                    <li class="liNav"><a href="#" class="aNav">Contact</a></li>
                </ul>
            </div>
        </section>
    </main>

    <!--VOLET DEROULANT -->
    <section class="main">
        <h2 class="insidemain">INDEX ALL</h2>
        <hr class="insidemain" style="width: 80%;">
    </section>
</html>
</body>
<?php
/* 
 * Add project in directory.
 */

$scan = scandir("./projects");
foreach($scan as $directory) {
    if($directory) {
        echo "<ul>";
        echo "<li><button>$directory</button></li>";
        echo "</ul>";
    }
}
?>
