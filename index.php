<?php
session_start();
 ?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Aurélien JAN | Développeur Autodidacte</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Raleway:200,100,400" rel="stylesheet" type="text/css" />
    <script src="script.js" defer></script>
    <link rel="stylesheet" href="style.css">

  </head>
  <body>
    <header>
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark" id="topBar">
  <a class="navbar-brand" href="#">Aurélien JAN</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="#recrutDiv">Pourquoi me recruter?</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#portraitDiv">Mon Portrait</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#competenceDiv">Mes Compétences</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#projectDiv">Mes Projets</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#formationDiv">Mes Formations</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Mon Parcours antérieur
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#schoolDiv">Mon Parcours Scolaire</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#profesionalDiv">Mon Parcours Profesionnel</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#contactDiv">Contact</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
        <a class="nav-link" id="cv" target="_blank" href="doc\CV.pdf">CV</a>
    </form>
  </div>
</nav>
    </header>

    <div id="recrutDiv">

      <h1>Pourquoi me recuter?</h1>

      <div class="rotateText">
      <p>Je suis  <span
     class="txt-rotate"
     data-period="2000"
     data-rotate='[ "créatif.", "curieux.", "déterminé.", "autodidacte.", "fun! ;)" ]'></span></p>
      </div>
    </div>

    <div id="portraitDiv">
      <h1>Mon Portrait</h1>
      <img src="img\portrait.png" alt="Portrait">
      <div id="caracteristiqueDiv">
        <ul>
          <li>Nom : JAN</li>
          <li>Prénom : Aurélien</li>
          <li>Age : 31ans</li>
          <li>Situation Familiale : En couple, 2 enfants</li>
          <li>Permis : B</li>
          <li>Hobbies : Impression 3D, Raspberry Pi, Hockey/Glace</li>
          <li>Caractère : Plutot calme et toujours de bonne humeur</li>
        </ul>
      </div>
    </div>



    <div id="competenceDiv">
      <h1>Mes compétences</h1>

      <div class="btn-toolbar mb-3" role="toolbar" aria-label="Toolbar with button groups" id="competenceBar">
        <div class="btn-group mr-2" role="group" aria-label="First group">
          <button type="button" class="btn btn-secondary btn-lg" id="frontEndButton">Front-End</button>
          <button type="button" class="btn btn-secondary btn-lg" id="backEndButton">Back-End</button>
          <button type="button" class="btn btn-secondary btn-lg" id="dataBaseButton">Base de Données</button>
          <button type="button" class="btn btn-secondary btn-lg" id="projectGestionButton">Gestion de Projet</button>
          <button type="button" class="btn btn-secondary btn-lg" id="autresButton">Autres</button>
        </div>
      </div>


      <div id="frontEndContent">
        <div class="content">
          <div class="rowContent">
            <figure>
              <img src="img\logo_html_css.png" alt="Logo HTML et CSS">
              <figcaption>HTML & CSS</figcaption>
            </figure>
            <figure>
              <img src="img\logo_bootstrap.png" alt="Logo Bootstrap">
              <figcaption>Bootstrap</figcaption>
            </figure>
          </div>

        <div class="rowContent">
          <figure>
            <img src="img\logo_js.png" alt="Logo JavaScript">
            <figcaption>Javascript</figcaption>
          </figure>
          <figure>
            <img src="img\logo_angular.png" alt="Logo Angular">
            <figcaption>Angular</figcaption>
          </figure>
        </div>
      </div>
      </div>


      <div id="backEndContent">
        <div class="content">
        <div class="rowContent">
          <figure>
            <img src="img\logo_java.png" alt="Logo Java">
            <figcaption>Java</figcaption>
          </figure>
          <figure>
            <img src="img\logo_spring.png" alt="Logo Spring">
            <figcaption>Spring</figcaption>
          </figure>
        </div>

        <div class="rowContent">
          <figure>
            <img src="img\logo_api_rest.png" alt="Logo API Rest">
            <figcaption>API Rest</figcaption>
          </figure>
          <figure>
            <img src="img\logo_spring_boot.png" alt="Logo Spring Boot">
            <figcaption>Spring Boot</figcaption>
          </figure>
        </div>
      </div>
    </div>


      <div id="dataBaseContent">
        <div class="content">
        <div class="rowContent">
          <figure>
            <img src="img\logo_mysql.png" alt="Logo MySQL">
            <figcaption>My SQL</figcaption>
          </figure>
          <figure>
            <img src="img\logo_postgres.png" alt="Logo PostgreSQL">
            <figcaption>PostgreSQL</figcaption>
          </figure>
        </div>
      </div>
    </div>


      <div id="projectGestionContent">
        <div class="content">
        <div class="rowContent">
          <figure>
            <img src="img\logo_agile.png" alt="Logo Agile">
            <figcaption>Méthodes Agiles</figcaption>
          </figure>
          <figure>
            <img src="img\logo_git.png" alt="Logo Git">
            <figcaption>Git</figcaption>
          </figure>
          </div>
      </div>
    </div>


      <div id="autresContent">
        <div class="content">
        <div class="rowContent">
          <figure>
            <img src="img\logo_docker.png" alt="Logo Docker">
            <figcaption>Docker</figcaption>
          </figure>
        </div>
      </div>
    </div>
  </div>


  <div id="projectDiv">
    <h1>Mes Projets</h1>
      <div class="formationCard">
        <div class="card bg-secondary" style="width: 18rem;">
          <img src="img\soleil.png" class="card-img-top" alt="Logo Appli Météo">
          <div class="card-body">
            <h5 class="card-title">Application Météo</h5>
            <p class="card-text">Application météo utilisant une API externe</br>
              Languages utilisés:
              <ul>
                <li>HTML</li>
                <li>CSS</li>
                <li>Javascript</li>
              </ul> </p>
              <a href="https://amazing-shockley-6332ff.netlify.app" class="btn btn-dark m-3" target="_blank">Accéder à l'appli</a>
              <a href="https://www.youtube.com/watch?v=wMjIzgVjVHw" class="btn btn-dark m-3" target="_blank">Démo (Youtube)</a>
              <a href="https://github.com/Aurelien35410/Application-Meteo" class="btn btn-dark m-3" target="_blank">Code source (Github)</a>
            </div>
          </div>
        </div>
