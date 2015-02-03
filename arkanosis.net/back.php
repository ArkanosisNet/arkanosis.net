<?php

if (!isset($path))
{
  $path = '../';
}

if ($lang == "fr")
{

?>
		<p>
			<a href="<?= $path ?>" title="Page d'accueil">Retour à la page d'accueil</a>
		</p>

<?php

} else {

?>

		<p>
			<a href="<?= $path ?>en/" title="Homepage">Back to homepage</a>
		</p>

<?php

}

?>