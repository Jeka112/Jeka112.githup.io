<?php
defined('ACCESS') or die();
if(cfgSET('cfgOnOff') == "off" && $status != 1) {
	include "includes/errors/tehwork.php";
	exit();
} elseif(cfgSET('cfgOnOff') == "off" && $status == 1) {
	print '<p align="center" class="warn">���� �������� � ���������� �� ��������� �������������!</p>';
}
?>

<?php
 #################################################
# Kubelance.ru
# ������ �����������  Zorro
# ���������: https://vk.com/kub_elance
# Skype: zorro.red (����� ������� ���� ������)
# ICQ: 602930609
# E-mail: lavric.10@mail.ru
#################################################
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
<body contenteditable="false">

<div id="page">
		<div id="bar">
			<div class="container">
				<div class="left">
					<a href="/"><img src="images/logo.png" alt=""></a>
				</div>
				<div class="right">
								<a href="/login/#home" class="reg"><span>�����</span></a><!--
				/--><a href="/registration/#home" class="login"><span>�����������</span></a>


				</div>
				<div class="box">
					<div class="box1 blocks">
						<div class="txt">������� ������:</div>
						<div class="text"><span id="times"></span> ���� ������</div>
					</div><!--
				/--><div class="box2 blocks">
						<div class="social blocks">
<a href="http://facebook.com/" target="_blank" class="facebook blocks"></a><!--
						/--><a href="http://twitter.com/" target="_blank" class="twitter blocks"></a><!--
						/--><a href="https://www.youtube.com/" target="_blank" class="youtube blocks"></a><!--
						/--><a href="http://vk.com/" target="_blank" class="vk blocks"></a><!--
						/--><a href="http://instagram.com/" target="_blank" class="instagram blocks"></a><!--
						/--><a href="https://plus.google.com/" target="_blank" class="g_plus blocks"></a>
						</div>
					</div><!--
				/--><div class="box3 blocks">
						<div class="txt">���� ��������:</div>
					    <div class="text">+44 203 8236759</div>
						<div class="text">+44 203 8268637</div>
					</div>
				</div>
				<div class="clearfix"></div>
				<div id="nav">
					<ul class="blocks">
						<li><a href="/">�������</a></li>
						<li><a href="/about">� �������</a></li>
						<li><a href="/rules">�������</a></li>
						<li><a href="/faq">FAQ</a></li>
						<li><a href="/marketing">���������</a></li>
						<li><a href="/contacts">��������</a></li>
					</ul><!--
				/--><div class="triagle blocks"></div>
				</div>
			</div>
		</div><!--bar-->
		<div id="top">
			<div class="grid l"></div>
			<div class="grid r"></div>
			<div class="container">
<?php
$cusers		= mysql_num_rows(mysql_query("SELECT id FROM users"));
$cwm		= mysql_num_rows(mysql_query("SELECT id FROM users WHERE pm_balance != 0 OR lr_balance != 0"));

$money	= 0.00;
$query	= "SELECT sum FROM output WHERE status = 2";
$result	= mysql_query($query);
while($row = mysql_fetch_array($result)) {
	$money = $money + $row['sum'];
}

$depmoney	= 0.00;
$query	= "SELECT sum FROM deposits WHERE status = 0";
$result	= mysql_query($query);
while($row = mysql_fetch_array($result)) {
	$depmoney = $depmoney + $row['sum'];
}
?>

<?php
$cusers		= mysql_num_rows(mysql_query("SELECT id FROM users")) + cfgSET('fakeusers');
$cwm		= mysql_num_rows(mysql_query("SELECT id FROM users WHERE pm_balance != 0 OR lr_balance != 0")) + cfgSET('fakeactiveusers');

$money	= cfgSET('fakewithdraws');
$query	= "SELECT sum FROM output WHERE status = 2";
$result	= mysql_query($query);
while($row = mysql_fetch_array($result)) {
	$money = $money + $row['sum'];
}

$depmoney	= cfgSET('fakedeposits');
$query	= "SELECT sum FROM deposits WHERE status = 0";
$result	= mysql_query($query);
while($row = mysql_fetch_array($result)) {
	$depmoney = $depmoney + $row['sum'];
}
?>

<?php
	$nu	= mysql_fetch_array(mysql_query("SELECT login FROM users ORDER BY id DESC LIMIT 1"));
