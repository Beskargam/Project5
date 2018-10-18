<?php

ob_start(); ?>
    <nav class="navbar navbar-expand-md justify-content-center">
        <div class="row">
            <a class="navbar-brand" href="index.php?action=home"><img src="Public/Images/logo.png" width="107"
                                                                      height="50" alt=""></a>

            <button class="navbar-toggler custom-toggler collapsed" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                <span class="toggler-color"><span class="oi oi-menu"></span></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item"><a class="nav-link" href="index.php?action=home">HOME</a></li>
                    <li class="nav-item"><a class="nav-link" href="index.php?action=newsList">COMM-LINK</a></li>
                    <li class="nav-item"><a class="nav-link" href="index.php?action=contact">CONTACTS</a></li>
                    <li class="nav-item"><a class="nav-link" href="Public/Files/WomenAtWork.pdf">CV (PDF)</a></li>
                </ul>
            </div>
        </div>
    </nav>
<?php $navigation = ob_get_clean();
