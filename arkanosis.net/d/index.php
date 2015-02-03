<?php

$lang = 'fr';
$path = '../';

$last_modified = 'Sun, 11 Oct 2009 20:36:13 GMT';
$expires = 'Mon, 12 Oct 2009 20:36:13 GMT';
$maj = '20 juillet 2008';

$abstract = 'Ressources sur le langage D';
$keywords = 'Arkanosis, arkanosis, ArKaNoS!S, Ajka, ajka, jeremie, jérémie, roquet, roquet_j, high_b, thunderdrone, high_b_thunderdrone, langage, D, programmation, conférence, Dazel, Walter, Brigth';

include $path . 'header.php';

?>

		<h1><?= $abstract ?></h1>

		<p>Dernière mise à jour le <?= $maj ?></p>

		<ul>
			<li><a href="./d_conference_20070715.pdf" title="La conférence de The D²azel Team sur le langage D" lang="en">La conférence de <em>The D²azel Team</em> sur le langage D</a> (juillet 2007)</li>
		</ul>
		<p>
			Cette conférence a été réalisé à la suite de notre projet <a href="http://dsource.org/projects/dazel/" title="Site officiel du projet D²azel">D²azel</a>.
		</p>

<?php

include $path . 'back.php';
include $path . 'footer.php';

?>
