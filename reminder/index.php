<?php
	$page = 'reminder';
	$file = 'reminder.php';
	$idpg = 4;
	include '../cfg.php';
	include '../ini.php';
	if($lng == "ru") {
		include "../template_infa.php";
	} else {
		include "../template.php";
	}
?>