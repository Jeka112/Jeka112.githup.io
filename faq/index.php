<?php
	$page = 'faq';
	$file = 'faq.php';
	$idpg = 17;
	include '../cfg.php';
	include '../ini.php';
	if($lng == "ru") {
		include "../template_infa.php";
	} else {
		include "../template.php";
	}
?>