<?php

$lang = 'fr';
$path = '../';

$last_modified = 'Wed, 11 Jun 2014 20:36:13 GMT';
$expires = 'Thu, 12 Jun 2014 20:36:13 GMT';
$maj = '11 juin 2014';

$abstract = 'Contacter Jérémie Roquet';
$keywords = 'Arkanosis, arkanosis, ArKaNoS!S, Ajka, ajka, jeremie, jérémie, roquet, roquet_j, high_b, thunderdrone, high_b_thunderdrone, contact, email, adresse, téléphone';

include $path . 'header.php';

?>

		<h1><?= $abstract ?></h1>

		<p>Dernière mise à jour le <?= $maj ?></p>

		<h2>Pour me contacter, vous pouvez utiliser les moyens suivants :</h2>
		<ul>
			<li>Courriel
				<ul>
					<li><em><a href="mailto:jroquet@arkanosis.net">jroquet@arkanosis.net</a></em> pour les messages d'ordre général</li>
				</ul>
			</li>
			<li>Page de discussion Wikimedia
				<ul>
					<li><em><a href="https://fr.wikipedia.org/wiki/Discussion_utilisateur:Arkanosis">https://fr.wikipedia.org/wiki/Discussion_utilisateur:Arkanosis</a></em> pour les messages liés à Wikipédia</li>
					<li><em><a href="https://wikidata.org/wiki/User_talk:Arkanosis">https://wikidata.org/wiki/User_talk:Arkanosis</a></em> pour les messages liés à Wikidata</li>
					<li><em><a href="https://meta.wikimedia.org/wiki/User_talk:Arkanosis">https://meta.wikimedia.org/wiki/User_talk:Arkanosis</a></em> pour les messages liés aux projets Wikimedia en général</li>
				</ul>
			</li>
			<li>Téléphone / <acronym title="Short Message Service">SMS</acronym><br />
				Je ne donne mon numéro de téléphone que sur demande (par courriel) et uniquement lorsque cela est indispensable.<br />
				Il est, de toutes façons, plus facile de me joindre par courriel que par téléphone.
			</li>
		</ul>

		<p>
			L'empreinte de <a href="https://arkanosis.net/jroquet.pub.asc">ma clef <acronym title="Pretty Good Privacy">PGP</acronym></a> est <code>FA49 0B15 D054 C7E8 3F70  B040 8C14 5ABA C11F A702</code>.
		</p>

		<p>
			Vous pouvez m'écrire indifféremment en français, en anglais, en allemand ou en vietnamien.<br />
			Je vous répondrai en français ou en anglais (ou en allemand ou en vietnamien si vous ne comprenez aucune de ces deux langues).
		</p>

<?php

include $path . 'back.php';
include $path . 'footer.php';

?>
