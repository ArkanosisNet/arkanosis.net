<?php

header('Last-Modified: ' . $last_modified);
header('Expires: ' . $expires);

$title = 'Arkanosis.net - ' . $abstract;

if (!isset($path))
  $path = './';

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?= $lang ?>" lang="<?= $lang ?>">

	<!--
		Arkanosis Online v0.0
		© 2007-2009 - Arkanosis
		Webmaster Arkanosis (webmaster@arkanosis.net)
	-->

	<head>

		<title><?= $title ?></title>

		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta http-equiv="Content-Language" content="fr" />

		<meta http-equiv="Last-Modified" content="<?= $last_modified ?>" />
		<meta http-equiv="Expires" content="<?= $expires ?>" />
		<meta http-equiv="Pragma" content="public" />
		<meta http-equiv="Cache-Control" content="must-revalidate" />

		<meta name="title" content="Arkanosis.net" />
		<meta name="subject" content="Arkanosis" />
		<meta name="description" content="<?= $abstract ?>" />
		<meta name="abstract" content="<?= $abstract ?>" />
		<meta name="keywords" content="<?= $keywords ?>" />
		<meta name="language" content="<?= $lang ?>" />
		<meta name="rating" content="general" />
		<meta name="author" content="Arkanosis" />
		<meta name="revised" content="Arkanosis, <?= $maj ?>" />
		<meta name="owner" content="Arkanosis" />
		<meta name="reply-to" content="webmaster@arkanosis.net" />
		<meta name="copyright" content="© 2009 - Arkanosis" />
		<meta name="generator" content="Notepad++, Vim" />
		<meta name="robots" content="ALL" />
		<meta name="revisit-after" content="7 days" />
		<meta name="distribution" content="global" />
		<meta name="identifier-url" content="https://arkanosis.net" />

		<link rev="made" href="mailto:webmaster@arkanosis.net" />
		<link rel="Contents" href="./" />

		<link type="text/css" rel="stylesheet" href="<?= $path ?>styles/screen.css" media="screen,projection,tv" />

	</head>

	<body>
