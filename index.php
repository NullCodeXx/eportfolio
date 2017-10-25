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
<!-- Bootstrap -->
<link rel="stylesheet" href="css/bootstrap4/css/bootstrap-grid.css">
<link rel="stylesheet" href="css/bootstrap4/css/bootstrap-grid.css.map">
<link rel="stylesheet" href="css/bootstrap4/css/bootstrap-grid.min.css">
<link rel="stylesheet" href="css/bootstrap4/css/bootstrap-grid.min.css.map">
<link rel="stylesheet" href="css/bootstrap4/css/bootstrap.css">
<link rel="stylesheet" href="css/bootstrap4/css/bootstrap.css.map">
<link rel="stylesheet" href="css/bootstrap4/css/bootstrap.min.css.map">
<!-- Bootstrap js -->
<link rel="stylesheet" href="css/bootstrap4/js/bootstrap.js">
<link rel="stylesheet" href="css/bootstrap4/js/bootstrap..min.js">
<!-- Normalize -->
<link rel="stylesheet" href="https://necolas.github.io/normalize.css/7.0.0/normalize.css">
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
  <!-- PROFIL DESCRIPTION PREVISUALITION TECHNO -->
  <section class="container-fluid">
    <div class="row body-section">

      <div class="col-md-4 col-md-offset-1 col-sm-offset-1 col-xs-offset-0 block-profil">
        <div class="col-md-offset-4 col-md-4 col-md-offset-4 col-sm-offset-4 profil-header">
          <img class="photo-profil" src="./content/photo/photo-reseaux.png" alt="Photo de Djaafar BOUMAZA">
        </div>

        <div class="col-md-12">
          <h1 class="lead text-center"><span class="name">DJAAFAR BOUMAZA</span>
            <br />
           <span>Développeur web full stack</span></h1>   
        </div>

        <div class="container row col-md-offset-2 col-sm-9 col-sm-offset-2 col-xs-offset-1">
          <ul class="list-inline list-unstyled reseaux">
            <li><a href="https://github.com/djaafarcode" target="_blank" title="Voir mes projets Github"><img id="logos-reseaux1" src="./content/logos/github.svg" alt="Logo Github"></a></li>
            <li><a href="https://plus.google.com/102441240849299749508" target="_blank" title="Visitez mon compte Google Plus"><img id="logos-reseaux2" src="./content/logos/google-plus.svg" alt="Logo Google Plus"></a></li>
            <li><a href="https://www.linkedin.com/in/djaafar-boumaza-84a867146/" target="_blank" title="Voir mon profil Linkedin"><img id="logos-reseaux3" src="./content/logos/linkedin.svg" alt="Logo Linkedin"></a></li>
            <li><a href="https://twitter.com/djaafarcode?lang=fr" target="_blank" title="Visitez mon twitter"><img id="logos-reseaux4" src="./content/logos/twitter.svg" alt="Logo Twitter"></a></li>
            <li><a href="mailto:code-db_@outlook.fr" target="_blank" title="Me contacter"><img id="logos-reseaux5" src="./content/logos/mail.svg" alt="Logo E-Mail"></a></li>
            <li><a href="content/documents/Djaafar_BOUMAZA.pdf" target="_blank" title="Télécharger mon CV"><img id="logos-reseaux6" src="./content/logos/download.png" alt="Affiche mon CV"></a></li>
          </ul>
        </div>

        <div class="container row">
          <h3 class="col-md-offset-2 col-xs-offset-1 biographie">Biographie</h3>
          <p class="col-md-offset-2 col-xs-offset-1">
            Etant précédemment en fonction Aide Soignant au près des personnes en difficultés j'ai pus saisir l'opportunité d'être admis à Simplon dans le milieu de la programmation web.
            <br />
            Attiré et passionné par les lignes de code depuis mes 18 ans, la curiosité et la soif d'apprendre m'a amené à ne rien lâcher et persister pour arriver à ce début de chemin qui pour moi est tout simplement magnifique.
            <br />
            Je recherche actuellement un CDD/CDI ou un contrat de professionnalisation sur 10 mois afin de parfaire mes compétences et être toujours plus appliqué que jamais ! mes expériences passées apportent un plus dans l'application de ce que j'entreprend.
            <br />
            Je vous dis a très bientôt, bon code !
          </p>
        </div>

      </div>
      <div class="col-md-6 col-md-offset-1 col-sm-offset-1 col-xs-offset-0 block-project">
        <div class="col-md-12 project-header">
        <h2 class="text-center"><span class="name-project">Visualizer mes projets?</span></h2></div>
        <div class="col-md-12 project-body">
          <p class="lead text-center col-xs-offset-1">Mes projets au cours de ces 7 derniers mois intensif avec <stron>Simplon.co</strong></p>
          <table>
            <div class="col-md-offset-0 col-md-6 col-xs-offset-1">
              <dl class="">
                <dt>Driveme</dt>
                <img src="/test/" alt="image projet" />
              </dl>
            </div>

            <div class="col-md-offset-0 col-md-6 col-xs-offset-1">
              <dd>Reproduction du site Driiveme.com</dd>
              <ul class="list-inline list-unstyled">
                <li>logoHtml</li>
                <li>logoCss</li>
                <li>Etc...</li>
              </ul>
            </div>
          </table>
        </div>
      </div>
    </div>
  </section>

  <!-- COMPÉTENCE
  <section class="container-fluid">
    <div class="row test">
      <div class="col-md-offset-1 col-md-5 test1"></div>
      <div class="col-md-5 test2"></div>
    </div>
  </section> -->
  <!-- <section class="col-sm-12 table-responsive">
    <div class="container row">
    <table class="table table-bordered table-striped table-condensed">
      <caption>
      <h4>Mes compétences techniques</h4>
      </caption>
      <thead>
        <tr>
          <th>Langages</th>
          <th>Description</th>
        </tr>
      </thead>
        <tbody>
          <tr class="success">
            <td>HTML5 || CSS3</td>
            <td>Très bonne maitrise</td>
          </tr>
          <tr class="danger">
            <td>JavaScript</td>
            <td>Bonne Maitrise || A besoin de revoir quelque point technique</td>
          </tr>
          <tr class="warning">
            <td>PhP7</td>
            <td>Bonne maitrise || A besoin de revoir quelque point technique</td>
          </tr>
          <tr class="active">
            <td>Framework back-end</td>
            <td>Symfony3, nodeJS</td>
          </tr>
          <tr class="success">
            <td>Framework front-end</td>
            <td>Angular4, Bootstrap, Materialize, Awesome</td>
          </tr>
          <tr class="danger">
            <td>Expression régulière</td>
            <td>En cours d'apprentissage</td>
          </tr>
        </tbody>
    </table>
    </div>
  </section> -->

  <!-- Table de compétence -->
<!-- 
  <section class="col-sm-1 table-responsive">
    <div class="container row">
    <table class="table table-bordered table-striped table-condensed">
      <caption>
      <h4>Mes compétences techniques</h4>
      </caption>
      <thead>
        <tr>
          <th>Langages</th>
          <th>Description</th>
        </tr>
      </thead>
        <tbody>
          <tr class="success">
            <td>HTML5 || CSS3</td>
            <td>Très bonne maitrise</td>
          </tr>
          <tr class="danger">
            <td>JavaScript</td>
            <td>Bonne Maitrise || A besoin de revoir quelque point technique</td>
          </tr>
          <tr class="warning">
            <td>PhP7</td>
            <td>Bonne maitrise || A besoin de revoir quelque point technique</td>
          </tr>
          <tr class="active">
            <td>Framework back-end</td>
            <td>Symfony3, nodeJS</td>
          </tr>
          <tr class="success">
            <td>Framework front-end</td>
            <td>Angular4, Bootstrap, Materialize, Awesome</td>
          </tr>
          <tr class="danger">
            <td>Expression régulière</td>
            <td>En cours d'apprentissage</td>
          </tr>
        </tbody>
    </table>
    </div>
      
  </section>  -->

    
  
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