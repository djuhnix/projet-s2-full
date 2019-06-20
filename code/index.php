<?php
require_once("assets/php/autoload.php");
$page = new WebPage("Acceuil", true);
$page -> appendJsUrl(["assets/js/lancement.js"]);
$page -> appendCssUrl("assets/css/style.css");
$page -> appendContent(<<<HTML

        <header class="subtitle text-center text-light">
                <h1 id="title" class="py-2">  Angel's Quest </h1>
                <h4 >
                    Appuyez sur <span> <img src="assets/icon/enter-icon.png"> </span> pour commencer
                </h4>
        </header>
        <div class="mx-auto p-2" style="width: 800px">
            <canvas id="main">

            </canvas>
        </div>
            <footer class="subtitle text-light text-center">
                © The Bzit - IUT - INFO - URCA - 2019
            </footer>

HTML
);

echo $page -> toHTML();
