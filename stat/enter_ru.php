<?php
defined('ACCESS') or die();
?>
<table width="100%" border="0" cellpadding="2" cellspacing="1" bgcolor="#dddddd">
<tr align="center" style="color:#fff">
	<td><b>����:</b></td>
	<td><b>�����:</b></td>
</tr>
<?php

	$sql	= 'SELECT * FROM enter WHERE login = "'.$login.'" AND status = 2 order by id DESC';
	$rs		= mysql_query($sql);
	if(mysql_num_rows($rs)) {

		while($a = mysql_fetch_array($rs)) {
				print "<tr bgcolor=\"#ffffff\" align=\"center\">
				<td align=\"center\">".date("d.m.Y H:i", $a['date'])."</td>
				<td>".$a['sum']."</td>
				</tr>";
		}

	} else {
		print "<tr bgcolor=\"#ffffff\"><td colspan=\"3\" align=\"center\">��� ������!</td></tr>";
	}
print "</table>";