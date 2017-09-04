<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ePortfolio Djaâfar BOUMAZA</title>
</head>
<body>
</body>
</html>
<?php
/* 
 * Add project in directory.
 */

$scan = scandir("./project");
foreach($scan as $directory) {
    if($directory) {
        echo "<ul>";
        echo "<li>$directory</li>";
        echo "</ul>";
    }
}
?>
