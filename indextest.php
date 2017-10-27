<!DOCTYPE html>
<html lang="fr">
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
<title>Djaâfar BOUMAZA || ePortfolio </title>
</head>
<body>


<!-- A CONSERVER POUR LE SITE || Copy paste because code clean

########################################################################################
########################################################################################
########################################################################################
########################################################################################
########################################################################################
########################################################################################
########################################################################################
########################################################################################
 -->

 <!-- Section Pour le body-->


 <!-- Section pour le volet déroulant avec les projets comme contenus -->
 <!--
    A ajouté audessus du DOCTYPE HTML :

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

    Volet Deroulant a ajouté dans une section.

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
 <!-- PROFIL DESCRIPTION PREVISUALITION TECHNO -->
 <section class="container-fluid">
    <div class="row body-section">

      <div class="fixed-top col-md-4 col-md-offset-1 col-sm-offset-1 col-xs-offset-0 block-profil">
        <div class="col-md-offset-4 col-md-4 col-md-offset-4 col-sm-offset-4 profil-header">
          <img class="photo-profil" src="./content/photo/moi/photo-reseaux.png" alt="Photo de Djaafar BOUMAZA">
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
        <h2 class="text-center"><span class="name-project">Zone de développement</span></h2></div>
        <div class="col-md-12 project-body">
            <p class="lead text-center col-xs-offset-1">Visualizer mes projets ? <stron>Simplon.co</strong></p>
          <table class="table table-bordered table-striped table-condensed">
            <div class="col-md-offset-0 col-md-6 col-xs-offset-0">
                <div class="col-md-12 col-xs-offset-0 col-sm-offset-0">
                  <img class="preview-project" src="./content/photo/project/driveme.png" alt="image projet" />
                </div>
            </div>

            <div class="col-md-offset-0 col-md-6 col-xs-offset-1">
              <dt>Driiveme</dt>
              <dd>Reproduction du site Driiveme.com</dd>
              <ul class="list-inline list-unstyled">
                <li>logoHtml</li>
                <li>logoCss</li>
                <li>Etc...</li>
              </ul>
            </div>
          </table>

          <table class="table table-bordered table-striped table-condensed">
            <div class="col-md-offset-0 col-md-6 col-xs-offset-0">
                <div class="col-md-12 col-xs-offset-0 col-sm-offset-0">
                  <img class="col-md-6 preview-project-game" src="./content/photo/project/game.png" alt="image projet" /> -->
                  <img class="preview-project" src="./content/photo/project/game1.png" alt="image projet" />
                </div>
            </div>

            <div class="col-md-offset-0 col-md-6 col-xs-offset-1">
              <dt>Game Fight</dt>
              <dd>Jeux de combat</dd>
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

 <!-- FIN DE CE QUE JE CONSERVE POUR LE SITE

########################################################################################
########################################################################################
########################################################################################
########################################################################################
########################################################################################
########################################################################################
########################################################################################
########################################################################################
 -->

