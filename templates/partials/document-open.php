<!doctype html>
<html lang="en" class="no-js">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport"
		      content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
		<title><?= wp_get_document_title() ?></title>
		<link rel="shortcut icon" href="<?=get_template_directory_uri()?>/assets/img/favicon.ico" type="image/x-icon">
		<script>document.documentElement.className = document.documentElement.className.replace(/\bno-js\b/, 'js');</script>
		<?php wp_head() ?>
	</head>
	<body <?php body_class() ?>>