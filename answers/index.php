<?php
	$page = 'answers';
	$file = 'answers.php';
	$idpg = 18;
	include '../cfg.php';
	include '../ini.php';
	if($lng == "ru") {
		include "../template_infa.php";
	} else {
		include "../template.php";
	}
?>