<header>
<!-- container Layout-->
<div class="container layout">
        <div class="navbar navbar-default" role="navigation"> <!-- bloc navigation -->
          <!-- Navbar header contient le button-->
          <div class="navbar-header">
            <!-- Button vide -->
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
              <span class="sr-only">Toggle navigation</span>
              <!-- 3 bar de barre pour le button -->
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <span class="navbar-brand">Responsive demo</span>
          </div>

          <div class="navbar-collapse collapse"> <!-- collapse fais disparaitre les lien au rétrécissement de la page-->
            <ul class="nav navbar-nav"> <!-- devient une navigation-->
              <li><a href="#">Lien</a></li>
              <li><a href="#">Lien</a></li>
              <li><a href="#">Lien</a></li>
              <li><a href="#">Lien</a></li>
              <li><a href="#">Lien</a></li>
              <li><a href="#">Lien</a></li>
            </ul>
          </div> <!-- /navbar -->
        </div>
        
        <!-- Premier row -->
        <div class="row hidden-xs">
        <!-- 2 cologne -->
          <div class="col-xs-4">
            <p>Super ipsum dolor sit amet consectetur adipisicing elit. Cum ut ad a est dolores reprehenderit, fugit vero eligendi laboriosam facilis.</p>
          </div>
          <div class="col-xs-4">
            <p>Cool ipsum dolor sit amet consectetur adipisicing elit. Cum ut ad a est dolores reprehenderit, fugit vero eligendi laboriosam facilis.</p>
          </div>
        </div>
        <!-- Premier /row -->
        <!-- Second row -->
        <div class="row">
          <div class="col-lg-6">
              <p class="visible-xs"><strong>Tu ne me vérra que si tu passe sur un écrans de taille mobile, la propriété hidden-xs, permet de cacher, et la propriété visible-xs permet d'afficher, sa peut aussi bien être du sm, md ou lg.</strong></p>

            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum ut ad a est dolores reprehenderit, fugit vero eligendi laboriosam facilis.</p>
          </div>
          <div class="col-lg-6">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum ut ad a est dolores reprehenderit, fugit vero eligendi laboriosam facilis.</p>
          </div>
        </div>
        <!-- Second /row -->
        <!-- Troisieme row -->
       <div class="row">
       <!-- Panel -->
          <div class="col-sm-6 col-md-4 col-lg-3">
            <div class="panel panel-default">
              <div class="panel-body">
                <p>aaaaLorem ipsum dolor, sit amet consectetur adipisicing elit. Labore cumque soluta officiis nulla sint tempora enim est dicta quidem aperiam? </p>
              </div>
            </div>
          </div>
          <!--Panel duplicate -->
          <div class="col-sm-6 col-md-4 col-lg-3">
            <div class="panel panel-default">
              <div class="panel-body">
                <p>aaaaLorem ipsum dolor, sit amet consectetur adipisicing elit. Labore cumque soluta officiis nulla sint tempora enim est dicta quidem aperiam? </p>
              </div>
            </div>
          </div>
          <!--Panel duplicate -->
          <div class="col-sm-6 col-md-4 col-lg-3">
            <div class="panel panel-default">
              <div class="panel-body">
                <p>aaaaLorem ipsum dolor, sit amet consectetur adipisicing elit. Labore cumque soluta officiis nulla sint tempora enim est dicta quidem aperiam? </p>
              </div>
            </div>
          </div>
          <!--Panel duplicate -->
          <div class="col-sm-6 col-md-4 col-lg-3">
            <div class="panel panel-default">
              <div class="panel-body">
                <p>aaaaLorem ipsum dolor, sit amet consectetur adipisicing elit. Labore cumque soluta officiis nulla sint tempora enim est dicta quidem aperiam? </p>
              </div>
            </div>
          </div>
          <!--Panel duplicate -->
          <div class="col-sm-6 col-md-4 col-lg-3">
            <div class="panel panel-default">
              <div class="panel-body">
                <p>aaaaLorem ipsum dolor, sit amet consectetur adipisicing elit. Labore cumque soluta officiis nulla sint tempora enim est dicta quidem aperiam? </p>
              </div>
            </div>
          </div>
          <!--Panel duplicate -->
          <div class="col-sm-6 col-md-4 col-lg-3">
            <div class="panel panel-default">
              <div class="panel-body">
                <p>aaaaLorem ipsum dolor, sit amet consectetur adipisicing elit. Labore cumque soluta officiis nulla sint tempora enim est dicta quidem aperiam? </p>
              </div>
            </div>
          </div>
          <!--Panel duplicate -->
          <div class="col-sm-6 col-md-4 col-lg-3">
            <div class="panel panel-default">
              <div class="panel-body">
                <p>aaaaLorem ipsum dolor, sit amet consectetur adipisicing elit. Labore cumque soluta officiis nulla sint tempora enim est dicta quidem aperiam? </p>
              </div>
            </div>
          </div>
          <!--Panel duplicate -->
          <div class="col-sm-6 col-md-4 col-lg-3">
            <div class="panel panel-default">
              <div class="panel-body">
                <p>aaaaLorem ipsum dolor, sit amet consectetur adipisicing elit. Labore cumque soluta officiis nulla sint tempora enim est dicta quidem aperiam? </p>
              </div>
            </div>
          </div> <!-- /Panel -->
       </div> <!-- Troisieme /row -->
      </div> <!-- /container -->
