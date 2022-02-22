<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item">
            <a class="nav-link" href="index.php?route=home">Accueil</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="index.php?route=liste">Articles</a>
            </li>

            <?php if (!empty($_SESSION['identifiant']) && $_SESSION['identifiant'] == 'admin') : ?>
            <li class="nav-item">
            <a class="nav-link" href="index.php?route=ajout">Ajouter un article</a>
            </li>
            <?php endif; ?>

            <?php if (empty($_SESSION['identifiant'])) : ?>
            <li class="nav-item">
            <a class="nav-link" href="index.php?route=connexion">Connexion</a>
            </li>
            <?php else : ?>
            <li class="nav-item">
                <a class="nav-link" href="index.php?route=deconnexion">Déconnexion</a>
            </li>
            <?php endif; ?>

        </ul>
        </div>
    </div>
</nav>
