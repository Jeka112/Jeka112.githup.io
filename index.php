<?php
	include "cfg.php";
	include "ini.php";
	if($lng == "ru") {
		include "template_ru.php";
	} else {
		include "templ.php";
	}
?>