</header>

<div class="row">
  <div class="col-md-1">.col-md-1</div>
  <div class="col-md-1">.col-md-1</div>
  <div class="col-md-1">.col-md-1</div>
  <div class="col-md-1">.col-md-1</div>
  <div class="col-md-1">.col-md-1</div>
  <div class="col-md-1">.col-md-1</div>
  <div class="col-md-1">.col-md-1</div>
  <div class="col-md-1">.col-md-1</div>
  <div class="col-md-1">.col-md-1</div>
  <div class="col-md-1">.col-md-1</div>
  <div class="col-md-1">.col-md-1</div>
  <div class="col-md-1">.col-md-1</div>
</div>
<div class="row">
  <div class="col-md-8">.col-md-8</div>
  <div class="col-md-4">.col-md-4</div>
</div>
<div class="row">
  <div class="col-md-4">.col-md-4</div>
  <div class="col-md-4">.col-md-4</div>
  <div class="col-md-4">.col-md-4</div>
</div>
<div class="row">
  <div class="col-md-6">.col-md-6</div>
  <div class="col-md-6">.col-md-6</div>
</div>

<div class="container-fluid">
  <div class="row">
    ...
  </div>
</div>
<!-- Stack the columns on mobile by making one full-width and the other half-width -->
<div class="row">
  <div class="col-xs-12 col-md-8">.col-xs-12 .col-md-8</div>
  <div class="col-xs-6 col-md-4">.col-xs-6 .col-md-4</div>
</div>

<!-- Columns start at 50% wide on mobile and bump up to 33.3% wide on desktop -->
<div class="row">
  <div class="col-xs-6 col-md-4">.col-xs-6 .col-md-4</div>
  <div class="col-xs-6 col-md-4">.col-xs-6 .col-md-4</div>
  <div class="col-xs-6 col-md-4">.col-xs-6 .col-md-4</div>
</div>

<!-- Columns are always 50% wide, on mobile and desktop -->
<div class="row">
  <div class="col-xs-6">.col-xs-6</div>
  <div class="col-xs-6">.col-xs-6</div>
</div>

<div class="row">
  <div class="col-xs-9">.col-xs-9</div>
  <div class="col-xs-4">.col-xs-4<br>Since 9 + 4 = 13 &gt; 12, this 4-column-wide div gets wrapped onto a new line as one contiguous unit.</div>
  <div class="col-xs-6">.col-xs-6<br>Subsequent columns continue along the new line.</div>
</div>

<div class="row">
  <div class="col-xs-6 col-sm-3">.col-xs-6 .col-sm-3</div>
  <div class="col-xs-6 col-sm-3">.col-xs-6 .col-sm-3</div>

  <!-- Add the extra clearfix for only the required viewport -->
  <div class="clearfix visible-xs-block"></div>

  <div class="col-xs-6 col-sm-3">.col-xs-6 .col-sm-3</div>
  <div class="col-xs-6 col-sm-3">.col-xs-6 .col-sm-3</div>
</div>
  <div class="row">
    <div class="col-md-3 col-md-offset-3 block-profil">.col-md-3 .col-md-offset-3</div>
    <div class="col-md-3 col-md-offset-3 block-project">.col-md-3 .col-md-offset-3</div>
  </div>

  <div class="row">
  <div class="col-md-4 block-profil">.col-md-4</div>
  <div class="col-md-4 col-md-offset-4 block-project">.col-md-4 .col-md-offset-4</div>
</div>
<div class="row">
  <div class="col-md-3 col-md-offset-3 block-profil">.col-md-3 .col-md-offset-3</div>
  <div class="col-md-3 col-md-offset-3 block-project">.col-md-3 .col-md-offset-3</div>