?>
<?php
	$nd	= mysql_fetch_array(mysql_query("SELECT * FROM deposits ORDER BY id DESC LIMIT 1"));
?>
<?php
	$no	= mysql_fetch_array(mysql_query("SELECT * FROM output ORDER BY id DESC LIMIT 1"));
?>			
				<div id="stat">
					<div class="name">����������:</div>
					<ul>
												<li><div class="blocks">������ ������:</div> <span id="times2"></span></li>
																		<li><div class="blocks">������ ������:</div> <?php print intval(mysql_num_rows(mysql_query("SELECT id FROM users WHERE go_time > ".intval(time() - 1200))) + cfgSET('fakeonline')); ?></li>
																		
																		<li><div class="blocks">�������������:</div> $ <?php print $depmoney; ?></li>
																		<li><div class="blocks">�������� �����:</div> $ <?php print $money; ?></li>
																		<li><div class="blocks">��������� ������:</div> <span><?php print $nu['login']; ?></span></li>
													                    						<li>
							<div class="blocks">��������� �������:</div> 
							$ <?php print $nd['sum']; ?>
							
						</li>
																	</ul>
					<div class="box">
						<div class="txt"><div class="blocks">DDOS ������:</div> ���</div>
						<div class="txt"><div class="txt2 blocks">����� ������:</div> ���</div>
						<div class="txt"><div class="txt3 blocks">���������� �������:</div> <span>��</span></div>
					</div>
				</div>
				<div class="boxs">
					<div class="boxs">
						<div class="boxs1 blocks">Investing and Managing Micro</div>
						<div class="boxs2 blocks">for Generating Macro</div>
					</div>
				</div>
				<div class="clearfix"></div>
			</div>
		</div><!--top-->
		<div id="box" class="container">
			<div class="plan">
				<div class="box box1 blocks">
					<div class="name">������ ����</div>
					<div class="ico ico1 blocks"></div><div class="boxs blocks">
						<div class="text">����</div>
						<div class="percent">30%</div>
						<div class="txt">4 ���</div>
						<div class="sum">�����: <span>$10-$5000</span></div>
					</div>
				</div><div class="box box2 blocks">
					<div class="name">������ ����</div>
					<div class="ico ico1 blocks"></div><div class="boxs blocks">
						<div class="text">����</div>
						<div class="percent">150%</div>
						<div class="txt">7 ����</div>
						<div class="sum">�����: <span>$100-$10000</span></div>
					</div>
				</div><div class="box box3 blocks">
					<div class="name">������ ����</div>
					<div class="ico ico1 blocks"></div><div class="boxs blocks">
						<div class="text">����</div>
						<div class="percent">230%</div>
						<div class="txt">14 ����</div>
						<div class="sum">�����: <span>$200-$15000</span></div>
					</div>
				</div>
			</div>
			<div class="clearfix"></div>
		</div><!--box-->
		<div id="midle">
<div class="content">
				<div id="home">
					<div class="left">
						<h1>��� HYIP</h1>
						<p>���������������� �� ���������� � ����������� �������� �� ������� ������ � ����������� ����������, ������� ����� � ��������� ���������� �����������. �� ���������� ������������� ������������ � ������������� ������ � ������ ����������, ��������������� ������������ � �������� ����� ��������. �� ������������ � ��������� ��������� ��������������, ������� ������������ � ����������� ���������� ��� ������ �����. �� ��������� ������� ������� � ���������� �������� �������� ��� ������� �������. � ��������� ����� �� �������� � ���������� � ����������� �� ����, ��������� ������� � ����������� / ��������� ������.</p>
<br>
						<p>�������� ���� ����� ��������� ������������� �������� �������������� � �������� �������, ����, ������� ����� ���������� ������������� ������ � �������� ������ ��������������� �����������. ��������-��������� ��� ������������������� � ������������������ ������, ����������� � �������� ��� ������� ������� �������� ������� �������� ������� ����������� ��� ���������� ������� ����������.</p>
