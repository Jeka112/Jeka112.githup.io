<?php
/*
������ ������ ���������� ���������� �������� ������������, ����� �����.
����� ������������� ������� �������, ��������� ������ � ����������� �������� ������.
���� ����������: 12.10.2007 �.

-> ���� ����������� ����� � ����������� ������� ������ �� e-mail (���������� �����)
*/
defined('ACCESS') or die();
print $body;
$action = htmlspecialchars(str_replace("'","",substr($_GET['action'],0,6)));

	if($action == "submit") {
		$name		= htmlspecialchars(str_replace("'","",substr($_POST['name'],0,50)), ENT_QUOTES, '');
		$mail		= htmlspecialchars(str_replace("'","",substr($_POST['mail'],0,50)), ENT_QUOTES, '');
		$subj		= htmlspecialchars(str_replace("'","",substr($_POST['subj'],0,100)), ENT_QUOTES, '');
		$textform	= htmlspecialchars(str_replace("'","",substr($_POST['textform'],0,10240)), ENT_QUOTES, '');
		//$code		= htmlspecialchars(str_replace("'","",substr($_POST['code'],0,5)), ENT_QUOTES, '');

		    if(!$name) {
				print "<p class=\"er\">������� ���������� ���� ���!</p>";
		}
		elseif(!$mail) {
				print "<p class=\"er\">������� ���������� ��� e-mail!</p>";
		}
		elseif(!$subj) {
				print "<p class=\"er\">������� ���������� ���� ������ ���������!</p>";
		}
		elseif(!$textform) {
				print "<p class=\"er\">������� ���������� ����� ������ ���������!</p>";
		}
		elseif(!preg_match("/^[a-z0-9_.-]{1,20}@(([a-z0-9-]+\.)+(com|net|org|mil|edu|gov|arpa|info|biz|[a-z]{2})|[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3})$/is",$mail)) {
				print "<p class=\"er\">������� ���������� ��� e-mail �������!</p>";
		/*} elseif(!mysql_num_rows(mysql_query("SELECT * FROM captcha WHERE sid = '".$sid."' AND ip = '".getip()."' AND code = '".$code."'"))) {
			print "<p class=\"er\">�� ��������� ����� ���!</b></font></center></p>";*/
		} else {

			$headers = "From: ".$mail."\n";
			$headers .= "Reply-to: ".$mail."\n";
			$headers .= "X-Sender: < http://".$cfgURL." >\n";
			$headers .= "Content-Type: text/html; charset=windows-1251\n";

			$textform = "������������, ".$name."!<br />�� ������ ���, ������ e-mail: ".$mail.", ��� ���������� ���������:<p> >".$textform."</p>";

			$send = mail($adminmail,$subj,$textform,$headers);

			if(!$send) {
				print "<p class=\"er\">������ ��������� �������!<br />�������� ��������� �� ��������������� ����������.</p>";
			} else {

				print "<p class=\"erok\">���� ��������� ����������!</p>";

				$name		= "";
				$mail		= "";
				$subj		= "";
				$textform	= "";
			}
		}
	}
?>
<div id="support">
<div class="content">
					<div class="row">
						<div class="left">
							<h1>����� � ���������</h1>
								<p>�� ��������� ������������ ������ ����� �����, ����������� ��� ������������ ���������� ������ ����������. ��������� ���������� �������������� ����������, �� ������������ � ���, ����� � ��� �� ���� ������� ���������� � ����������� ����� ������ ��� ����������. �� ����� ������ ��� ���. ����������, ������� �� �������� ��� ����, ��� ���� ������������ �� ����� �������� ������������ ����������, ��������� ��������� � ����� ������. � ����� � �������� ����������� ������������, �������� � ���������� �� ������ �������� ������ ���������� �����������. ����� ����, ����������� ������������ � ����������� ����������� ����� ��������� ������ � 48 ����� ������ 24, ������� ������ ���������� ��� ��� ������� �� �����. </p>
					
					<p>����������, ������� �� ��������, ��� ��� �������������� � ������������� ����������� ��������������� ���������� �������������. ���� �� ���� ������ �� ��� ��� �����, �� �� ���� �� �������������� � ����� �������. ��� ��������� ����� ����������� ������ 3-� ��� �� ������ �����������, �� ��������� ����� ���������� �� � ���� � ������ ������ ����� ������������� � ��������� ��������.</p>	<p>			</p><h1>����� ��������� </h1><strong>���������� � ������� - �������������, ���������<br> �������� - 4:00 to 6:00 (GMT) �������-�������<br> ��������� - 16:00 to 20:00 (GMT) ����������<br></strong>
							
						<p></p>
						</div>
						<div class="boxs">
							<div class="h1">��������� ���������:</div>
							<br><br>	
			<form action="?action=submit" method="post">
<center>
<table width="400" align="center" cellpadding="1" cellspacing="1" border="0" style="margin-top: 15px;">
	<tr>
		<td><font color="red"><b>!</b></font> ���� ���:</td>
	</tr>
	<tr>
		<td><input style="width: 400px;" type="text" name="name" class="int" size="50" maxlength="50" value="<?php if(!$name) { print $login; } else { print $name; } ?>" /></td>
	</tr>
	<tr>
		<td><font color="red"><b>!</b></font> ��� e-mail:</td>
	</tr>
	<tr>
		<td><input style="width: 400px;" type="text" name="mail" class="int" size="50" maxlength="50" value="<?php if(!$mail) { print $user_mail; } else { print $mail; } ?>" /></td>
	</tr>
	<tr>
		<td><font color="red"><b>!</b></font> ���� ���������:</td>
	</tr>
	<tr>
		<td><input style="width: 400px;" type="text" name="subj" class="int" size="50" maxlength="100" value="<?php print $subj; ?>" /></td>
	</tr>
	<tr>
		<td><font color="red"><b>!</b></font> ����� ���������:</td>
	</tr>
	<tr>
		<td><textarea style="width: 400px; margin-left: 0px;" class="int" name="textform" cols="40" rows="8"><?php print $textform; ?></textarea></td>
	</tr>
	<tr>
		<td>
			<table align="right" cellpadding="1" cellspacing="1" border="0">
				<tr>
					<br>
					<td><input class="subm btn" "  type="submit" value=" ���������! " /></td>
				</tr>
			</table>
		</td>
	</tr>
</table>
</center>
</form>
</div>
						<div class="clearfix"></div>
					</div>
				</div></div>