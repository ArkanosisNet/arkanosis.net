<?php

$lang = 'fr';
$path = '../';

$last_modified = 'Wed, 11 Nov 2009 20:36:13 GMT';
$expires = 'Thu, 12 Nov 2009 20:36:13 GMT';
$maj = '11 novembre 2009';

$abstract = 'Projets de Jérémie Roquet';
$keywords = 'Arkanosis, arkanosis, ArKaNoS!S, Ajka, ajka, jeremie, jérémie, roquet, roquet_j, high_b, thunderdrone, high_b_thunderdrone, paq, jpaq, wpaq, bigcrunch, bcrunch, ionis, epita, bcd';

include $path . 'header.php';

?>

		<h1><?= $abstract ?></h1>

		<p>Dernière mise à jour le <?= $maj ?></p>

		<p>Cette page n'est pas et ne sera jamais exhaustive.</p>

		<h2>Projets personnels de compression de données</h2>
		<ul>
			<li id="lcomp">lcomp (compresseur de texte utilisant des ressources linguistiques)</li>
				<ul>
					<li>Site officiel : <a href="http://trac-hg.assembla.com/lcomp" title="lcomp">http://trac-hg.assembla.com/lcomp</a></li>
				</ul>
			<li>BigCrunch (compresseur et archiveur écrit en C++ et porté en D).
				<ul>
					<li>Site officiel : <a href="http://bcrunch.online.fr/" title="BigCrunch">http://bcrunch.online.fr/</a></li>
				</ul>
			</li>
			<li>JPAQ (recompresseur d'images JPEG (JFIF et JBIG) écrit en C++ et basé sur <a href="http://cs.fit.edu/~mmahoney/compression/#paq" title="Page officielle de la famille de compresseurs PAQ" lang="en">PAQ8o8pre2</a>)</li>
			<li>WPAQ (recompresseur de sons wavs (PCM et ADPCM) écrit en C++, basé sur <a href="http://www.true-audio.com/" title="Site officiel du codec True Audio" lang="en">TTA</a> et <a href="http://cs.fit.edu/~mmahoney/compression/#paq" title="Page officielle de la famille de compresseurs PAQ" lang="en">PAQ9a</a> et destiné à être intégré dans <a href="http://cs.fit.edu/~mmahoney/compression/#paq" title="Page officielle de la famille de compresseurs PAQ">PAQ9</a>)</li>
			<li>BCD (BigCrunch D Library, bibliothèque de compression écrite en D)</li>
		</ul>

		<h2>Projets personnels de compilation</h2>
		<ul>
			<li>Inkludr (Analyseur de dépendances pour le langage C++).
				<ul>
					<li>Site officiel : <a href="https://github.com/Arkanosis/Inkludr" title="Inkludr">https://github.com/Arkanosis/Inkludr</a></li>
				</ul>
			</li>
			<li>MCPP (compilateur du langage <em>Meta C++</em> vers le langage C++).
				<ul>
					<li>Site officiel : <a href="http://trac-hg.assembla.com/mcpp" title="MCPP">http://trac-hg.assembla.com/mcpp</a></li>
				</ul>
			</li>
			<li>Vulcain (compilateur du langage <em>Vulcain</em> utilisant le backend <a href="http://llvm.org/" title="Site officiel du projet LLVM" lang="en"><acronym title="Low Level Virtual Machine">LLVM</acronym></a>)</li>
		</ul>

		<h2>Projets personnels divers</h2>
		<ul>
			<li>Arkonf (configurations pour différents programmes).
				<ul>
					<li>Dépôt : <a href="https://github.com/Arkanosis/Arkonf" title="Arkonf">https://github.com/Arkanosis/Arkonf</a></li>
				</ul>
			</li>
			<li>Arkbot (Bot pour Mediawiki, et en particulier pour Wikipédia).
				<ul>
					<li>Site officiel : <a href="https://github.com/Arkanosis/Wikipedia/tree/master/Arkbot" title="Arkbot">https://github.com/Arkanosis/Wikipedia/tree/master/Arkbot</a></li>
				</ul>
			</li>
			<li>Wikipedia (Outils pour Wikipédia).
				<ul>
					<li>Dépôt : <a href="https://github.com/Arkanosis/Wikipedia/" title="Wikipedia">https://github.com/Arkanosis/Wikipedia/</a></li>
				</ul>
			</li>
		</ul>

		<h2>Projets collaboratifs</h2>
		<ul>
			<li>Wikimedia.
				<ul>
					<li>Wikipédia francophone (encyclopédie libre) : <a href="https://fr.wikipedia.org/" title="Wikipédia francophone">https://fr.wikipedia.org/</a></li>
					<li>Wikidata (base de connaissances libre) : <a href="https://wikidata.org/" title="Wikidata">https://wikidata.org/</a></li>
					<li>Site global : <a href="https://meta.wikimedia.org" title="Wikimedia meta">https://meta.wikimedia.org/</a></li>
				</ul>
			</li>
			<li>shedskin (compilateur de Python vers C++ en Python).
				<ul>
					 <li>Site officiel : <a href="https://shedskin.github.io/" title="Site officiel de shedskin" lang="en">http://shedskin.github.io/</a></li>
					 <li>Liste de diffusion : <a href="https://groups.google.com/group/shedskin-discuss" title="Liste de diffusion de shedskin" lang="en">https://groups.google.com/group/shedskin-discuss</a></li>
				</ul>
			</li>
			<li>REGOVAR (recherche de variants exomiques).
				<ul>
					 <li>Site officiel : <a href="http://regovar.org/" title="Site officiel de REGOVAR" lang="fr">http://regovar.org/</a></li>
					 <li>Liste de diffusion : <a href="https://groups.google.com/group/regovar-dev" title="Liste de diffusion de REGOVAR" lang="fr">https://groups.google.com/group/regovar-dev</a></li>
				</ul>
			</li>
			<li>dcompiler (compilateur de D en D).
				<ul>
					<li>Site officiel : <a href="http://trac-hg.assembla.com/dcompiler" title="Site officiel de dcompiler" lang="en">http://trac-hg.assembla.com/dcompiler</a></li>
					<li>Liste de diffusion : <a href="http://groups.google.com/group/dcompiler" title="Liste de diffusion de dcompiler" lang="fr">http://groups.google.com/group/dcompiler</a></li>
				</ul>
			</li>
			<li>FreeArc (compresseur et archiveur écrit en Haskell).
				<ul>
					<li>Site officiel : <a href="http://freearc.org/" title="Site officiel de FreeArc" lang="en">http://freearc.org/</a></li>
				</ul>
			</li>
			<li>Traduction des logiciels de <a href="http://nirsoft.net/" title="NirSoft">http://nirsoft.net/</a></li>
			<li>Vikidia (encyclopédie libre pour les 8 - 13 ans).
			<ul>
				<li>Site francophone : <a href="http://fr.vikidia.org/" title="Vikidia francophone">http://fr.vikidia.org/</a></li>
			</ul>
		</ul>

		<h2>Projets artistiques</h2>
		<ul>
			<li>Ajka Rewelaziom, projet de musique électronique</li>
			<li>Art programming, un site dédié à la programmation artistique</li>
		</ul>

<?php

include $path . 'back.php';
include $path . 'footer.php';

?>