</div>
<div class="row">
  <div class="col-md-6 col-md-offset-3 block-profil">.col-md-6 .col-md-offset-3</div>
</div>

<!-- 
  Les images

Sur moyen et grand écran : 6 images sur la largeur.
Sur tablette : 4 images sur la largeur.
Sur smartphone : 3 images sur la largeur.
-->
<div class="container">
  <section class="row">
    <div class="col-xs-4 col-sm-3 col-md-2"><img src="images/t1.jpg" alt="Tigre"></div>
    <div class="col-xs-4 col-sm-3 col-md-2"><img src="images/t2.jpg" alt="Tigre"></div>
    <div class="col-xs-4 col-sm-3 col-md-2"><img src="images/t3.jpg" alt="Tigre"></div>
    <div class="col-xs-4 col-sm-3 col-md-2"><img src="images/t4.jpg" alt="Tigre"></div>
    <div class="col-xs-4 col-sm-3 col-md-2"><img src="images/t5.jpg" alt="Tigre"></div>
    <div class="col-xs-4 col-sm-3 col-md-2"><img src="images/t6.jpg" alt="Tigre"></div>
    <div class="col-xs-4 col-sm-3 col-md-2"><img src="images/t7.jpg" alt="Tigre"></div>
    <div class="col-xs-4 col-sm-3 col-md-2"><img src="images/t8.jpg" alt="Tigre"></div>
    <div class="col-xs-4 col-sm-3 col-md-2"><img src="images/t9.jpg" alt="Tigre"></div>
    <div class="col-xs-4 col-sm-3 col-md-2"><img src="images/t10.jpg" alt="Tigre"></div>
    <div class="col-xs-4 col-sm-3 col-md-2"><img src="images/t11.jpg" alt="Tigre"></div>
    <div class="col-xs-4 col-sm-3 col-md-2"><img src="images/t12.jpg" alt="Tigre"></div>
  </section>
</div>

<!-- Clearfix -->

<div class="bg-info clearfix">
  <button class="btn btn-secondary float-left">Example Button floated left</button>
  <button class="btn btn-secondary float-right">Example Button floated right</button>
</div>

