<?php
if($er) {
	print '<div class="er" style="text-align: left; padding-left: 15px; margin-bottom: 25px;">
	<strong>Не удается войти.</strong><br />
	Пожалуйста, проверьте правильность написания <b>логина</b> и <b>пароля</b>.
	<ul>
		<li>Возможно, нажата клавиша CAPS-LOCK?</li>
		<li>Может быть, у вас включена неправильная <b>раскладка</b>? (русская или английская)</li>
		<li>Попробуйте набрать свой пароль в текстовом редакторе и <b>скопировать</b> в графу «Пароль»</li>
	</ul>
	Если вы всё внимательно проверили, но войти всё равно не удается, вы можете <b><a href="/reminder/">нажать сюда</a></b>.</div>';
} else {
	print '<p class="warn">Введите ваш логин и пароль в данной форме!</p>';
}
?>
<div id="reg">
<div align="center" class="row">
<form method="post" action="/login/">
	<p><input type="text" name="user" class="int"  onblur="if (value == '') {value='Login'}" onfocus="if (value == 'Login') {value =''}" value="Login" /> <br><input type="password" name="pass" class="int" onblur="if (value == '') {value='password'}" onfocus="if (value == 'password') {value =''}" value="password" /> <br><input class="subm btn" type="submit" value=" Войти! " /></p>
	<p><a href="/registration/">Регистрация</a> || <a href="/reminder/">Забыли пароль?</a></p>
</form>
</div></div>