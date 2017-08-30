<?php
/*
Данный скрипт разработан Михайленко Виктором Леонидовичем, далее автор.
Любое использование данного скрипта, разрешено только с письменного согласия автора.
Дата разработки: 12.10.2007 г.

-> Файл обработчика формы и последующей отсылки данных на e-mail (контактная форма)
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
				print "<p class=\"er\">Введите пожалуйста Ваше имя!</p>";
		}
		elseif(!$mail) {
				print "<p class=\"er\">Введите пожалуйста Ваш e-mail!</p>";
		}
		elseif(!$subj) {
				print "<p class=\"er\">Введите пожалуйста тему Вашего сообщения!</p>";
		}
		elseif(!$textform) {
				print "<p class=\"er\">Введите пожалуйста текст Вашего сообщения!</p>";
		}
		elseif(!preg_match("/^[a-z0-9_.-]{1,20}@(([a-z0-9-]+\.)+(com|net|org|mil|edu|gov|arpa|info|biz|[a-z]{2})|[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3})$/is",$mail)) {
				print "<p class=\"er\">Введите пожалуйста Ваш e-mail валидно!</p>";
		/*} elseif(!mysql_num_rows(mysql_query("SELECT * FROM captcha WHERE sid = '".$sid."' AND ip = '".getip()."' AND code = '".$code."'"))) {
			print "<p class=\"er\">Не правильно введён код!</b></font></center></p>";*/
		} else {

			$headers = "From: ".$mail."\n";
			$headers .= "Reply-to: ".$mail."\n";
			$headers .= "X-Sender: < http://".$cfgURL." >\n";
			$headers .= "Content-Type: text/html; charset=windows-1251\n";

			$textform = "Здравствуйте, ".$name."!<br />Вы писали нам, указав e-mail: ".$mail.", как контактный следующее:<p> >".$textform."</p>";

			$send = mail($adminmail,$subj,$textform,$headers);

			if(!$send) {
				print "<p class=\"er\">Ошибка почтового сервера!<br />Приносим извинения за предоставленные неудобства.</p>";
			} else {

				print "<p class=\"erok\">Ваше сообщение отправлено!</p>";

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
							<h1>СВЯЗЬ С КОМПАНИЕЙ</h1>
								<p>Мы стараемся предоставить полный набор услуг, необходимых для эффективного управления вашими капиталами. Поскольку управление осуществляется виртуально, мы позаботились о том, чтобы у вас не было никаких трудностей с управлением своим счетом или операциями. Мы здесь всегда для Вас. Пожалуйста, примите во внимание тот факт, что наши консультанты не могут напрямую предоставить информацию, конкретно связанную с Вашим счетом. В связи с высокими стандартами безопасности, доступом к информации на счетах обладает только финансовый департамент. Кроме того, департамент безопасности и технический департамент имеют регламент ответа в 48 часов вместо 24, которые обычно необходимы нам для ответов по почте. </p>
					
					<p>Пожалуйста, примите во внимание, что все мониторинговые и маркетинговые предложения рассматриваются отдельными специалистами. Если на ваше письмо не был дан ответ, то мы пока не заинтересованы в ваших услугах. При получении таких предложений больше 3-х раз от одного отправителя, мы вынуждены будем отправлять их в СПАМ и черный список наших маркетинговых и рекламных кампаний.</p>	<p>			</p><h1>ЖИВАЯ ПОДДЕРЖКА </h1><strong>Английский и Русский - Круглосуточно, Ежедневно<br> Немецкий - 4:00 to 6:00 (GMT) Вторник-Четверг<br> Испанский - 16:00 to 20:00 (GMT) Ежеденевно<br></strong>
							
						<p></p>
						</div>
						<div class="boxs">
							<div class="h1">Отправить сообщение:</div>
							<br><br>	
			<form action="?action=submit" method="post">
<center>
<table width="400" align="center" cellpadding="1" cellspacing="1" border="0" style="margin-top: 15px;">
	<tr>
		<td><font color="red"><b>!</b></font> Ваше имя:</td>
	</tr>
	<tr>
		<td><input style="width: 400px;" type="text" name="name" class="int" size="50" maxlength="50" value="<?php if(!$name) { print $login; } else { print $name; } ?>" /></td>
	</tr>
	<tr>
		<td><font color="red"><b>!</b></font> Ваш e-mail:</td>
	</tr>
	<tr>
		<td><input style="width: 400px;" type="text" name="mail" class="int" size="50" maxlength="50" value="<?php if(!$mail) { print $user_mail; } else { print $mail; } ?>" /></td>
	</tr>
	<tr>
		<td><font color="red"><b>!</b></font> Тема сообщения:</td>
	</tr>
	<tr>
		<td><input style="width: 400px;" type="text" name="subj" class="int" size="50" maxlength="100" value="<?php print $subj; ?>" /></td>
	</tr>
	<tr>
		<td><font color="red"><b>!</b></font> Текст сообщения:</td>
	</tr>
	<tr>
		<td><textarea style="width: 400px; margin-left: 0px;" class="int" name="textform" cols="40" rows="8"><?php print $textform; ?></textarea></td>
	</tr>
	<tr>
		<td>
			<table align="right" cellpadding="1" cellspacing="1" border="0">
				<tr>
					<br>
					<td><input class="subm btn" "  type="submit" value=" Отправить! " /></td>
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