<div class="clearfix visible-sm-block"></div>

        <div class="hidden-xs col-md-2">
          <div class="row">
            <aside class="col-md-12">
              Aside
            </aside>
            <aside class="col-md-12">
              Aside
            </aside>
          </div>
        </div>

      </div>

      <div class="container">

      <div class="row">

        <nav class="col-md-12 col-lg-2">
            Navigation
        </nav>

        <section class="col-md-6 col-lg-5">
          Section
        </section>
        <section class="col-md-6 col-lg-5">
          Section
        </section>
      </div>

      <section class="col-sm-4 table-responsive">
      <table class="table table-bordered table-striped table-condensed">
      <caption>
      <h4>Les menaces pour les tigres</h4>
      </caption>
      <thead>
        <tr>
          <th>Lieu</th>
          <th>Menace</th>
        </tr>
      </thead>
        <tbody>
          <tr class="success">
            <td>Grand Mekong</td>
            <td>Demande croissante de certaines parties de l’animal pour la médecine chinoise traditionnelle et 
    fragmentation des habitats du fait du développement non durable d’infrastructures</td>
          </tr>
          <tr class="danger">
            <td>Île de Sumatra</td>
            <td>Production d’huile de palme et de pâtes à papiers</td>
          </tr>
          <tr class="warning">
            <td>Indonésie et Malaisie</td>
            <td>Pâte à papier, l’huile de palme et le caoutchouc</td>
          </tr>
          <tr class="active">
            <td>États-Unis</td>
            <td>Les tigres captifs représentent un danger pour les tigres sauvages</td>
          </tr>
          <tr class="success">
            <td>Europe</td>
            <td>Gros appétit pour l’huile de palme</td>
          </tr>
          <tr class="danger">
            <td>Népal</td>
            <td>Commerce illégal de produits dérivés de tigres</td>
          </tr>
        </tbody>
    </table>
    </section> 

    <!-- Formulaire -->
    <section col-md-8>
    <div class="row">
        <section class="col-sm-8">
          <form class="well">
            <legend>Si vous voulez me laisser un message</legend>
            <h4>Comment m'avez-vous trouvé ?</h4>
            <fieldset>
              <div class="radio">
                <label for="ami" class="radio">
                  <input type="radio" name="origine" value="ami" id="ami">
                  Par un ami 
                </label>
              </div>
              <div class="radio">
                <label for="web" class="radio">
                  <input type="radio" name="origine" value="web" id="web">
                  Sur le web 
                </label>
              </div>
              <div class="radio">
                <label for="hasard" class="radio">
                  <input type="radio" name="origine" value="hasard" id="hasard">
                  Par hasard 
                </label>
              </div>
              <div class="radio">
                <label for="autre" class="radio">
                  <input type="radio" name="origine" value="autre" id="autre">
                  Autre... 
                </label>
              </div>
              <label for="textarea">Votre message :</label>
                <textarea id="textarea" class="form-control" rows="4"></textarea>
                <p class="help-block">Vous pouvez agrandir la fenêtre</p>
              <button class="btn btn-primary" type="submit">Envoyer</button>
            </fieldset>
          </form>
        </section>
        <section class="col-sm-4">
          <address>
          <p>Vous pouvez me contacter à cette adresse :</p>
          <strong>Tigrou Alfred</strong><br>
            Allée des fauves<br>
            28645 Félins-sur-Loire<br>
          </address>
        </section>
      </div>
    </div>
    </section>
    <!-- Formulaire horyzontal -->
    <form class="form-horizontal col-lg-6">
  <div class="form-group">
    <legend>Légende</legend>
  </div>
  <div class="row">
    <div class="form-group">
      <label for="text" class="col-lg-2 control-label">Text : </label>
      <div class="col-lg-10">
        <input type="text" class="form-control" id="text">
      </div>
    </div>
  </div>
  <div class="row">
    <div class="form-group">
      <label for="textarea" class="col-lg-2 control-label">Textarea : </label>
      <div class="col-lg-10">
        <input type="textarea" class="form-control" id="textarea">
      </div>
    </div>
  </div>
  <div class="row">
    <div class="form-group">
    <label for="select" class="col-lg-2 control-label">Select: </label>
      <div class="col-lg-10">
        <select id="select" class="form-control" >
          <option>Option 1</option>
          <option>Option 2</option>
          <option>Option 3</option>
        </select>
      </div>
    </div>
  </div>
  <div class="form-group">
    <button class="pull-right btn btn-default">Envoyer</button>
  </div>
</form>

<!-- Formulaire en ligne -->
<form class="form-inline">
<div class="form-group">
  <label class="sr-only" for="text">Texte</label>
  <input type="text" class="form-control" id="text" placeholder="un texte ici">
</div>
<div class="form-group">
<div class="checkbox">
  <label>
    <input type="checkbox"> Se rappeler de moi...
  </label>
</div>
<button type="submit" class="btn btn-default">Envoyer</button>
</form>

<!-- Les classes input-group, input-group-addon et input-group-btn à l’œuvre

Accoler une information à un contrôle

Les classesinput-group etinput-group-addon servent à accoler une information à un contrôle de formulaire :-->
      
<form class="form-inline">
  <div class="form-group">
    <div class="input-group"> 
      <span class="input-group-addon">€</span>
      <input type="text" class="form-control" value="100">
    </div>
  </div>
  <div class="form-group">
    <div class="input-group">
      <input type="text" class="form-control" style="text-align:right" value="100,50">
      <span class="input-group-addon">€</span> 
    </div>
  </div>
</form>

<!--  On peut aussi les utiliser conjointement pour accoler devant et derrière : -->

<form class="form-inline">
  <div class="input-group"> 
    <span class="input-group-addon">€</span>
    <input type="text" class="form-control" style="text-align:right" value="100">
    <span class="input-group-addon">.00</span> 
  </div>
