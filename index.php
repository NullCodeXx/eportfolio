<?php

$all = scandir('projects');
$projects = [];

foreach($all as $f) {
  //Vérifie si le dossier projects existe sinon création du dossier.
  // if(!mkdir('./projects', 753, true)) { //Permet la création de répertoires imbriqués spécifiés dans le pathname
  //   die("Error, echec de la création du dossier.");
  // }
  //test si point ignore , fichier cacher.
  if($f[0] === ".") {
    continue;
  }
  //Vérifie les fichiers.
  if (!is_dir('projects/' . $f)) {
    continue;
  }
  //add projet dans le tableau.
  $projects[]= $f;
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap4/css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="icon" type="image/png" href="content/logos/db.png" />
    <!-- Materialize 
      <link rel="stylesheet" type="text/css" media="screen,projection" href="css/materialize/css/materialize.min.css" />
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"> 
    -->
    <title>Djaâfar BOUMAZA || ePortfolio </title>
</head>

<body class="container-fluid">
    <header class="row minightBlue">
        <div class="col-md-9 col-xs-3 bloc-header">
          <img id="logo-profile" src="./content/logos/user.svg" alt="Photo utilisateur">
          <a href="index.php" title="Accueil" class="photo-lien"><img id="photo-profile" src="./content/photo/photo-reseaux.png" alt="Logo utilisateur"></a>
          <h1 class="name">DJAAFAR BOUMAZA</h1>
          <p class="flow-text functionJob">Développeur Web junior Full Stack</p>
        </div>
        <div class="col-md-3 bloc-header-logo">
          <a href="https://github.com/djaafarcode" title="Voir mes projets Github"><img id="logos-reseaux1" src="./content/logos/github.svg" alt="Logo Github"></a>
          <a href="https://plus.google.com/102441240849299749508" title="Visitez mon compte Google Plus"><img id="logos-reseaux2" src="./content/logos/google-plus.svg" alt="Logo Google Plus"></a>
          <a href="https://www.linkedin.com/in/djaafar-boumaza-84a867146/" title="Voir mon profil Linkedin"><img id="logos-reseaux3" src="./content/logos/linkedin.svg" alt="Logo Linkedin"></a>
          <a href="https://twitter.com/djaafarcode?lang=fr" title="Visitez mon twitter"><img id="logos-reseaux4" src="./content/logos/twitter.svg" alt="Logo Twitter"></a>
          <a href="mailto:code-db_@outlook.fr" title="Me contacter"><img id="logos-reseaux5" src="./content/logos/mail.svg" alt="Logo E-Mail"></a>
        </div>
        <div class="border-line"></div>
    </header>
        <center><button class="button">Voir mes projets</button></center>
        <p>Le portfolio est en production et seras mis a jour prochainement, a très bientôt !</p>

    <!-- VOLET -->
    
    
    <section class="main">
        <h2 class="insidemain">Mes Projets </h2>
        <hr class="insidemain" style="width: 80%;">
        <div class="scrollmain">
          <ul>
            <?php foreach($projects as $p) { ?><li><a href="<?php echo 'projects/' .$p;?>"><?php echo 'projects/' .$p;?></a></li><?php } ?>
          </ul>
        </div>
    </section>
    <!-- FIN VOLET -->

<script src="./script.js"></script>


<!-- Temporaire, dans le fichier .gitignore, je le place ici cause probleme du dossier project.
*
!.gitignore 
-->
</body>

</html>

