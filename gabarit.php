<!doctype html>
<html lang="fr">
  <head>
    <meta charset="UTF-8" />
    <link rel="stylesheet" href="style.css" />
    <title><?= $titre ?></title> <!-- Élément spécifique -->
  </head>
  <body>
    <div id="global">
      <header>
        <nav class="navbar">
    <div class="nav-logo">
        <a href="index.php">Mon Blog</a>
    </div>

    <ul class="nav-links">
        <li><a href="index.php">Accueil</a></li>
        <li><a href="#">Articles</a></li>
        <li><a href="#">À propos</a></li>
        <li><a href="#">Contact</a></li>
    </ul>

    <div class="nav-toggle" id="nav-toggle">
        ☰
    </div>
</nav>

<div class="hero">
    <img src="images/banner.jpg" alt="Bannière du blog">
</div>

<p>Je vous souhaite la bienvenue sur ce modeste blog.</p>
      </header>
      <div id="contenu">
          <?= $contenu ?> <!-- Élément spécifique -->
      </div>
      <footer id="piedBlog"> Blog réalisé avec PHP, HTML5 et CSS. </footer>
    </div> <!-- #global -->

    <script>
document.getElementById('nav-toggle').onclick = function() {
    document.querySelector('.nav-links').classList.toggle('active');
};
</script>

  </body>
</html>