<?php
/**
 * Created by PhpStorm.
 * User: olea0001
 * Date: 03/05/19
 * Time: 09:39
 */

declare(strict_types = 1) ;

/**
 * Classe WebPage permettant de ne plus écrire l'enrobage HTML lors de la création d'une page Web
 */
class WebPage
{
    private $head;
    private $title;
    private $body;

    /**
     * WebPage constructor.
     * @param string $title Titre de la page
     */
    public function __construct(string $title = null)
    {
        $this -> title = $title;
        $this -> head = "";
        $this -> body = "";
    }

    /**
     * Accesseur a l'attribut d'instance body de l'objet.
     *
     * @return string Retourne le contenu de l'attribut $body
     */
    public function body() : string
    {
        return $this -> body;
    }
    /**
     * Accesseur a l'attribut d'instance head de l'objet.
     *
     * @return string Retourne le contenu de l'attribut $head
     */
    public function head() : string
    {
        return $this -> head;
    }

    /**
     * Affecter le titre de la page.
     *
     * @param string $title Le titre
     */
    public function setTitle(string $title) : void
    {
        $this -> title = $title;
    }

    /**
     * Ajouter un contenu dans l'attribut $head
     * @param string $content Le contenu à ajouter
     * @return void
     */
    public function appendToHead(string $content) : void
    {
        $this -> head .= $content;
    }

    /**
     * Ajouter un contenu CSS dans le head
     * @param string $css Le contenu CSS à ajouter
     * @return void
     */
    public function appendCss (string $css) : void
    {
        $this -> head .=<<<HTML

        <style>
            $css
        </style>
HTML;
    }

    /**
     * Ajouter l'URL d'un script CSS dans head
     * @param string $url Le contenu CSS à ajouter
     * @return void
     */
    public function appendCssUrl (string $url) : void
    {
        $this -> head .=<<<HTML

        <link rel = "stylesheet" type="text/css"  href = "$url">

HTML;

    }

    /**
     * Ajouter un contenu JavaScript dans head
     * @param string $js Le contenu JavaScript à ajouter
     */
    public function appendJs (string $js) : void
    {
        $this -> body .=<<<HTML

        <script>
            $js
        </script>

HTML;
    }

    /**
     * Ajouter l'URL d'un script JavaScript dans head
     * @param string $url l'URL du script JavaScript
     * @return void
     */
    public function appendJsUrl (string $url) : void
    {
        $this -> head .=<<<HTML
        <script type="text/javascript" src="$url"> </script>
HTML;
    }

    /**
     *  Ajouter un contenu dans body
     * @param string $content Le contenu à ajouter
     * @return void
     */
    public function appendContent(string $content) : void
    {
        $this -> body .= $content;

    }

    /**
     * Génère la page HTML finale
     * @return string
     */
    public function toHTML() : string
    {
        $html = <<<HTML
<!DOCTYPE html>
<html>
    <head>
            <title> {$this -> title} </title>
            <meta charset="utf-8">
            {$this -> head}
    </head>

    <body>
        {$this -> body}
    </body>
</html>
HTML;
        return $html;
    }

    /**
     * Donner la date et l'heure de la dernière modification du script principal
     * @return string
     */
    public function getLastModification() : string
    {
        setlocale(LC_TIME, "fr_FR");
        $mod = strftime("%a %d %b %Y à %T", getlastmod());
        return "Dernière modification : " . $mod;
    }

    /**
     * Donner la date et l'heure de la dernière modification du script principal
     * @param string $string La chaîne à protéger
     * @return string La chaîne protégée
     */
    public function escapeString(string $string) : string
    {
        return htmlentities($string, ENT_QUOTES|ENT_HTML5);
    }

    public function setBootstrap() : void
    {
        $this -> head .= <<<HTML

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
HTML;
    }


}