<br>
						<p>�� ����� ���������� ������������ ��������� �� ��������� ���������� �������������. ����� ������� � �������� �������� ����� ��������, �������, ��� �������, ��������� � ����������� ������, ���� � ��������� �������. ��� ����������� ����� ��������� ������� � �������������� �������� ������� ����� �� ����� ������ ������������ ���������� ����������. ����� ������������������ ������� ����������� ������� ����� ���� ����� ����������� ��� ��������� ��� ������ ����������.</p>
						<br>
						
							
							<p>��������������� ����������� ��������� � �������, �� �� ����� ����� ����� ��������. ��������������� ����������� �������� ���������������� ������ � �������� � �����-����� �������� ������� � ������� ���������, ���������� �� �������� ��������� ������� markets.Our ����� �������� ����������� �� ������������� ������� ���������� ��� ������������� �������� �������� �����������. �� ������� �� ��� ����� ����� �����������, ������ ��� � ��� ���� ������� ���������, ����� ����� ����������� ���������� ������� � ��������� �������.</p>
				
					</div>
				
					<div class="clearfix"></div>
				</div>
</div>
</div><!--midle-->
		<div id="bottom" class="container">
			<div class="left">
				<div class="box1 blocks">
					<div class="percent blocks">7%</div><!--
				/--><div class="name blocks">�����<br>���������</div>
				</div><!--
			/--><div class="box2 blocks">
					<div class="percent blocks">10%</div><!--
				/--><div class="name blocks">�����<br>��������������</div>
				</div>
			</div>
			<div id="pay">
				<a href="https://bitcoin.org" target="_blank" class="blocks"><img src="img/pay/bottom/pay1.png" alt=""></a><!--
			/--><a href="https://perfectmoney.is" target="_blank" class="blocks"><img src="img/pay/bottom/pay2.png" alt=""></a><!--
			/--><a href="https://payeer.com" target="_blank" class="blocks"><img src="img/pay/bottom/pay3.png" alt=""></a><!--
			/--><a href="http://www.visa.com.ru" target="_blank" class="blocks"><img src="img/pay/bottom/pay4.png" alt=""></a><!--
			/--><a href="http://www.mastercard.com" target="_blank" class="blocks"><img src="img/pay/bottom/pay5.png" alt=""></a>
			</div>
			<div class="clearfix"></div>
		</div><!--bottom-->
		<div id="security" class="container">
			<div class="box">
				<div class="caroufredsel_wrapper" style="display: block; text-align: start; float: none; position: relative; top: auto; right: auto; bottom: auto; left: auto; z-index: auto; width: 1140px; height: 235px; margin: 0px; overflow: hidden;"><div class="slider2" style="text-align: left; float: none; position: absolute; top: 0px; right: auto; bottom: auto; left: -7.51968px; margin: 0px; width: 5700px; height: 235px; z-index: auto;">
				
