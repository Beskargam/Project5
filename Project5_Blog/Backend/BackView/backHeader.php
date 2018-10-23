<?php ob_start(); ?>
    <header>
        <div class="row top-head">
            <h1>Zone d'Administration</h1>
        </div>
    </header>
    <nav class="navbar navbar-expand-md justify-content-center">
        <div class="row">
            <ul class="navbar-nav mr-auto>
                <li class="nav-item"><a class="nav-link" href="backIndex.php?action=home">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="BackModel\backLogout.php">Déconnexion</a></li>
            </ul>
        </div>
    </nav>
<?php $header = ob_get_clean();
