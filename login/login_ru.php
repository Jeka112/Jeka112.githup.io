<?php
if($er) {
	print '<div class="er" style="text-align: left; padding-left: 15px; margin-bottom: 25px;">
	<strong>�� ������� �����.</strong><br />
	����������, ��������� ������������ ��������� <b>������</b> � <b>������</b>.
	<ul>
		<li>��������, ������ ������� CAPS-LOCK?</li>
		<li>����� ����, � ��� �������� ������������ <b>���������</b>? (������� ��� ����������)</li>
		<li>���������� ������� ���� ������ � ��������� ��������� � <b>�����������</b> � ����� ��������</li>
	</ul>
	���� �� �� ����������� ���������, �� ����� �� ����� �� �������, �� ������ <b><a href="/reminder/">������ ����</a></b>.</div>';
} else {
	print '<p class="warn">������� ��� ����� � ������ � ������ �����!</p>';
}
?>
<div id="reg">
<div align="center" class="row">
<form method="post" action="/login/">
	<p><input type="text" name="user" class="int"  onblur="if (value == '') {value='Login'}" onfocus="if (value == 'Login') {value =''}" value="Login" /> <br><input type="password" name="pass" class="int" onblur="if (value == '') {value='password'}" onfocus="if (value == 'password') {value =''}" value="password" /> <br><input class="subm btn" type="submit" value=" �����! " /></p>
	<p><a href="/registration/">�����������</a> || <a href="/reminder/">������ ������?</a></p>
</form>
</div></div>