<div class="slide">
						<img src="img/security/security2.png" alt="">
						<div class="name">Comodo EV SSL</div>
						<div class="txt">��� ������, ������� ������������� ������������� ��������� ����������� ����������������� ������������ ������������ ������������ ����� � ����������� ������������ ����. �� ������ ���� �������, ��� �� ������������� �� ����� ����� ��������.</div>
					</div><div class="slide">
						<div class="wimg_b" style="width: 150px; height: 75px; border: 1px solid #dedede; box-sizing: border-box; padding: 3px 0px 0 14px;">
							<a href="#" onclick="window.open('https://www.sitelock.com/verify.php?site=nano-11.com','SiteLock','width=600,height=600,left=160,top=170');"><img alt="SiteLock" title="SiteLock" src="//shield.sitelock.com/shield/nano-11.com"></a>
						</div>
						<!-- <img src="img/security/security3.png" alt=""> -->
						<div class="name">Site Lock</div>
						<div class="txt">������ SiteLock ������������� ���������� ������ ������� ����� ��������� ������������ ��� ������������ ����� �� ���������� ���������� ������������. �������, ���� �������� ������������� ���������� ���������� ������������ SiteLock � ������ ����� � ���� �������� � ����� ������.</div>
					</div><div class="slide">
						<a href="http://wck2.companieshouse.gov.uk/" target="_blank"><img src="img/security/security4.png" alt=""></a>
						<div class="name">Companies House</div>
						<div class="txt">���� �������� �������� ���������� ������������������ � �������� �������������. �� ������ �������� ���� ������� ��� ���� ���������� � ���� �������, ��� �� ����� ������������� �� ������ �������� ���������� ����������������. ��� ����� <strong>NI634857</strong></div>
					</div><div class="slide">
						<!-- <img src="img/security/security6.png" alt=""> -->
						<div class="wimg_b" style="width: 150px; height: 75px; border: 1px solid #dedede; box-sizing: border-box; padding: 7px 0px 0px 0px;">
							<div id="avgthreatlabs_safetybadge"><a href="http://www.avgthreatlabs.com/sitereports/domain/nano-11.com/?utm_source=SR&amp;utm_medium=not_green&amp;utm_campaign=MSBW" target="_blank"><img border="0" src="https://api.avgthreatlabs.com/static/classification_not_green.png" target="_blank"></a></div><script language="javascript" src="https://api.avgthreatlabs.com/static/js/security.js"></script>
						</div>
						<div class="name">AVG Anti-Malware</div>
						<div class="txt">������� ������������ �� ���� ��������� �������� ����� ������� ������� ������������ � ������� ����������� ��� ��� ����� ���. ������, ������� ������������� AVG ����� ������� ����� ������� � ���������� ���������� ���������.</div>
					</div><div class="slide">
						<img src="img/security/security7.png" alt="">
						<div class="name">DDOS-Guard</div>
						<div class="txt">��� ���� �������� �� 99.99% � ��� ������� �������������� ���� � ������ ������������������ ��������� �������������� �����. �� ����, ��� ���� ����� �������� ���� � ������ �������� ������� �����, � ����� ������ �� �������� � �����������������.</div>
					</div><div class="slide">
						<img src="img/security/security8.png" alt="">
						<div class="name">Webutation</div>
						<div class="txt">���� �������� �������� ����������� �������� �� ������ ���������, ������� ������������� ������� �������, ������� ����� ��� ����.</div>
					</div><div class="slide">
						<!-- <img src="img/security/security9.png" alt=""> -->
						<div class="wimg_b" style="width: 150px; height: 75px; border: 1px solid #dedede;">
							<script type="text/javascript" src="https://seal.websecurity.norton.com/getseal?host_name=nano-11.com&amp;size=L&amp;use_flash=NO&amp;use_transparent=YES&amp;lang=en"></script><img name="seal" src="/img/security/security9.png" oncontextmenu="return false;" border="0" usemap="#sealmap_large" alt=""> <map name="sealmap_large" id="sealmap_large"><area alt="Click to Verify - This site has chosen an SSL Certificate to improve Web site security" title="" href="javascript:vrsn_splash()" shape="rect" coords="0,0,130,65" tabindex="-1" style="outline:none;"><area alt="Click to Verify - This site has chosen an SSL Certificate to improve Web site security" title="" href="javascript:vrsn_splash()" shape="rect" coords="0,65,71,88" tabindex="-1" style="outline:none;"><area alt="" title="" href="javascript:symcBuySSL()" shape="rect" coords="71,65,130,88" style="outline:none;"></map>
						</div>
						<div class="name">Norton Secured</div>
						<div class="txt">������ ������ ��������, ��� ��� ���� �������� ���������� � ����� ������ �������� ������������, ����� ����, ���������� � ��� �� ����� ������� �����.</div>
					</div><div class="slide">
						<div class="wimg_b" style="width: 150px; height: 75px; border: 1px solid #dedede;">	
							<script type="text/javascript" src="https://seal.geotrust.com/getgeotrustseal?host_name=nano-11.com&amp;size=S&amp;use_animation=YES&amp;lang=en"></script><a href="https://sealinfo.geotrust.com/splash?form_file=fdf/splash.fdf&amp;dn=nano-11.com&amp;lang=en" tabindex="-1" onmousedown="return gtm_mDown(event);" target="GEOTRUST_Splash"><img name="gtm_seal" border="true" src="https://sealinfo.geotrust.com/images/scanned_anim_115x55.gif" oncontextmenu="return false;" alt="Click to Verify - This website is protected against malware by GeoTrust"></a><br><a href="http://www.geotrust.com/ssl/" target="_blank" style="color:#000000; text-decoration:none; font:bold 7px verdana,sans-serif; letter-spacing:.5px; text-align:center; margin:0px; padding:0px;"></a>
						</div>
						<!-- <img src="img/security/security10.png" alt=""> -->
						<div class="name">Geo-Trust Anti-Malware</div>
						<div class="txt">�������������� �������� SSL ������� ������ �����. ������������ ���������� �������� �������� ������� ������������� �������� ����������, ������� ����� ������� ������������ ��������.</div>
					</div><div class="slide">
						<div class="wimg_b" style="width: 150px; height: 110px; border: 1px solid #dedede; box-sizing: border-box;">
							<iframe src="/img/security/security11.png" align="left" frameborder="0" height="109px" width="145px">?</iframe>
						</div>
						<!-- <img src="img/security/security1.png" alt=""> -->
						<div class="name">Digisert</div>
						<div class="txt">���� ������ ������� ����� ������ �� ��, ��� �� ��� ������������ ���������� ����������� �������� ������ ������.</div>
					</div><div class="slide">
						<div class="wimg_b" style="width: 150px; height: 75px; border: 1px solid #dedede; padding: 9px 22px; box-sizing: border-box;">
							<a name="trustlink" href="http://secure.trust-guard.com/security/10927" rel="nofollow" target="_blank" onclick="var nonwin=navigator.appName!='Microsoft Internet Explorer'?'yes':'no'; window.open(this.href.replace(/https?/, 'https'),'welcome','location='+nonwin+',scrollbars=yes,width=517,height='+screen.availHeight+',menubar=no,toolbar=no'); return false;" oncontextmenu="var d = new Date(); alert('Copying Prohibited by Law - This image and all included logos are copyrighted by trust-guard \251 '+d.getFullYear()+'.'); return false;"><img name="trustseal" alt="Security Seals" style="border: 0;" src="//dw26xg4lubooo.cloudfront.net/seals/security/10927-small.gif"></a>
						</div>
						<!-- <img src="img/security/security1.png" alt=""> -->
						<div class="name">TrustGuard</div>
						<div class="txt">������ ���� ��� ���� ������������ ������������, ������� ���������� ������������ �������, � ����� ����������� ���� ������ �����. ����� ������� �� ������������ 100% ����������� �����.</div>
					</div><div class="slide">
						<div class="wimg_b" style="width: 150px; height: 75px; border: 1px solid #dedede; padding: 9px 22px; box-sizing: border-box;">
							<a name="trustlink" href="http://secure.trust-guard.com/business/10927" rel="nofollow" target="_blank" onclick="var nonwin=navigator.appName!='Microsoft Internet Explorer'?'yes':'no'; window.open(this.href.replace(/https?/, 'https'),'welcome','location='+nonwin+',scrollbars=yes,width=517,height='+screen.availHeight+',menubar=no,toolbar=no'); return false;" oncontextmenu="var d = new Date(); alert('Copying Prohibited by Law - This image and all included logos are copyrighted by trust-guard \251 '+d.getFullYear()+'.'); return false;"><img name="trustseal" alt="Business Seals" style="border: 0;" src="//dw26xg4lubooo.cloudfront.net/seals/newbiz/10927-lg.gif"></a>
						</div>
						<!-- <img src="img/security/security1.png" alt=""> -->
						<div class="name">TG Business</div>
						<div class="txt">�� ������������ ��� ����������� ��������� � �������� TrustGuard, ������� ����������, ��� ���� �������� ����� ���������� ��� ������������� ����������� � ��������������� ������ �������.</div>
					</div><div class="slide">
						<div class="wimg_b" style="width: 150px; height: 75px; border: 1px solid #dedede; padding: 9px 22px; box-sizing: border-box;">
							<script type="text/javascript" src="https://sealserver.trustwave.com/seal.js?style=invert"></script>
						</div>
						<!-- <img src="img/security/security1.png" alt=""> -->
						<div class="name">Trust Wave</div>
						<div class="txt">������ ���� ������� ������ nano-11.com ��������� ����, ��� ������������� ���������� ���������� ���������� � �������� ���� �������������� ���������� �� ������, ������� �� ������ ��� ����, ������� ����� ����������� ������ ����������� ����� ��������.</div>
					</div></div></div>
				<a href="#" class="prev2" style="display: block;"></a>
				<a href="#" class="next2" style="display: block;"></a>
			</div>
		</div><!--security-->
		<div id="height"></div>
		<div id="footer">
			<div class="container">
				<ul class="nav blocks">
					<li><a href="/" class="active">�������</a></li>
						<li><a href="/about">� �������</a></li>
						<li><a href="/rules">�������</a></li>
						<li><a href="/faq">FAQ</a></li>
						<li><a href="/marketing">���������</a></li>
						<li><a href="/contacts">��������</a></li>
				</ul>
				<div class="right">
					<a href="/"><img src="img/logo.png" width="117" alt=""></a>
				</div>
				<div class="clearfix"></div>
			</div>
		</div><!--footer-->
	</div>

</body>
</html>