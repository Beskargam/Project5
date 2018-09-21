<?php
if (!isset($_SESSION)) {
    session_start();
}

ob_start(); ?>
    <footer>
        <div>
            <hr>
            <a href="https://www.facebook.com/arcturus.morea.3">Facebook</a><br>
            <a href="https://twitter.com/ArcturusMorea?lang=fr">Twitter</a><br>
            <a href="index.php?action=home">Administration</a>
        </div>
    </footer>
<?php $footer = ob_get_clean();