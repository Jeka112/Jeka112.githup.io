<?php
	$page = 'marketing';
	$file = 'marketing.php';
	$idpg = 23;
	include '../cfg.php';
	include '../ini.php';
	 if($lng == "ru") {
		include "../template_infa.php";
	} else {
		include "../template.php";
	}
?>