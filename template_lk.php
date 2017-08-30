<?php
defined('ACCESS') or die();
if(cfgSET('cfgOnOff') == "off" && $status != 1) {
	include "includes/errors/tehwork.php";
	exit();
} elseif(cfgSET('cfgOnOff') == "off" && $status == 1) {
	print '<p align="center" class="warn">Сайт отключен и недоступен для остальных пользователей!</p>';
}
$email	= addslashes(htmlspecialchars($_POST['email'], ENT_QUOTES, ''));
?>
<!DOCTYPE html>
<HTML xmlns="http://www.w3.org/1999/xhtml" g_init="6857">
<head>
<meta charset="windows-1251"
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<link rel="shortcut icon" href="images/favicon.png">
<meta name="keywords" content="">
<meta name="description" content="">
<title><?php print $title; ?></title>
<meta name="keywords" content="<?php print $keywords; ?>" />
<meta name="description" content="<?php print $description; ?>" />
<script language="javascript" src="/files/scripts.js"></script>
<link href="/css/style.css" rel="stylesheet" type="text/css" media="screen, projection">
<link href="/css/modal.css" rel="stylesheet" type="text/css">
<link href="/css/admin.css" rel="stylesheet" type="text/css">
<script src="/js/jquery.min.js" type="text/javascript"></script>
<script src="/js/jquery-ui.min.js" type="text/javascript">
</script>
<script src="/js/jquery.bxslider.min.js" type="text/javascript">
</script>
<script src="/js/scripts.js" type="text/javascript"></script>
<link href="https://fonts.googleapis.com/css?family=Oswald:400,700,300" rel="stylesheet" type="text/css">
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,700,300,600,800,400&amp;subset=latin,cyrillic" rel="stylesheet" type="text/css">

<style type="text/css">
.pageNoIndex_hilite {color:#000000 !important; background-color:#DAA520 !important; } .pageNoIndex_hilite * {color:#000000 !important; background-color:#DAA520 !important; } .pageNoIndex_hilite a {color:#000000 !important; background-color:#DAA520 !important; } .pageNoIndex_hilite img {background-color:#DAA520 !important; opacity: 0.7 !important; display: inline-block !important; } .pageNoFollow_hilite { color:#000000; text-decoration: line-through !important; } .pageNoFollow_hilite * { color:#000000; text-decoration: line-through !important; } .pageNoFollow_hilite img { opacity: 1.0 !important; display: inline-block !important; border: 1px dashed #000000 !important; text-decoration: line-through !important; } .rdstb_pageLink_hilite { border: 1px dashed #FE0808 !important; } .rdstb_pageLink_hilite * { border: 1px dashed #FE0808 !important; } .rdstb_pageLink_hilite img { opacity: 1.0 !important; display: inline-block !important; border: 1px dashed #FE0808 !important; } .rdstb_pageDeadLink_hilite { background-color:#FFFF00 !important; } .rdstb_pageDeadLink_hilite * { background-color:#FFFF00 !important; } .rdstb_pageDeadLink_hilite img { opacity: 0.7 !important; display: inline-block !important; background-color:#FFFF00 !important; }
</style>

</head>
<body class="lk">
<div id="page">
		<div id="bar">
			<div class="container">
				<div class="left">
					<a href="/"><img src="/img/logo.png" alt=""></a>
				</div>
				<div class="right">
					<div class="users">
						<div class="txt1">ПОЛЬЗОВАТЕЛЬ</div>
						<div class="name"><?php print"$login"; ?></div>
						<a href="/deposits/" class="link">ВАШ СЧЕТ</a> 
						<span class="slash">|</span> 
						<a href="/exit.php" class="link">ВЫЙТИ</a>
					</div>
				</div>
				<div class="box">
					<div class="box1 blocks">
						<div class="txt">История работы:</div>
						<div class="text"><span id="times"></span> ДНЕЙ ОНЛАЙН</div>
					</div><!--
				/--><div class="box2 blocks">
						<div class="social blocks">
							<a href="http://facebook.com/" target="_blank" class="facebook blocks"></a><!--
						/--><a href="http://twitter.com/" target="_blank" class="twitter blocks"></a><!--
						/--><a href="https://www.youtube.com/" target="_blank" class="youtube blocks"></a><!--
						/--><a href="http://vk.com/" target="_blank" class="vk blocks"></a><!--
						/--><a href="#" target="_blank" class="instagram blocks"></a><!--
						/--><a href="https://plus.google.com/" target="_blank" class="g_plus blocks"></a>
						</div>
					</div><!--
				/--><div class="box3 blocks">
						<div class="txt">Наши телефоны:</div>
	                    <div class="text">+44 203 8236759</div>
						<div class="text">+44 203 8268637</div>
					</div>
				</div>
				<div class="clearfix"></div>
				<div id="nav">
					<ul class="blocks">
						<li><a href="/">Главная</a></li>
						<li><a href="/about">О проекте</a></li>
						<li><a href="/rules">Правила</a></li>
						<li><a href="/faq">FAQ</a></li>
						<li><a href="/marketing">Маркетинг</a></li>
						<li><a href="/contacts">Контакты</a></li>
					</ul><!--
				/--><div class="triagle blocks"></div>
				</div>
			</div>
		</div><!--bar-->
		<div id="midle">
			<div class="container">
				<div id="sidebarL">
					<div id="nav-lk">
						<ul>
							<li><a href="/deposit">Открыть депозит</a></li>
							<li><a href="/enter" class="link">Внести средства</a></li>
							<li><a href="/withdrawal">Снять со счета</a></li>
							<li><a href="/deposits">Депозиты</a></li>
						</ul>
						<ul>
							<li><a href="/stat">Статистика</a></li>
							<li><a href="/ref">Партнеры</a></li>
						</ul>
						<ul>
							<li><a href="/profile">Настройки</a></li>
							<li><a href="/answers">Отзывы</a></li>
						</ul>
						<ul>
							<li><a href="/contacts">Тех.поддержка</a></li>
							
						</ul>
					</div>
				</div><!--sidebarL-->
<div id="content">
					<div id="account">
					<div class="account blocks"><div class="sphere"></div></div><div class="account blocks blockses2"><div class="sphere"></div></div>			
						
					<?php
	defined('ACCESS') or die();
	if(!$page) {
		include "includes/index.php";
	} elseif(file_exists("../".$page."/index.php")) {

		include "../".$page."/".$page."_ru.php";
	} else {
		include "includes/errors/404.php";
	}
?>
					</div>
				</div><!--content-->
				

				<div class="clearfix"></div>
			</div>
		</div><!--midle-->
		<div id="height"></div>
		<div id="footer">
			<div class="container">
				<ul class="nav blocks">
					<li><a href="/">Главная</a></li>
						<li><a href="/about">О проекте</a></li>
						<li><a href="/rules">Правила</a></li>
						<li><a href="/faq">FAQ</a></li>
						<li><a href="/marketing">Маркетинг</a></li>
						<li><a href="/contacts">Контакты</a></li>
				</ul>
				<div class="right">
					<a href="/"><img src="/img/logo.png" width="117" alt=""></a>
				</div>
				<div class="clearfix"></div>
			</div>
		</div><!--footer-->
	</div>
	</body>
</html>