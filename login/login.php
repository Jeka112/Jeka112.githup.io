<?php
if($er) {
	print '<div class="er" style="text-align: left; padding-left: 15px; margin-bottom: 25px;">
	<strong>Unable to enter. </strong> <br /> 
	Please check your spelling <b> login </b> and <b> password </b>. 
	<ul> 
	<li> Perhaps pressed CAPS-LOCK? </li> 
	<li> Maybe you have enabled the wrong <b> layout </b>? (Russian or English) </li> 
	<li> Try typing your password in a text editor and copy in the column "Password"</li> 
	</ul> 
	If you are carefully checked, but still log fails, you can <b> <a href="/reminder/"> click here </a> </b>.</div>';
} else {
	print '<p class="warn">Enter your username and password in this form!</p>';
}
?>
<div id="reg">
<div align="center" class="row">
<form method="post" action="/login/">
	<p><input type="text" name="user" style="width: 150px;" onblur="if (value == '') {value='Login'}" onfocus="if (value == 'Login') {value =''}" value="Login" /> <input type="password" name="pass" style="width: 150px;" onblur="if (value == '') {value='password'}" onfocus="if (value == 'password') {value =''}" value="password" /> <input class="subm" type="submit" value=" Sign in! " /></p>
	<p><a href="/registration/">Sign Up</a> || <a href="/reminder/">Forgot password?</a></p>
</form>
</div></div>