<?php
print $body;
defined('ACCESS') or die();
if($_GET['action'] == "save") {
		$ulogin	= htmlspecialchars($_POST['ulogin'], ENT_QUOTES, '');
		$pass	= $_POST['pass'];
		$repass	= $_POST['repass'];
		$email	= htmlspecialchars($_POST['email'], ENT_QUOTES, '');
	   /*	$code	= htmlspecialchars($_POST["code"], ENT_QUOTES, '');     */
		$skype	= htmlspecialchars($_POST["skype"], ENT_QUOTES, '');
		$pm		= htmlspecialchars($_POST["pm"], ENT_QUOTES, '');
		$pe		= htmlspecialchars($_POST["pe"], ENT_QUOTES, '');
		$yes	= intval($_POST['yes']);

		if(!$ulogin || !$pass || !$repass || !$email || !$yes) {
			$error = "<p class=\"er\">��������� ��� ���� ������������ ��� ����������</p>";
		} elseif(strlen($ulogin) > 20 || strlen($ulogin) < 3) {
			$error = "<p class=\"er\">����� ������ ��������� �� 3-� �� 20 ��������</p>";
		} elseif($pass != $repass) {
			$error = "<p class=\"er\">������ �� ���������</p>";
		} elseif(strlen($email) > 30) {
			$error = "<p class=\"er\">E-mail ������ ��������� �� 30 ��������</p>";
	  /*	} elseif(!mysql_num_rows(mysql_query("SELECT * FROM captcha WHERE sid = '".$sid."' AND ip = '".getip()."' AND code = '".$code."'"))) {
			$error = "<p class=\"er\">������� ��� � �������, �� ���������!</p>";*/
		} elseif(!preg_match("/^[a-z0-9_.-]{1,20}@(([a-z0-9-]+\.)+(com|net|org|mil|edu|gov|arpa|info|biz|[a-z]{2})|[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3})$/is", $email)) {
			$error = "<p class=\"er\">������� ������� e-mail</p>";
		} elseif(mysql_num_rows(mysql_query("SELECT login FROM users WHERE login = '".$ulogin."'"))) {
			$error = "<p class=\"er\">����� ����� ��� ���� � ����! �������� ���������� ������</p>";
		} elseif(mysql_num_rows(mysql_query("SELECT mail FROM users WHERE mail = '".$email."'"))) {
			$error = "<p class=\"er\">����� e-mail ��� ���� � ����!</p>";
		} else {
			$time	 = time();
			$ip		 = getip();
			$pass	 = as_md5($key, $pass);
			if($referal) { 
				$get_user_info	= mysql_query("SELECT * FROM users WHERE login = '".$referal."' LIMIT 1");
				$row			= mysql_fetch_array($get_user_info);
				$ref_id			= intval($row['id']);
			} else { 
				$ref_id = 0; 
			}

			if(cfgSET('cfgMailConf') == "on") {
				$active		= 1;
				$actlink	= "���� ������ ��� ��������� ��������: http://".$cfgURL."/activate.php?m=".$email."&h=".as_md5($key, $ulogin.$email);
			} else {
				$active		= 0;
				$actlink	= "";
			}

			$sql = "INSERT INTO users (login, pass, mail, go_time, ip, reg_time, ref, pm, active, skype, pe) VALUES ('".$ulogin."', '".$pass."', '".$email."', ".$time.", '".$ip."', ".$time.", ".$ref_id.", '".$pm."', ".$active.", '".$skype."', '".$pe."')";
			mysql_query($sql);

			$subject = "����������� ��� � �������� ������������";

			$headers = "From: ".$adminmail."\n";
			$headers .= "Reply-to: ".$adminmail."\n";
			$headers .= "X-Sender: < http://".$cfgURL." >\n";
			$headers .= "Content-Type: text/html; charset=windows-1251\n";

			$text = "������������ <b>".$ulogin."!</b><br />����������� ��� � �������� ������������ � ������� <a href=\"http://".$cfgURL."/\" target=\"_blank\">http://".$cfgURL."</a><br />��� Login: <b>".$ulogin."</b><br />��� ������: <b>".$repass."</b><br />".$actlink."<br /><br />� ���������, ������������� ������� ".$cfgURL;

			mail($email, $subject, $text, $headers);

			$ulogin	= "";
			$pass	= "";
			$repass	= "";
			$email	= "";
			$skype	= "";
			$pm		= "";
			$pe		= "";

			$error = 1;
		}
}

if($error == 1) {

	print "<p class=\"erok\">�����������! �� ������������������. ��������������� ����������.</p>";
	include "../login/login_ru.php";

} else {
	print $error;
?>

<div id="reg">
<div align="left" class="row">

<form action="?action=save" method="post">
<table align="center" border="0" cellpadding="3" cellspacing="1">
	<tr>
		<td style="width: 250px;">���������� �����:</td>
		<td align="center"><input class="int" type="text" name="ulogin" value="<?php print $ulogin; ?>" size="30" maxlength="30" /></td>
	</tr>
	<tr>
		<td>���������� ������:</td><td align="center"><input class="int" type="password" name="pass" size="30" maxlength="20" /></td>
	</tr>
	<tr>
		<td>������ ��������:</td>
		<td align="center"><input class="int" type="password" name="repass" size="30" maxlength="20" /></td>
	</tr>
	<tr>
		<td>���������� E-mail:</td>
		<td align="center"><input class="int" type="text" name="email" value="<?php print $email; ?>" size="30" maxlength="30" /></td>
	</tr>
	<tr>
		<td>���� Skype:</td>
		<td align="center"><input class="int" type="text" name="skype" value="<?php print $skype; ?>" size="30" maxlength="50" /></td>
	</tr>
<?php
if($cfgPerfect) {	
?>
	<tr>
		<td>PerfectMoney: </td><td align="center"><input class="int" type="text" name="pm" value="<?php print $pm; ?>" size="30" maxlength="10" /></td>
	</tr>
<?php
}
if(cfgSET('cfgPEsid') && cfgSET('cfgPEkey')) {	
?>
	<tr>
		<td>PAYEER.com</td><td align="center"><input class="int" type="text" name="pe" value="<?php print $pe; ?>" size="30" maxlength="50" /></td>
	</tr>
<?php
}
?>

	<tr>
		<td colspan="2" align="center"><font color="red"><b>!</b></font> <label><input class="check" type="checkbox" name="yes" value="1" /> <b>� �����������, ��� ��� ���� 18+</b></label></td>
	</tr>
</table>

<div align="center" style="padding-top: 10px; padding-bottom: 15px;"><input class="subm btn" type="submit" name="submit" value=" ����������� " /></div>
</form></div></div>
<?php

	if($referal) {
		print '<center>��� Upline: '.$referal.'</center>';
	}

} 
?>