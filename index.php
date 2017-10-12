<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src="https://unpkg.com/scrollreveal/dist/scrollreveal.min.js"></script>
    <script src="assets/js/smoothscroll.js"></script>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/intro.css">
    <link rel="stylesheet" href="assets/css/perso.css">
    <link rel="stylesheet" href="assets/css/skills.css">
    <link rel="stylesheet" href="assets/css/barres.css">
    <link rel="stylesheet" href="assets/css/formations.css">
    <link rel="stylesheet" href="assets/css/experiences.css">
    <link rel="stylesheet" href="assets/css/hobbies.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <title>CV Pierre Schuvey</title>
  </head>
  <body>
    <script src="assets/js/konami.js"></script>
    <header>
      <div id="Navigation">
        <a href="contact.php"  onclick="open('contact.php', 'Popup', 'scrollbars=1,resizable=1,height=560,width=770'); return false;" ><span><img src="assets/img/contact.jpg" class="contacton"/></span></a>
        <a href="#intro"><img src="assets/img/top.jpg" class="top"/></a>
        <ul>
          <div id="lienancre">
            <strong><li><a href="#ancrageperso">Présentation</a></li></strong>
            <strong><li><a href="#ancrageskills">Compétences</a></li></strong>
            <strong><li><a href="#ancrageformation">Formations</a></li></strong>
            <strong><li><a href="#ancragexp">Experiences</a></li></strong>
            <strong><li><a href="#ancragehob">Hobbies</a></li></strong>
            <audio src="assets/mp3/8bitsOver.mp3" id="sonover"></audio>
            <audio src="assets/mp3/8bitsClick.mp3" id="sonclick"></audio>
            <script src="assets/js/soundover.js"></script>
            <script src="assets/js/sounclick.js"></script>
          </div>
        </ul>
      </div>
    </header>
    <?php include'intro.php' ?>
    <?php include'perso.php' ?>
    <?php include'skills.php' ?>
    <?php include'formations.php' ?>
    <?php include'Experiences.php' ?>
    <?php include'hobbies.php' ?>
    <footer>
      <div id="End">
          <strong>Pour me contacter : </strong>
          <div id="coordonées">
            <p>pierre.schuveye2n@gmail.com</p>
            <p>06.76.71.61.37</p>
            <p>18 rue André Ternynck 02300 CHauny</p>
          </div>
          <div id="SocialNetwork">
            <p>Me rejoindre</p>
            <i class="fa fa-facebook-square fa-2x" aria-hidden="true"></i>
            <i class="fa fa-twitter-square fa-2x" aria-hidden="true"></i>
            <i class="fa fa-instagram fa-2x" aria-hidden="true"></i>
          </div>
            <p align="center" id="copyright">&#169 2017-Pierre Schuvey tous droit réservés</p>
      </div>
    </footer>
    <script src="assets/js/sr.js"></script>
  </body>
</html>
