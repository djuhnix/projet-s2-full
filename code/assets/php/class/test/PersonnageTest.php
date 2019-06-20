<?php

require_once "../../autoload.php";

$etat = new EtatQuete(EtatQuete::EnCours);
/*
 * Test des Objets
 */
$reward = new Objet ("Epee","Une epee");
$object = new Objet("Herbe","de l'herbe");

echo ($reward -> getDescription())."\n";
echo ($reward -> getNom())."\n";

echo ($object -> getDescription())."\n";
echo ($object -> getNom())."\n";

#--------------------------------------------------------------------------------------------------

/*
 * Test du Joueur
 */

$player = new Joueur();

$player -> prendreObjet($reward);

var_dump($player);
$player -> seFaireAttaquer();
var_dump($player);

$player -> mourir();"\n";



#--------------------------------------------------------------------------------------------------
/*
 * Test de quête
 */
$quete = new Quete("Le quête","Un simple quete",$etat ,$reward,$object,1,50);

$quete -> afficherRecompense();
$quete -> prendreRecompense($player)."\n";
echo ($quete -> recupererExperience())."\n";


#--------------------------------------------------------------------------------------------------

/*
 * Test du Personnage Non Joueur
 */

$pnj = new PersonnageNonJoueur("Michel",$quete,False,"Bonjour");

#var_dump($reward);
#var_dump($object);
#var_dump($quete);
#var_dump($pnj);

echo ($pnj -> parler());

#--------------------------------------------------------------------------------------------------

/*
 * Test de l'equipement et ses classes filles
 */

$equipement = new Equipement("equipement","equip");

echo $equipement -> getNom()."\n";
var_dump($equipement);
# non fonctionnel
echo "\n";
$arme= new Arme("arme","une arme",2);
echo "Armes : ".$arme ->getNom()."\n".
    "Desc :".$arme -> getDescription()."\n".
    "Dégats : ".$arme -> getDegats()."\n";
echo "\n";
$shield = new Bouclier("Bouclier de feu", "enflammé",2);
echo "Bouclier:".$shield ->getNom()."\n".
    "Desc :".$shield -> getDescription()."\n".
    "Protection : ".$shield -> getProtections()."\n";
#--------------------------------------------------------------------------------------------------
echo "\n";
$armure =new Armure("Armure d'or","Or timbré",4);
echo "Armure :".$armure ->getNom()."\n".
    "Desc :".$armure -> getDescription()."\n".
    "Protection : ".$armure -> getProtection()."\n";
#--------------------------------------------------------------------------------------------------
echo "\n";

$arc= new Arc("arc","arc long ",2, 6 );
echo "Arc : ".$arc ->getNom()."\n".
    "Desc :".$arc-> getDescription()."\n".
    "Dégats : ".$arc -> getDegats()."\n";
    "Portée : ".$arc -> getPortee()."\n";

#--------------------------------------------------------------------------------------------------
echo "\n";

/*
 * Test des consommables et des objets speciaux
 */

$potion = new Consommables("Potion magique","Référence à Astérix",2,3);
echo "Consommable :".$potion ->getNom()."\n".
     "Desc :".$potion -> getDescription()."\n".
     "Amelioration :".$potion -> getAmelioration()."\n".
     "Nombre d'utilisation :".$potion -> getNombreUtilisation()."\n";

echo "Nombre d'utilisation :".($potion -> utiliser())."\n";

#--------------------------------------------------------------------------------------------------

$special = new ObjetSpecial("objet spécial","description","utilite");
echo "ObjetSpecial :".$special ->getNom()."\n".
    "Desc :".$special -> getDescription()."\n".
    "Utilité :".$special -> getUtilite()."\n";

#--------------------------------------------------------------------------------------------------

$objetDegat = new ObjetADegats("Poison","poison","Empoisonne les ennemis",2);
echo "ObjetSpecial :".$objetDegat ->getNom()."\n".
    "Desc :".$objetDegat -> getDescription()."\n".
    "Utilité :".$objetDegat -> getUtilite()."\n".
    "Degats :".$objetDegat -> getDegats()."\n";



