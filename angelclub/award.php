<html>
<title>Angel Club Awards</title>
<body>

<img src="./images/theme.jpg">
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
<td width=400>
<center>
<?php 

$prefix = "./awards/";
if ($handle = opendir('./awards/')) 
{    
  while (false !== ($file = readdir($handle))) 
  {   
    if ($file != "." && $file != "..") 
    { 
     $file = $prefix.$file;
     $data = file_get_contents($prefix.$file);
     echo "<img src=\"$file\">";
     echo "<br><br>";               
    }     
  }    	
 closedir($handle); 
}
?>


<br><br>


</center>
</td>
</tr>
</table>
</body>
</html>