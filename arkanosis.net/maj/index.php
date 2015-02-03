<?php

$lang = 'fr';
$path = '../';

$last_modified = 'Sat, 22 March 2014 00:00:00 GMT';
$expires = 'Sat, 22 March 2014 20:36:13 GMT';
$maj = '22 mars 2014';

$abstract = 'Dernières mises à jour du site';
$keywords = 'Arkanosis, arkanosis, ArKaNoS!S, Ajka, ajka, jeremie, jérémie, roquet, roquet_j, high_b, thunderdrone, high_b_thunderdrone, mise à jour, mises à jour';

include $path . 'header.php';

?>

		<h1>Liste complète des mises à jour du site</h1>

		<dl>
		<h2 id="maj">Dernières mises à jour</h2>
		<dl>
			<dt>11 juin 2014</dt>
			<dd>
				Mise à jour de l'adresse email.<br />
				Publication de la clef PGP.
			</dd>
			<dt>22 mars 2014</dt>
			<dd>
				Mise à jour du CV.
			</dd>
			<dt>22 mai 2010</dt>
			<dd>
				Retouches mineures.
			</dd>
			<dt>11 novembre 2009</dt>
			<dd>
				Ajout de la page <a href="../contact" title="Page contact">me contacter</a>.<br />
				Mise à jour des projets en cours, et utilisation des URLs en <em>http://*.arkanosis.net/</em>.
			</dd>
			<dt>11 octobre 2009</dt>
			<dd>
				Mise à jour du paragraphe d'introduction car je suis diplômé depuis quelque temps.<br />
				Génération partielle des pages du site en <acronym title="Hypertext PreProcessor">PHP</acronym>. Je m'étais promis de ne plus toucher à ce langage ; je n'ai pas tenu.<br />
				Préparation de la migration du site vers <a href="http://arkanosis.net/" title="Site d'Arkanosis">http://arkanosis.net/</a>.<br />
				Nettoyage des projets terminés ou abandonnés, réorganisation du menu, suppression des liens externes vers les sites que je n'utilise pas ou plus, ajout de nouveaux liens (GitHub, Friendfeed, Flickr...).
			</dd>
			<dt>13 juin 2009</dt>
			<dd>
				Changement de l'URL de <a href="http://www.facebook.com/arkanosis" title="Page Facebook d'Arkanosis">ma page Facebook</a> (drôlement plus lisible depuis que l'on peut choisir un identifiant).<br />
				Ajout des pages des projets <a href="http://trac-hg.assembla.com/lcomp" title="lcomp">lcomp</a> et <a href="http://trac-hg.assembla.com/genbot" title="genbotIA">genbotIA</a><br />
				Ajout de la <a href="../en" title="English version of this page" lang="en">version anglaise de la page d'accueil</a>.<br />
				Ajout de cette page regroupant toutes les mises à jour du site, pour ne pas surcharger la <a href="../" title="Page d'accueil du site">page d'accueil</a>.<br />
				Ajout d'une feuille de style (CSS) pour rendre le site un peu plus lisible.<br />
				Ajout du paragraphe sur <a href="../#homonymes" title="Les homonymes d'Arkanosis">mes homonymes</a>.
			</dd>
			<dt>30 avril 2009</dt>
			<dd>
				C'est mon anniversaire ! J'ai désormais vingt-trois ans.
			</dd>
			<dt>4 avril 2009</dt>
			<dd>
				Ajout de la description des dernières mises à jour, correction de fautes d'orthographe.
			</dd>
			<dt>28 mars 2009</dt>
			<dd>
				Nouveau message d'accueil, réorganisation du plan du site, ajout de la page <a href="../entreprises" title="Voir la liste des entreprises dans lesquelles Arkanosis a travaillé">entreprises</a>, ajout du <a href="../xmlns/troll" title="The Troll XML namespace" xml:lang="fr" lang="en">Troll XML namespace</a>, validation <acronym title="Extensible HyperText Markup Language">XHTML</acronym> 1.0 Strict.
			</dd>
		</dl>

<?php

include $path . 'back.php';
include $path . 'footer.php';

?>
