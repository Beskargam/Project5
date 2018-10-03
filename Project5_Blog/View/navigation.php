<?php

ob_start(); ?>
    <navigation>
        <div>
            <a href="index.php?action=home">Home</a><br>
            <a href="index.php?action=contact">Nous contacter</a><br>
            <a href="Public/Files/WomenAtWork.pdf" download="Public/Files/WomenAtWork.pdf">Télécharger le CV (PDF)</a><br>
            <a href="https://www.facebook.com/arcturus.morea.3">Facebook</a><br>
            <a href="https://twitter.com/ArcturusMorea?lang=fr">Twitter</a>
        </div>
    </navigation>
<?php $navigation = ob_get_clean();