</form>
<!-- Avec bouton conjointement -->

<form class="form-inline">
  <div class="input-group col-lg-4">   
    <input type="text" class="form-control" style="text-align:right" value="10 000">
    <span class="input-group-btn">
      <button class="btn btn-default" type="button">Valider</button>
      <button class="btn btn-default" type="button">Annuler</button>
    </span>
  </div>
</form>

<!-- Accoler une case à cocher ou un bouton radio à un contrôle  -->

<div class="input-group">   
  <div class="form-group">
    <div class="input-group">
      <span class="input-group-addon">
        <input type="checkbox">
      </span>
      <input type="text" class="form-control">
    </div>
  </div>
  <div class="form-group">
    <div class="input-group">
      <span class="input-group-addon">
        <input type="radio">
      </span>
      <input type="text" class="form-control">
    </div>
  </div>
</div>

<!-- Dimension  -->

<div class="col-lg-3">
  <input type="text" class="form-control input-sm" value="Petit">
  <input type="text" class="form-control" value="Normal">
  <input type="text" class="form-control input-lg" value="Grand">
</div>
<!-- Stylisé zone de saisie selon l'état -->

<form class="col-lg-5">
  <fieldset>
    <legend>Validation, erreur et succès</legend>
    <div class="form-group has-error">
      <label class="control-label" for="idError">Erreur</label>
      <input type="text" class="form-control" id="idError">
      <span class="help-block">Corrigez l'erreur s'il vous plait</span>
    </div>
    <div class="form-group has-warning">
      <label class="control-label" for="idWarning">Avertissement</label>
      <input type="text" class="form-control" id="idWarning">
      <span class="help-block">Il y a un problème dans la saisie</span>
    </div>
    <div class="form-group has-success">
      <label class="control-label" for="idSuccess">Réussite</label>
      <input type="text" class="form-control" id="idSuccess">
      <span class="help-block">Saisie correcte</span>
    </div>
  </fieldset>
</form>

<!-- Ajoute icone Remarquez l'ajout des classeshas-feedback etform-control-feedback pour que l'icône soit bien intégrée dans le contrôle. Ce qui nous donne la figure suivante. -->
<form class="col-lg-5">
  <fieldset>
    <legend>Validation, erreur et succès</legend>
    <div class="form-group has-error has-feedback">
      <label class="control-label" for="idError">Erreur</label>
      <input type="text" class="form-control" id="idError">
      <span class="glyphicon glyphicon-remove form-control-feedback"></span>
      <span class="help-block">Corrigez l'erreur s'il vous plait</span>
    </div>
    <div class="form-group has-warning has-feedback">
      <label class="control-label" for="idWarning">Avertissement</label>
      <input type="text" class="form-control" id="idWarning">
      <span class="glyphicon glyphicon-warning-sign form-control-feedback"></span>
      <span class="help-block">Il y a un problème dans la saisie</span>
    </div>
    <div class="form-group has-success has-feedback">
      <label class="control-label" for="idSuccess">Réussite</label>
      <input type="text" class="form-control" id="idSuccess">
      <span class="glyphicon glyphicon-ok form-control-feedback"></span>
      <span class="help-block">Saisie correcte</span>
    </div>
  </fieldset>
</form>

<!-- Formulaire  -->
<div class="col-lg-4">
  <form class="form-inline well">
    <div class="form-group">
      <label class="sr-only" for="text">Saisie</label>
      <input id="text" type="text" class="form-control" placeholder="Texte ici">
    </div>
    <button type="submit" class="btn btn-primary pull-right">Envoyer</button>
    <div class="alert alert-block alert-danger" style="display:none">
      <h4>Erreur !</h4>
      Vous devez entrer au moins 4 caractères ! 
    </div>
  </form>
</div>
<script src="assets/js/jquery.js"></script> 
<script>
  $(function(){
    $("form").on("submit", function() {
      if($("input").val().length < 4) {
        $("div.form-group").addClass("has-error");
        $("div.alert").show("slow").delay(4000).hide("slow");
        return false;
      }
    });
  });