</div>


  <div id="formationDiv">
    <h1>Mes Formations</h1>

    <div class="formationCard">

    <div class="card bg-secondary" style="width: 18rem;">
  <img src="img\logo_26academy.png" class="card-img-top" alt="Logo 26Academy">
  <div class="card-body">
    <h5 class="card-title">26 Academy</br>(Développeur Front-End)</h5>
    <p class="card-text">Thèmes étudiés:
      <ul>
      <li>UX/UI</li>
      <li>Bootstrap</li>
      <li>Javascript</li>
      <li>React JS</li>
      <li>Git</li>
    </ul></p>
    <a href="doc\Certificat_26Academy.pdf" target="_blank" class="btn btn-dark">Voir le diplôme</a>
  </div>
</div>

<div class="card bg-secondary" style="width: 18rem;">
<img src="img\logo_openclassroom.jpg" class="card-img-top" alt="Logo Zenika">
<div class="card-body">
<h5 class="card-title">Open Classrooms</h5>
<p class="card-text">Thèmes étudiés:</br>(cliquer sur les éléments pour accéder à la certification)
  <ul>
    <li><a href="doc\Apprenez à créer votre site web avec HTML5 et CSS3.pdf" target="_blank">HTML & CSS</a></li>
    <li><a href="doc\Apprenez à coder avec JavaScript.pdf">Javascript</a></li>
    <li><a href="doc\Prenez en main Bootstrap.pdf">Bootstrap</a></li>
    <li><a href="doc\Développez des applications Web avec Angular.pdf">Angular</a></li>
    <li><a href="doc\Débutez la programmation avec Java.pdf">Java</a></li>
    <li><a href="doc\Simplifiez le développement d'applications Java avec Spring.pdf">Spring</a></li>
    <li><a href="doc\Optimisez votre architecture Microservices.pdf">Springboot</a></li>
    <li><a href="doc\Administrez vos bases de données avec MySQL.pdf">MySQL</a></li>
    <li><a href="doc\Optimisez votre déploiement en créant des conteneurs avec Docker.pdf">Docker</a></li>
    <li><a href="doc\Adoptez les API REST pour vos projets web.pdf">API Rest</a></li>
    <li><a href="doc\Initiez-vous à la gestion de projet agile.pdf">Méthode Agile</a></li>
    <li><a href="doc\Gérez votre code avec Git et GitHub.pdf">Git</a></li>
    <li>...</li>
  </ul></p>
</div>
</div>

<div class="card bg-secondary" style="width: 18rem;">
<img src="img\logo_zenika.jpeg" class="card-img-top" alt="Logo Zenika">
<div class="card-body">
<h5 class="card-title">Zenika Academy</br>(Développeur Java)</h5>
<p class="card-text">Thèmes étudiés:
  <ul>
    <li>Java</li>
    <li>Spring</li>
    <li>Springboot</li>
    <li>PostgreSQL</li>
    <li>Angular</li>
    <li>Docker</li>
    <li>API Rest</li>
    <li>Méthode Agile</li>
    <li>Git</li>
  </ul></p>
</div>
</div>

