<?php
if (!isset($_SESSION)) {
    session_start();
}

ob_start(); ?>
    <footer>
        <div>
            <hr>
            <a href="backIndex.php">Home</a>
        </div>
    </footer>
<?php $footer = ob_get_clean();