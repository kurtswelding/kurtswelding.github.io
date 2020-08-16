<html>
<title>Angel Club's Home Page</title>
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
<td width=400>
<center>
<?php 

$prefix = "./home_pic/";
if ($handle = opendir('./home_pic/')) 
{    
  while (false !== ($file = readdir($handle))) 
  {   
    if ($file != "." && $file != "..") 
    { 
     $file = $prefix.$file;
     $data = file_get_contents($prefix.$file);
     echo "<img src=\"$file\">";
     //print_r($file);
     //echo $file;  	
     //echo "$file";  
     //echo "<br><br>";               
    }     
  }    	
 closedir($handle); 
}
?>

<br><br>

<img src="./images/h_theme.jpg"></center>

<font face="Helvetica" size=2>
As members of the Angel Club we promise to keep and fulfill are duties, so we can do our best, 
and always keep our promises to our leaders, and members of the Angel Club. 
These promises are, be true, be prayerful, be humble, be honest, be clean, and be kind. 
As we do these things, we become a better person, who is righteous and true.

</td>
<td width=200 valign=top>



<font face="Helvetica" size=2>
<img border=0 src="./images/h_news.jpg">
<br>

<?php 

$prefix = "./news/";
$n = 0;
if ($handle = opendir('./news/')) 
{ 
   
////get files and put it into an array
  while (false !== ($file = readdir($handle))) 
  {   
    if ($file != "." && $file != "..") 
    { 
     $filearray[$n] = $file;
	 $n = $n+1;              
    }     
  }    	
 closedir($handle); 
}

////sort the array
sort($filearray);

////display the files
$m =0;
while ( $m != $n)
{
$data = file_get_contents($prefix.$filearray[$m]);
     echo "<table width=200 valign=top ><tr><td valign=top width=1><li></td><td valign=top>";
     echo '<font face="Helvetica" size=2>';
     echo $data;
     echo "</li></td></tr></table>";
     $m = $m+1;
}   
?>



<br>
<img border=0 src="./images/h_calendar.jpg">
<br>

<?php 

$prefix = "./calendar/";
$n = 0;
if ($handle = opendir('./calendar/')) 
{ 
   
////get files and put it into an array
  while (false !== ($file = readdir($handle))) 
  {   
    if ($file != "." && $file != "..") 
    { 
     $filearray[$n] = $file;
	 $n = $n+1;              
    }     
  }    	
 closedir($handle); 
}

////sort the array
sort($filearray);

////display the files
$m =0;
while ( $m != $n)
{
$data = file_get_contents($prefix.$filearray[$m]);
     echo "<table width=200 valign=top ><tr><td valign=top width=1><li></td><td valign=top>";
     echo '<font face="Helvetica" size=2>';
     echo $data;
     echo "</li></td></tr></table>";
     $m = $m+1;
}   
?>

</center>
</td>
</tr>
</table>
<table width=700>
<tr>
<td width=50></td>
<td width=600>

</td>
<td width=50></td>
</tr>
</table>
</body>
</html>