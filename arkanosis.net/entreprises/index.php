<?php

$lang = 'fr';
$path = '../';

$last_modified = 'Sun, 11 Oct 2009 20:36:13 GMT';
$expires = 'Mon, 12 Oct 2009 20:36:13 GMT';
$maj = '11 octobre 2009';

$abstract = 'Entreprises dans lesquelles Jérémie Roquet a travaillé';
$keywords = 'Arkanosis, arkanosis, ArKaNoS!S, Ajka, ajka, jeremie, jérémie, roquet, roquet_j, high_b, thunderdrone, high_b_thunderdrone, études, epita, inti, EPITA, INTI, Eugen, Eugen Systems, Exalead, Cristal';

include $path . 'header.php';

?>

		<h1><?= $abstract ?></h1>

		<p>Dernière mise à jour le <?= $maj ?></p>

		<h2>Entreprises par ordre chronologique inverse</h2>
		<ul>
			<li><strong>2009-aujourd'hui</strong> <em><a href="http://www.exalead.fr/" title="Moteur de recherche grand public d'Exalead">Exalead</a></em> (éditeur de solutions de recherche unifiée pour le grand public et l'entreprise)<br />Paris (Paris, France)<br />Développeur en traitement du langage naturel au sein de l’équipe sémantique</li>
			<li><strong>2007-2009</strong> <em><a href="http://www.epita.fr/" title="Site officiel de l'EPITA"><acronym title="École Pour l’Informatique et les Techniques Avancées">EPITA</acronym></a></em> (école privée d'ingénierie informatique)<br />Le Kremlin-Bicêtre (Val-de-Marne, France)<br />Professeur assistant (YAKA, puis ACU) en C, C++, D, Ruby, SQL, UML</li>
			<li><strong>Juillet 2007</strong> <em><acronym title="Institut des Nouvelles Technologies de l’Information">INTI</acronym></em> (organisme de formation)<br />Le Kremlin-Bicêtre (Val-de-Marne, France)<br />Formateur C++ / POO / UML</li>
			<li><strong>2007-2008</strong> <em><a href="http://www.eugensystems.com/" title="Site officiel d'Eugen Systems">Eugen Systems</a></em> (studio de développement de jeux vidéos de stratégie temps réel)<br />Paris (Paris, France)<br />Développeur <acronym title="Intelligence Artificielle">IA</acronym> / Gameplay sur le jeu de stratégie temps réel <a href="http://rusegame.com/" title="Site officiel du jeu R.U.S.E.">R.U.S.E.</a> d’<a href="http://www.ubi.com/" title="Site officiel d'Ubisoft">Ubisoft</a></li>
			<li><strong>Juillet 2006</strong> <em>Cabinet Sère</em> (cabinet d'expertise automobile)<br />Chambourcy (Yvelines, France)<br />Secrétaire et consultant en informatique</li>
			<li><strong>2001</strong> <em><acronym title="Mantes Concept Informatique">MCI</acronym></em> (magasin spécialisé en informatique)<br />Mantes-la-Jolie (Yvelines, France)<br />Chargé du montage des ordinateurs et du déploiement d'un antivirus sur les machines de l'entreprise</li>
		</ul>

<?php

include $path . 'back.php';
include $path . 'footer.php';

?>
