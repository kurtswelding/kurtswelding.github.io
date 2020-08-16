<html>
<head><title>Download and Print your Membership Card</title></head>

<body>

<table width=700><tr><td width=700>
<center>
<img src="./images/theme.jpg">
</center>
</td></tr></table>


<table height=10 width=700>
<tr>
<td height=10>
</td></tr>
</table>

<table cellspacing=3 cellpadding=3 align=justify>
<tr>
<td width=100 valign=top>

<?php
require("./menu.php");
?>


</td>
<td width=25>
<td width=575>

<font size=5 face="Helvetica">
<u>Download And Print Your Membership Card</u>
<br><br>
<font size=4 face="Helvetica">
Instructions
<br>

<font size=2 face="Helvetica"><br>
1. Enter your full name. <br><br> 2. Click the submit button.


<form action="./membercard/member.php" method=post>
<table border=0>

<tr>
  <td>Full Name</td>
  <td align="center"><input type="text" name="name" size="30"  
     maxlength="30"></td>
</tr>

<tr>

  <td colspan="2" align="center"><br><input type="submit" value="Submit"></td>
</tr>

</table>
</form>
