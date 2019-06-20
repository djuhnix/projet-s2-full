# Globalement - Faire un RPG web

Pour faire un jeu en HTML5 il faut utiliser la
balise HTML canvas, pilotable en Javascript. C'est via cette balise que toute
la partie graphique du jeu est gérée. (Certains jeux utilisent l'API WEBGL pour
le 2D mais ce n'est pas conseillé pour un débutant si on n'utilise pas de
librairie ou de framework).

Il y a des algorithmes et implémentations très
différentes en fonction des jeux, mais basiquement on utilise :

Des **Spritesheets** pour l'animation des
différents personnages (Grande image contenant tout les mouvements d'un objet
animé, dont on dessine partie par partie pour animer l'objet).

Les **tilesets** (même principe que les
spritesheets, sauf que ce sont les briques élementaires qui forment une map ou
un niveau), on utilise *une matrice de donnée en deux dimension* (des
tableaux javascripts imbriqués) pour former les maps à partir de l'image du
tilesets. On peux faire plusieurs couches, même faire des tiles animés.

La **physique**, on utilise généralement
l'algorithme de collision AABB quand la géométrie du jeu est basique, même si
d'autres techniques existent (ce tutoriel détaille très bien [https://openclassrooms.com/fr/courses/1374826-theorie-des-collisions](https://openclassrooms.com/fr/courses/1374826-theorie-des-collisions)).
Pour la physique des sauts ou projectiles, on utilise de la dynamique basique
et simplifiée, révisez vos cours de Sciences Physiques !

Pour ce qui est de la programmation concrète,
il est très important de précharger tout les fichiers du jeu avant de lancer la
boucle d'animation. Pour cela, on peux utiliser des requêtes AJAX. Dès que
l'ensemble des données est chargé, on lance la boucle d'animation. Si on ne
fait pas ça, des gros bugs liés à la définition des variables et aux
chargements des objets en mémoire peuvent apparaître.

Pour la boucle d'animation, un algorithme
couramment et la boucle utilisant la différence de temps 𝚫Time. Cela permet d'avoir un jeu dont la vitesse n'est pas dépendante de
la puissance de la machine (des FPS autrement dis des images par secondes) mais
bien du temps réel. Avec un tel algorithme, si la machine ne suit pas, la
fluidité des animations est diminuée mais la vitesse du jeu n'est pas
anormalement ralentie.

Voilà un article parlant bien de ça :
[DeltaTime et indépendance du framerate cadence d'image](https://www.scirra.com/tutorials/67/delta-time-et-indpendance-du-framerate-cadence-dimages/fr)

 

Si vous avez l'ambition de créer un jeu
multijoueur, une solution intéressante sont les websockets. (utilisables
facilement avec NodeJS si vous êtes familier au javascript mais on peux les
utiliser avec toute autre solution backend.)

 

#### Pour le choix des solutions:

Créer un jeu HTML5 n'est pas une mince affaire
quand on part de zéro. Beaucoup de choses à gérer (l'affichage, le temps, le
son , les animations, les sauvegardes, l'optimisation, les évènements, la
physique, etc..).

Je vous préviens car j'ai essayé: c'est **chronophage** et **difficile** si on manque d'expérience.

Si votre but est de progresser en
programmation et la programmation de jeu 2D à partir de zéro vous intéresse, je
vous conseille de partir de zéro. C'est très très très formateur.

 

#### MAIS ATTENTION :

Si vous souhaitez uniquement programmer un jeu
, sans vous occuper de la partie la plus délicate et difficile (comme dis plus
haut, affichage, son, temps, etc), Il tombe sous le sens d'utiliser un
FRAMEWORK ou une LIBRAIRIE.

Ce sont des bout de code, gratuit ou non ,
vous permettant une API bien documentée et efficace pour programmer votre jeu
et se concentrer uniquement sur celui-ci . C'est l'idéal pour commencer et il y
en a une flopée.
- PhaserJS (surement le plus populaire)
- ImpactJS
- PixiJS
- melonJS
- KiwiJS

Certes, vous développerez moins votre jeu sous
l'aspect mathématique du terme. Mais vous gagnerez un temps fou et les
possibilités sont très très larges. la plupart de ces moteurs sont maintenant
très très puissant et vous permettront de faire à peu près tout. Bon courage !
;)

 

Tiré de : [Forum OpenClassRoom](https://openclassrooms.com/forum/sujet/big-tuto-creer-un-rpg-avec-html5?page=10)