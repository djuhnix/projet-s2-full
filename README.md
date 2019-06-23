#### Angel's Quest

### Sommaire

1. [Pré-requis](#requirments)
2. [Installation](#installation)
3. [Executer en local](#runningindevelopmentenvironment)
4. [Liens](#link)

<a name="requirements"></a>
### Pré-requis pour l'instalation sous Linux.
- serveur Apache
- PHP 5
- Git (optionnel)

<a name="installation"></a>
### Installation
- Mettre à jour votre système (recommandé)

        sudo apt update
        sudo apt upgrade
        sudo apt update

- Installer le serveur Web :

        sudo apt install apache2

- Gerstion des problème de droits d'acces : 
 
        sudo chown -R $USER:www-data /var/www/html/
        sudo chmod -R 770 /var/www/html/

- Installer PHP :

        sudo apt install php php-mbstring

- Cloner le projet :

        git clone https://iut-info.univ-reims.fr/gitlab/olea0001/projet-s2.git

-    


<a name="link"></a>
### Liens
- [Phaser - World-wrap](https://phaser.io/examples/v2/world/world-wrap)
- [Envoi d'objet JS vers PHP](https://forum.alsacreations.com/topic-5-27190-1-resolu-Envoi-dobjet-javascript-vers-PHP.html)
- [Effets Avancées CSS](https://openclassrooms.com/fr/courses/2745636-utilisez-les-effets-avances-de-css-sur-votre-site/3296573-les-multi-colonnes)
- [Simple Map generator HTML & PHP](https://www.dreamincode.net/forums/topic/258614-simple-rpg-map-generator/)
- [Square tilemaps implementation: Static maps](https://developer.mozilla.org/en-US/docs/Games/Techniques/Tilemaps/Square_tilemaps_implementation%3A_Static_maps)
- [Tilemaps](https://developer.mozilla.org/en-US/docs/Games/Techniques/Tilemaps)
- [Map no-scroll - source code](https://github.com/mozdevs/gamedev-js-tiles/blob/gh-pages/square/no-scroll.js)