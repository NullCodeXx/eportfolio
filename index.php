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
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no"><link rel="stylesheet" href="css/bootstrap4/css/bootstrap.min.css" />
<link rel="stylesheet" href="css/style.css" />
<link rel="stylesheet" href="css/font-awesome-4.7.0/css/font-awesome.min.css">
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<link rel="icon" type="image/png" href="content/logos/db.png" />
<title>Djaâfar BOUMAZA || ePortfolio </title><!-- Materialize 
      <link rel="stylesheet" type="text/css" media="screen,projection" href="css/materialize/css/materialize.min.css" />
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"> 
    -->
</head>

<body>
    <header class="container-fluid row header" id="header"></header>

  <div class="row body-section">
    <div class="col-xs-3 col-sm-4 col-md-4 col-lg-4 col-md-offset-1 block-profil">
    <h1 class="lead text-center"><span class="name">DJAAFAR BOUMAZA</span> <small>Développeur web full stack</small></h1>
    </div>
    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 col-md-offset-1 block-project">
      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 project-head">Mes project</div>
      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 project-body">
        <p class="lead text-center">Techno utilisé ... blablabla Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi nesciunt nulla quibusdam, eius molestias nemo facere corrupti debitis velit! Quae?</p>
      </div>
    </div>
      
  </div>
    <!-- 
      Reseaux

      <ul>
        <li><a href="https://github.com/djaafarcode" title="Voir mes projets Github"><img id="logos-reseaux1" src="./content/logos/github.svg" alt="Logo Github"></a></li>
        <li><a href="https://plus.google.com/102441240849299749508" title="Visitez mon compte Google Plus"><img id="logos-reseaux2" src="./content/logos/google-plus.svg" alt="Logo Google Plus"></a></li>
        <li><a href="https://plus.google.com/102441240849299749508" title="Visitez mon compte Google Plus"><img id="logos-reseaux2" src="./content/logos/google-plus.svg" alt="Logo Google Plus"></a></li>
        <li><a href="https://www.linkedin.com/in/djaafar-boumaza-84a867146/" title="Voir mon profil Linkedin"><img id="logos-reseaux3" src="./content/logos/linkedin.svg" alt="Logo Linkedin"></a></li>
        <li><a href="https://twitter.com/djaafarcode?lang=fr" title="Visitez mon twitter"><img id="logos-reseaux4" src="./content/logos/twitter.svg" alt="Logo Twitter"></a></li>
        <li><a href="mailto:code-db_@outlook.fr" title="Me contacter"><img id="logos-reseaux5" src="./content/logos/mail.svg" alt="Logo E-Mail"></a></li>
      </ul>

    Volet Deroulant

    <button class="button" class="btnViewProject">Voir mes projets</button>
    <section class="main">
        <h2 class="insidemain"><span class="titleProject">Mes Projets</span></h2>
        <hr class="hrUnderTitle">
        <div class="scrollmain">
          <ul class="ulProject"> 
            <?php foreach($projects as $p) { ?><li><p class='parafProject'><a class="link-project" href="<?php echo 'projects/' .$p;?>"><?php echo 'projects/' .$p;?></a></p></li><?php } ?>
          </ul>
        </div>
    </section>
    FIN VOLET
    -->
    <footer>
    </footer>

    <!-- Volet js -->
    <script src="./script.js"></script>
    <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
  </body>
</html>