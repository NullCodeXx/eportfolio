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
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

<!-- CSS -->
<link rel="stylesheet" href="css/style.css" />
<!-- Normalize online-->
<link rel="stylesheet" href="https://necolas.github.io/normalize.css/7.0.0/normalize.css">
<!-- Bootstrap3 online-->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<!-- Bootstrap3 theme online-->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
<!-- Bootstrap3 theme local-->
<link rel="stylesheet" href="css/bootstrap-3.3.7-dist/css/bootstrap-theme.css">
<link rel="stylesheet" href="css/bootstrap-3.3.7-dist/css/bootstrap.css">
<!-- Favicon -->
<link rel="icon" type="image/png" href="content/logos/db.png" />
<title>Djaâfar BOUMAZA || ePortfolio </title>
</head>

<body>
  <header class="container-fluid header" id="header">
          <div class="container-fluid">
            <div>
              <nav class="navbar navbar-default navbar-fixed-top">
                <div class="container-fluid nav-header-color">
                  <!-- Button + titre -->  
                  <div class="navbar-header">  
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                      <span class="sr-only"><font style="vertical-align: inherit;color: #fff;">Basculer le menu navigation</font></span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#"><font style="vertical-align: inherit;color: #fff;font-family: 'GloriaHallelujah.ttf';letter-spacing: 2px;" onmouseover="this.style.backgroundColor='rgb(14, 44, 42);';this.style.color='#129888';" 
                      onmouseout="this.style.backgroundColor='rgb(14,44,42)';this.style.color='#fff';">D.BOUMAZA</font></a>
                  </div>

                  <!-- Liens -->
                  <div id="navbar" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                      <li class="btn-group show-on-hover">
                        <a href="#competences" class="testcolor">
                          <font style="vertical-align: inherit;color: #fff;font-family: 'GloriaHallelujah.ttf';letter-spacing: 2px;" onmouseover="this.style.backgroundColor='rgb(14, 44, 42);';this.style.color='#129888';" 
                          onmouseout="this.style.backgroundColor='rgb(14,44,42)';this.style.color='#fff';">
                            Compétence
                          </font>
                        </a>
                        <ul class="dropdown-menu list-inline list-unstyled" id="hover-project-hover-main" role="menu">
                          <li><img id="logos-languages" title="HTML5" src="./content/logos/html-5.svg" alt="HTML5"></li>
                          <li><img id="logos-languages" title="CSS3" src="./content/logos/css-3.svg" alt="CSS3"></li>
                          <li><img id="logos-languages" title="JavaScript" src="./content/logos/js.svg" alt="JavaScript"></li>
                          <li><img id="logos-languages" title="PHP7" src="./content/logos/php.svg" alt="PHP"></li>
                          <li><img id="logos-languages" title="SQL" src="./content/logos/sql.svg" alt="SQL"></li>
                          <li><img id="logos-languages" title="NodeJS" src="./content/logos/nodejs.svg" alt="NodeJS"></li>
                          <li><img id="logos-languages" title="JSON" src="./content/logos/json.svg" alt="Json"></li>
                          <li><img id="logos-languages" title="ANGULAR" src="./content/logos/angular.svg" alt="angular"></li>
                          <li><img id="logos-languages" title="APACHE" src="./content/logos/apache.svg" alt="Apache"></li>
                          <li><img id="logos-languages" title="BOOTSTRAP" src="./content/logos/bootstrap.svg" alt="Bootstrap"></li>
                          <li><img id="logos-languages" title="NETBEANS" src="./content/logos/netbeans.svg" alt="Netbeans"></li>
                          <li><img id="logos-languages" title="NGINX" src="./content/logos/nginx.png" alt="Nginx"></li>
                          <li><img id="logos-languages" title="SLACK" src="./content/logos/slack.svg" alt="Slack"></li>
                          <li><img id="logos-languages" title="SYMFONY4" src="./content/logos/symfony4.svg" alt="Symfony"></li>
                          <li><img id="logos-languages" title="TS" src="./content/logos/ts.png" alt="Ts"></li>
                          <li><img id="logos-languages" title="VSCODE" src="./content/logos/vscode.svg" alt="Vscode"></li>
                          <li><img id="logos-languages" title="WINDOWS" src="./content/logos/windows.svg.png" alt="Windows"></li>
                          <li><img id="logos-languages" title="WORDPRESS" src="./content/logos/wordpress.svg.png" alt="Wordpress"></li>
                          <li><img id="logos-languages" title="LINUX" src="./content/logos/linux.png" alt="Linux"></li>
                          <li><img id="logos-languages" title="MARIADB" src="./content/logos/mariadb.svg.png" alt="Mariadb"></li>
                        </ul>
                      </li>
                      <li class="btn-group show-on-hover">
                        <!-- it's working defile animated -->
                        <a href="#contactme" style="transition: all 0.7s ease-out;">
                          <font style="vertical-align: inherit;color: #fff;font-family: 'GloriaHallelujah.ttf';letter-spacing: 2px;" onmouseover="this.style.backgroundColor='rgb(14, 44, 42);';this.style.color='#129888';" 
                          onmouseout="this.style.backgroundColor='rgb(14,44,42)';this.style.color='#fff';">
                            Contact
                          </font>
                          </a>
                          <ul class="dropdown-menu list-inline list-unstyled" id="hover-project-hover-main" role="menu">
                            <font style="vertical-align: inherit;color: #fff;font-family: 'GloriaHallelujah.ttf';letter-spacing: 2px;" onmouseover="this.style.backgroundColor='rgb(14, 44, 42);';this.style.color='#129888';" 
                            onmouseout="this.style.backgroundColor='rgb(14,44,42)';this.style.color='#fff';">
                              <li class="list-center"><a href="https://talents.simplon.co/#!/login" id="hover-a-project-list"><span class="colorSimplon">Simplon</span></a></li>
                              <li class="list-center"><a href="https://github.com/djaafarcode" id="hover-a-project-list"><span class="colorGithub">Github</span></a></li>
                              <li class="list-center"><a href="https://www.linkedin.com/in/djaafar-boumaza-84a867146/" id="hover-a-project-list"><span class="colorLinkedin">Linkedin</span></a></li>
                              <li class="list-center"><a href="https://twitter.com/djaafarcode?lang=fr" id="hover-a-project-list"><span class="colorTwitter">Twitter</span></a></li>
                              <li class="list-center"><a href="https://plus.google.com/102441240849299749508" id="hover-a-project-list"><span class="colorGoogle">Google+</span></a></li>
                              <li class="list-center"><a href="mailto:code-db_@outlook.fr" id="hover-a-project-list"><span class="colorEmail">E-mail</span></a></li>
                            </font>
                          </ul>
                        </li>
                      <!-- Btn click js for view project -->
                      <li class="btn-group show-on-hover" id="#display-project-script">
                        <a href="#">
                          <font style="vertical-align: inherit;color: #fff;font-family: 'GloriaHallelujah.ttf';letter-spacing: 2px;">
                            <button id="display-project" onmouseover="this.style.backgroundColor='rgb(14, 44, 42);';this.style.color='#129888';" 
                              onmouseout="this.style.backgroundColor='rgb(14,44,42)';this.style.color='#fff';">Projets</button>
                          </font>
                        </a>
                        <ul class="dropdown-menu" id="hover-project-hover-main" role="menu">
                            <?php foreach($projects as $p) { ?><li class="hover-project-hover-list"><p class="parafProject" id="hover-paraf-project-list"><a id="hover-a-project-list" class="link-project" href="<?php echo 'projects/' .$p;?>"><?php echo 'projects/' .$p;?></a></p></li><?php } ?>
                          </font>
                        </ul>
                      </li>
                    </ul>
                  </div>
                </div>
              </nav>
            </div>
          </div>
  </header>  

  <!-- My projects -->
  <div id="contProject">
    <ul id="listeProject">
      <?php foreach($projects as $p) { ?><li><p class='parafProject'><a class="link-project" href="<?php echo 'projects/' .$p;?>"><?php echo 'projects/' .$p;?></a></p></li><?php } ?>
    </ul>
  </div>

  <!-- PROFIL DESCRIPTION PREVISUALITION TECHNO -->
  <section class="container-fluid">
    <div class="row body-section">

      <div class="fixed-top col-md-4 col-md-offset-1 col-xs-offset- block-profil">
        <div class="container-fluid col-md-offset-4 col-md-4 col-md-offset-4 col-sm-offset-4 col-sx-offset-2 col-xs-8 col-sx-offset-2 profil-header">
          <img class="photo-profil col-sm-offset-0 col-xs-offset-6" src="./content/photo/moi/photo-reseaux.png" alt="Photo de Djaafar BOUMAZA">
        </div>

        <div class="col-md-12">
          <h1 class="lead text-center"><span class="name">DJAAFAR BOUMAZA</span>
          <br />
          <span class="job-function">Développeur web full stack</span></h1>   
        </div>
        <div class="container row col-md-offset-2 col-sm-9 col-sm-offset-2 col-xs-offset-1">
          <ul class="list-inline list-unstyled">
            <li><a href="https://github.com/djaafarcode" target="_blank" title="Voir mes projets Github"><img id="logos-reseaux" src="./content/logos/github.svg" alt="Logo Github"></a></li>
            <li><a href="https://plus.google.com/102441240849299749508" target="_blank" title="Visitez mon compte Google Plus"><img id="logos-reseaux" src="./content/logos/google-plus.svg" alt="Logo Google Plus"></a></li>
            <li><a href="https://www.linkedin.com/in/djaafar-boumaza-84a867146/" target="_blank" title="Voir mon profil Linkedin"><img id="logos-reseaux" src="./content/logos/linkedin.svg" alt="Logo Linkedin"></a></li>
            <li><a href="https://twitter.com/djaafarcode?lang=fr" target="_blank" title="Visitez mon twitter"><img id="logos-reseaux" src="./content/logos/twitter.svg" alt="Logo Twitter"></a></li>
            <li><a href="mailto:code-db_@outlook.fr" target="_blank" title="Me contacter"><img id="logos-reseaux" src="./content/logos/mail.svg" alt="Logo E-Mail"></a></li>
            <li><a href="content/documents/Djaafar_BOUMAZA.pdf" target="_blank" title="Télécharger mon CV"><img id="logos-reseaux" src="./content/logos/download.png" alt="Affiche mon CV"></a></li>
          </ul>
        </div>

        <div class="container col-md-12 block-biographie">
          <h3 class="col-md-offset-2 col-xs-offset-1"><span class="biographie">Biographie</span></h3>
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

      <div class="col-md-6 col-md-offset-1 col-sm-offset-1 col-xs-offset-0 container-block-project">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 project-header">
          <h2 class="text-center"><span class="name-project">Zone de développement 777</span></h2>
        </div>

        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 project-body block-project">
          <p class="lead text-center col-xs-offset-1">Visualizer mes projets ? <stron>Simplon.co</strong></p>
          
          <!-- Drive me -->
          <table class="table table-bordered table-striped table-condensed">
            <div class="col-md-offset-0 col-md-6 col-xs-offset-0">
                <div class="col-md-12 col-xs-offset-0 col-sm-offset-0">
                  <a href="projects/driveme" title="Driveme"><img class="preview-project" src="./content/photo/project/driveme.png" alt="image projet" /></a>
                </div>
            </div>
              
            <div class="col-md-offset-0 col-md-6 col-xs-offset-1">
              <dt>Driiveme</dt>
              <dd>Reproduction du site Driiveme.com || Utilisation des flexboxs</dd>
              <ul class="list-inline list-unstyled">
                <li><img id="logos-languages" title="HTML5" src="./content/logos/html-5.svg" alt="HTML5"></li>
                <li><img id="logos-languages" title="CSS3" src="./content/logos/css-3.svg" alt="CSS3"></li>
              </ul>
            </div>
          </table>

          <!-- Game fight -->
          <table class="table table-bordered table-striped table-condensed">
            <div class="col-md-offset-0 col-md-6 col-xs-offset-0">
                <div class="col-md-12 col-xs-offset-0 col-sm-offset-0">
                <a href="projects/game" title="Game Fight"><img class="preview-project" src="./content/photo/project/game1.png" alt="image projet" /></a>
                </div>
            </div>

            <div class="col-md-offset-0 col-md-6 col-xs-offset-1">
              <dt>Game Fight</dt>
              <dd>Jeux de combat || Utilisation du Local Storage</dd>
              <ul class="list-inline list-unstyled">
              <li><img id="logos-languages" title="JavaScript" src="./content/logos/js.svg" alt="JavaScript"></li>
              <li><img id="logos-languages" title="HTML5" src="./content/logos/html-5.svg" alt="HTML5"></li>
              <li><img id="logos-languages" title="CSS3" src="./content/logos/css-3.svg" alt="CSS3"></li>
            </ul>
            </div>
          </table>

          <!-- NodeJs Express -->
          <table class="table table-bordered table-striped table-condensed">
            <div class="col-md-offset-0 col-md-6 col-xs-offset-0">
                <div class="col-md-12 col-xs-offset-0 col-sm-offset-0">
                <a href="projects/project-chat" title="NodeJs"><img class="preview-project" src="./content/photo/project/projet-tchat.png" alt="image projet" /></a>
                </div>
            </div>

            <div class="col-md-offset-0 col-md-6 col-xs-offset-1">
              <dt>Tchat</dt>
              <dd>PDO + connexion à la BDD SQL pour le stockage</dd>
              <ul class="list-inline list-unstyled">
                <li><img id="logos-languages" title="JavaScript" src="./content/logos/js.svg" alt="JavaScript"></li>
                <li><img id="logos-languages" title="SQL" src="./content/logos/sql.svg" alt="SQL"></li>
                <li><img id="logos-languages" title="HTML5" src="./content/logos/html-5.svg" alt="HTML5"></li>
                <li><img id="logos-languages" title="CSS3" src="./content/logos/css-3.svg" alt="CSS3"></li>
                <li><img id="logos-languages" title="PHP7" src="./content/logos/php.svg" alt="PHP"></li>
                <li><img id="logos-languages" title="BOOTSTRAP" src="./content/logos/bootstrap.svg" alt="Bootstrap"></li>
              </ul>
            </div>
          </table>

          <!-- Bataille Navale -->
          <table class="table table-bordered table-striped table-condensed">
            <div class="col-md-offset-0 col-md-6 col-xs-offset-0">
                <div class="col-md-12 col-xs-offset-0 col-sm-offset-0">
                <a href="projects/project-bataille-navale/view" title="NodeJs"><img class="preview-project" src="./content/photo/project/bataille.png" alt="image projet" /></a>
                </div>
            </div>

            <div class="col-md-offset-0 col-md-6 col-xs-offset-1">
              <dt>Bataille navale </dt>
              <dd>En cours…</dd>
              <ul class="list-inline list-unstyled">
                <li><img id="logos-languages" title="JavaScript" src="./content/logos/js.svg" alt="JavaScript"></li>
                <li><img id="logos-languages" title="SQL" src="./content/logos/sql.svg" alt="SQL"></li>
                <li><img id="logos-languages" title="HTML5" src="./content/logos/html-5.svg" alt="HTML5"></li>
                <li><img id="logos-languages" title="CSS3" src="./content/logos/css-3.svg" alt="CSS3"></li>
                <li><img id="logos-languages" title="PHP7" src="./content/logos/php.svg" alt="PHP"></li>
              </ul>
            </div>
          </table>
          
          <!-- Projet Chat -->
          <table class="table table-bordered table-striped table-condensed">
            <div class="col-md-offset-0 col-md-6 col-xs-offset-0">
                <div class="col-md-12 col-xs-offset-0 col-sm-offset-0">
                <a href="projects/node-meetup" title="Tchat"><img class="preview-project" src="./content/photo/project/nodejs-express.png" alt="image projet" /></a>
                </div>
            </div>

            <div class="col-md-offset-0 col-md-6 col-xs-offset-1">
              <dt>Node Meetup</dt>
              <dd>Post des évenements || Travail collaboratif</dd>
              <ul class="list-inline list-unstyled">
                <li><img id="logos-languages" title="JavaScript" src="./content/logos/js.svg" alt="JavaScript"></li>
                <li><img id="logos-languages" title="HTML5" src="./content/logos/html-5.svg" alt="HTML5"></li>
                <li><img id="logos-languages" title="CSS3" src="./content/logos/css-3.svg" alt="CSS3"></li>
                <li><img id="logos-languages" title="SQL" src="./content/logos/sql.svg" alt="SQL"></li>
                <li><img id="logos-languages" title="NodeJS" src="./content/logos/nodejs.svg" alt="NodeJS"></li>
                <li><img id="logos-languages" title="JSON" src="./content/logos/json.svg" alt="JSON"></li>
                <li><img id="logos-languages" title="BOOTSTRAP" src="./content/logos/bootstrap.svg" alt="Bootstrap"></li>
              </ul>
            </div>
          </table>

          <!-- PHP blog -->
          <table class="table table-bordered table-striped table-condensed">
            <div class="col-md-offset-0 col-md-6 col-xs-offset-0">
                <div class="col-md-12 col-xs-offset-0 col-sm-offset-0">
                  <a href="projects/php-blog" title="Blog"><img class="preview-project" src="./content/photo/project/php-blog.png" alt="image projet" /></a>
                </div>
            </div>

            <div class="col-md-offset-0 col-md-6 col-xs-offset-1">
              <dt>Blog</dt>
              <dd>PHP blog || Pure brut</dd>
              <ul class="list-inline list-unstyled">
                <li><img id="logos-languages" title="HTML5" src="./content/logos/html-5.svg" alt="HTML5"></li>
                <li><img id="logos-languages" title="CSS3" src="./content/logos/css-3.svg" alt="CSS3"></li>
                <li><img id="logos-languages" title="PHP7" src="./content/logos/php.svg" alt="PHP"></li>
              </ul>
            </div>
          </table>

          <!-- API weather -->
          <table class="table table-bordered table-striped table-condensed">
            <div class="col-md-offset-0 col-md-6 col-xs-offset-0">
                <div class="col-md-12 col-xs-offset-0 col-sm-offset-0">
                  <a href="projects/project-api" title="Weather"><img class="preview-project" src="./content/photo/project/api-weather.png" alt="image projet" /></a>
                </div>
            </div>

            <div class="col-md-offset-0 col-md-6 col-xs-offset-1">
              <dt>API Weather</dt>
              <dd>JSON || Utilisation d'API externe</dd>
              <ul class="list-inline list-unstyled">
                <li><img id="logos-languages" title="HTML5" src="./content/logos/html-5.svg" alt="HTML5"></li>
                <li><img id="logos-languages" title="CSS3" src="./content/logos/css-3.svg" alt="CSS3"></li>
                <li><img id="logos-languages" title="PHP7" src="./content/logos/php.svg" alt="PHP"></li>
                <li><img id="logos-languages" title="JSON" src="./content/logos/json.svg" alt="JSON"></li>
                <li><img id="logos-languages" title="BOOTSTRAP" src="./content/logos/bootstrap.svg" alt="Bootstrap"></li>
              </ul>
            </div>
          </table>

          <!-- Todo List -->
          <table class="table table-bordered table-striped table-condensed">
            <div class="col-md-offset-0 col-md-6 col-xs-offset-0">
                <div class="col-md-12 col-xs-offset-0 col-sm-offset-0">
                  <a href="projects/todo-list" title="Todolist"><img class="preview-project" src="./content/photo/project/todolist.png" alt="image projet" /></a>
                </div>
            </div>

            <div class="col-md-offset-0 col-md-6 col-xs-offset-1">
              <dt>Todolist</dt>
              <dd>Javascript || Les grands débuts</dd>
              <ul class="list-inline list-unstyled">
                <li><img id="logos-languages" title="HTML5" src="./content/logos/html-5.svg" alt="HTML5"></li>
                <li><img id="logos-languages" title="CSS3" src="./content/logos/css-3.svg" alt="CSS3"></li>
                <li><img id="logos-languages" title="JavaScript" src="./content/logos/js.svg" alt="JavaScript"></li>
              </ul>
            </div>
          </table>

        </div>
      </div>
    </div>
  </section>

 

<?php
include_once "form.php";
include_once "footer.php";

?>
    <!-- Volet déroulant js -->
    <script src="./script.js"></script>
    <!-- click projects -->
    <script src="./project.js"></script>
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <!-- BootstrapScript3 online-->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <!-- BootstrapScript3 local-->
    <script src="css/bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
  </body>
</html>