</div>

  </div>

  <div id="parcoursDiv">
    <div id="schoolDiv">
      <h1>Parcours Scolaire</h1>
        <table class="bg-dark">
          <tr>
            <th width="20%">Année</th>
            <th>Diplôme</th>
            <th>Etablissement</th>
          </tr>
          <tr>
            <th>2005-2007</th>
            <th>BEP Electrotechnique</th>
            <th>Lycée La Champagne (Vitré)</th>
          </tr>
          <tr>
            <th>2007-2009</th>
            <th>Bac Pro Electrotechnique</th>
            <th>Lycée Coëtlogon (Rennes)</th>
          </tr>
          <tr>
            <th>2009-2011</th>
            <th>BTS Electrotechnique</th>
            <th>Lycée Joliot-Curie (Rennes)</th>
          </tr>
        </table>
    </div>

    <div id="profesionalDiv">
      <h1>Parcours Profesionnel</h1>
      <table class="bg-dark">
        <tr>
          <th width="20%">Année</th>
          <th>Entreprise</th>
          <th>Poste</th>
        </tr>
        <tr>
          <th>2008-2011</th>
          <th>Bridor</th>
          <th>Technicien de maintenance</th>
        </tr>
        <tr>
          <th>2011-2012</th>
          <th>Manpower</th>
          <th>Diverses missions d'interim en maintenance et câblage industriel</th>
        </tr>
        <tr>
          <th>2012-2015</th>
          <th>Sogetrel</th>
          <th>Technicien étude télécom</th>
        </tr>
        <tr>
          <th>2015-2019</th>
          <th>Axians</th>
          <th>Technicien étude télécom</th>
        </tr>
      </table>
    </div>


  </div>

<div id="alertDiv"></div>
<?php
if(array_key_exists('errors', $_SESSION)): ?>

  <div class="alert">
    <?= implode('<br>', $_SESSION['errors']); ?>
    <script type="text/javascript">alert("Le message n'a pas pu être envoyé car des champs n'ont pas été correctement remplis");</script>
  </div>

<?php endif; ?>
<?php
if(array_key_exists('success', $_SESSION)): ?>
  <script type="text/javascript">alert("Votre message a été envoyé avec succès!")</script>
<?php endif; ?>
  <div id="contactDiv">
      <h1>Contact</h1>
    <form action="formulaire.php" method="post">
      <div class="form-row">
        <div class="form-group col-md-3">
          <label for="nom">Nom</label>
          <input required type="text" class="form-control bg-secondary" name="nom" id="nom" value="<?= isset($_SESSION['inputs'] ['nom']) ? $_SESSION['inputs'] ['nom'] : ''; ?>">
        </div>
        <div class="form-group col-md-3">
          <label for="prenom">Prénom</label>
          <input required type="text" class="form-control bg-secondary" name="prenom" id="prenom" value="<?= isset($_SESSION['inputs'] ['prenom']) ? $_SESSION['inputs'] ['prenom'] : ''; ?>">
        </div>
      </div>
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="enterprise">Entreprise</label>
          <input required type="text" class="form-control bg-secondary" name="entreprise" id="enterprise" value="<?= isset($_SESSION['inputs'] ['entreprise']) ? $_SESSION['inputs'] ['entreprise'] : ''; ?>">
        </div>
      </div>
  <div class="form-row">
    <div class="form-group col-md-3">
      <label for="e-mail">Email</label>
      <input required type="email" class="form-control bg-secondary" name="e-mail" id="e-mail" value="<?= isset($_SESSION['inputs'] ['e-mail']) ? $_SESSION['inputs'] ['entreprise'] : ''; ?>">
    </div>
    <div class="form-group col-md-3">
      <label for="tel">Téléphone</label>
      <input required type="tel" class="form-control bg-secondary" name="tel" id="tel" value="<?= isset($_SESSION['inputs'] ['tel']) ? $_SESSION['inputs'] ['tel'] : ''; ?>">
    </div>
  </div>
<div class="form-row">
  <div class="form-group col-md-3">
    <label for="message">Message</label>
    <textarea name="message" rows="8" cols="80" class="bg-secondary" name="message" id="message"></textarea>
  </div>
</div>

  <div class="form-row">
    <div class="form-group col-md-3">
      <label for="antispam">2+2?</label>
      <input required type="number" class="form-control bg-secondary" name="antispam" id="antispam" value="<?= isset($_SESSION['inputs'] ['antispam']) ? $_SESSION['inputs'] ['antispam'] : ''; ?>">
    </div>
  </div>
  <button type="submit" class="btn btn-secondary">Envoyer</button>
</form>

  </div>

  <footer class="bg-secondary">
      <h1>Retrouvez moi sur:</h1>
      <div class="rowContent">
        <div id="footerIcon">
          <a href="tel:+33695607377"><img src="img\logo_telephone.png" alt="logo telephone"></a>
          <a href="mailto:jan.aurelien35@gmail.com"><img src="img\logo_mail_noir.png" alt="logo mail"></a>
          <a href="https://www.linkedin.com/in/jan-aurelien-911734133" target="_blank"><img src="img\logo_linkedin_noir.png" alt="logo linkedin"></a>
          <a href="https://github.com/Aurelien35410" target="_blank"><img src="img\logo_github.png" alt="logo github"></a>
          <a href="https://www.youtube.com/channel/UCY9Y2_jfGi98Vo4b1RnChBg" target="_blank"><img src="img\logo_youtube.png" alt="logo youtube"></a>
        </div>
      </div>
      <div id="coordonnéesDiv">
        <p>Aurélien JAN</br>
          06 95 60 73 77</br>
          jan.aurelien35@gmail.com</p>
      </div>
    </div>





    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

  </body>
</html>
