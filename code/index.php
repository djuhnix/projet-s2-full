<?php
require_once("assets/php/autoload.php");
$page = new WebPage("Acceuil", true);
$page -> appendJsUrl(["assets/js/lancement.js","assets/js/map_n.js"]);
$page -> appendCssUrl("assets/css/style.css");
$page -> appendContent(<<<HTML

        <header class="text-center text-light">
                <h1 id="title" class="py-2">  Angel's Quest </h1>
                <h4 class="subtitle">
                    Appuyez sur <span> <img id="enter" alt="bouton entrer" src="assets/icon/enter-icon.png"> </span> pour commencer
                </h4>
        </header>
        <div class="mx-auto" style="width: 512px; height: auto">
            <canvas id="main" width="512" height="512">

            </canvas>
        </div>
            <footer class="subtitle text-light text-center">
                © The Bzit and DRSM - IUT - INFO - URCA - 2019
            </footer>

HTML
);

echo $page -> toHTML();
