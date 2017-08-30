<?php
	$page = 'about';
	$file = 'about.php';
	$idpg = 16;
	include '../cfg.php';
	include '../ini.php';
	if($lng == "ru") {
		include "../template_infa.php";
	} else {
		include "../template.php";
	}
?>