</script>

<!-- Type de bouton -->
<button type="button" class="btn btn-primary">Bouton standard</button>
<button type="button" class="btn btn-success">Réussite</button>
<button type="button" class="btn btn-info">Information</button>
<button type="button" class="btn btn-warning">Avertissement</button>
<button type="button" class="btn btn-danger">Danger</button>
<button type="button" class="btn btn-link">Lien</button>


<!-- Dimension des bouton-->

<button type="button" class="btn btn-primary btn-lg">Bouton gros</button>
<button type="button" class="btn btn-primary">Bouton standard</button>
<button type="button" class="btn btn-primary btn-sm">Bouton petit</button>
<button type="button" class="btn btn-primary btn-xs">Bouton très petit</button>

<!-- Bouton block -->

<div class="row">
  <div class="col-sm-3">
    <button type="button" class="btn btn-primary btn-block">Bouton "block"</button>
  </div>
  <div class="col-sm-6">
    <button type="button" class="btn btn-success btn-block">Bouton "block"</button>
  </div>
  <div class="col-sm-3">
    <button type="button" class="btn btn-danger btn-block">Bouton "block"</button>
  </div>
</div>

<!-- Grouper les bouton -->
<div class="row">
  <div class="col-lg-2">
    <div class="btn-group">
        <a class="btn btn-danger" href="#">1</a>
        <a class="btn btn-info" href="#">2</a>
        <a class="btn btn-warning" href="#">3</a>
    </div>
  </div>
  <div class="col-lg-1">
    <div class="btn-group-vertical">
        <a class="btn btn-danger" href="#">4</a>
        <a class="btn btn-info" href="#">5</a>
        <a class="btn btn-warning" href="#">6</a>
    </div>
  </div>
</div>
<!-- Bouton btn-toolbar complexe -->
<div class="btn-toolbar">
  <div class="btn-group">
      <a class="btn btn-danger" href="#">1</a>
      <a class="btn btn-info" href="#">2</a>
      <a class="btn btn-warning" href="#">3</a>
  </div>
  <div class="btn-group">
      <a class="btn btn-danger" href="#">4</a>
      <a class="btn btn-info" href="#">5</a>
      <a class="btn btn-warning" href="#">6</a>
  </div>
</div>

<!-- Redimensioner group de bouton -->
<div class="row">
  <div class="col-lg-1">
    <div class="btn-group-vertical btn-group-lg">
        <a class="btn btn-danger" href="#">4</a>
        <a class="btn btn-info" href="#">5</a>
        <a class="btn btn-warning" href="#">6</a>
    </div>
  </div>
  <div class="col-lg-1">
    <div class="btn-group-vertical">
        <a class="btn btn-danger" href="#">4</a>
        <a class="btn btn-info" href="#">5</a>
        <a class="btn btn-warning" href="#">6</a>
    </div>
  </div>
  <div class="col-lg-1">
    <div class="btn-group-vertical btn-group-sm">
        <a class="btn btn-danger" href="#">4</a>
        <a class="btn btn-info" href="#">5</a>
        <a class="btn btn-warning" href="#">6</a>
    </div>
  </div>
  <div class="col-lg-1">
    <div class="btn-group-vertical btn-group-xs">
        <a class="btn btn-danger" href="#">4</a>
        <a class="btn btn-info" href="#">5</a>
        <a class="btn btn-warning" href="#">6</a>
    </div>
  </div>
</div>
<!-- Boutons justifiés -->
<div class="col-lg-6">
  <div class="btn-group btn-group-justified">
      <a class="btn btn-danger" href="#">1</a>
      <a class="btn btn-info" href="#">2</a>
      <a class="btn btn-warning" href="#">3</a>
  </div>
</div>
<!-- Redimention -->
<p><i class="fa fa-print fa-lg"></i> Taille normale</p>
<p><i class="fa fa-print fa-2x"></i> Taille double</p>
<p><i class="fa fa-print fa-3x"></i> Taille triple</p>
<p><i class="fa fa-print fa-4x"></i> Taille quadruple</p>
<p><i class="fa fa-print fa-5x"></i> Taille quintuple</p>

<!-- Icone -->
Il faut déverrouiller <i class="fa fa-unlock"></i> pour sortir <i class="fa fa-arrow-right"></i>

<!-- Button bulle -->
<button class="btn btn-primary btn-lg"><span class="glyphicon glyphicon-user"></span></button>
<button class="btn btn-warning btn-lg"><span class="glyphicon glyphicon-comment"></span></button>
<button class="btn btn-success btn-lg"><span class="glyphicon glyphicon-calendar"></span></button>
<button class="btn btn-danger btn-lg"><span class="glyphicon glyphicon-shopping-cart"></button>
<button class="btn btn-info btn-lg"><span class="glyphicon glyphicon-bullhorn"></span></button>

<!-- Button icon separer du text -->
<button class="btn btn-primary btn-lg"><span class="glyphicon glyphicon-user"></span><br>Utilisateurs</button>
<button class="btn btn-warning btn-lg"><span class="glyphicon glyphicon-comment"></span><br>Commentaires</button>
<button class="btn btn-success btn-lg"><span class="glyphicon glyphicon-calendar"></span><br>Evénements</button>
<button class="btn btn-danger btn-lg"><span class="glyphicon glyphicon-shopping-cart"></span><br>Boutique</button>
<button class="btn btn-info btn-lg"><span class="glyphicon glyphicon-bullhorn"></span><br>Messages</button>

<!-- Button envoyer + icone -->
<button class="btn btn-primary" type="submit"><span class="glyphicon glyphicon-ok-sign" style="color:#4f4;"></span> Envoyer</button>

<!-- Button icone  -->
<div class="container">
  <div class="row" >
    <div class="col-lg-3">
      <div class="btn-group">
          <a class="btn btn-danger" href="#"><span class="glyphicon glyphicon-fast-backward"></span>&nbsp;</a>
          <a class="btn btn-info" href="#"><span class="glyphicon glyphicon-backward"></span>&nbsp;</a>
          <a class="btn btn-warning" href="#"><span class="glyphicon glyphicon-play"></span>&nbsp;</a>
          <a class="btn btn-info" href="#"><span class="glyphicon glyphicon-forward"></span>&nbsp;</a>
          <a class="btn btn-danger" href="#"><span class="glyphicon glyphicon-fast-forward"></span>&nbsp;</a>
      </div>
    </div>
    <div class="col-lg-1">
      <div class="btn-group-vertical">
          <a class="btn btn-danger" href="#"><span class="glyphicon glyphicon-pencil"></span>&nbsp;</a>
          <a class="btn btn-info" href="#"><span class="glyphicon glyphicon-search"></span>&nbsp;</a>
          <a class="btn btn-warning" href="#"><span class="glyphicon glyphicon-print"></span>&nbsp;</a>
          <a class="btn btn-success" href="#"><span class="glyphicon glyphicon-picture"></span>&nbsp;</a>
      </div>
    </div>
  </div>
</div>

<!-- list element identifié avec icone -->
<ul class="fa-ul">
  <li><i class="fa-li fa fa-check-square"></i>Vérifier</li>
  <li><i class="fa-li fa fa-paperclip"></i>Conserver</li>
  <li><i class="fa-li fa fa-eraser"></i>Effacer</li>
  <li><i class="fa-li fa fa-print"></i>Imprimer</li>
</ul>

<!--  Image form-->
<div class="container">
  <div class="col-lg-2"> 
      <img src="images/t1.jpg" class="img-rounded">
  </div>
 <div class="col-lg-2"> 
      <img src="images/t2.jpg" class="img-circle">
  </div>
 <div class="col-lg-2"> 
      <img src="images/t3.jpg" class="img-thumbnail">
  </div>
</div>

<!--  -->
<footer class="row">
        <div class="col-lg-12">
          Pied de page
        </div>
      </footer>  
    </div>

</body>
</html>