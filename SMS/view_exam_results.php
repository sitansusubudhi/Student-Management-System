<?php
session_start();


$stuname = $_SESSION['username'];

 $connect = mysql_connect("localhost", "root", "") or die ("check your server connection");
	

mysql_select_db ("2008b4a5723p");



echo '<center><h2>EXAM GRADE CARD FOR&nbsp'.strtoupper($stuname).'</h2></center>';
echo "<center><table style='width:50%'><tr><td></td><td><b>Course ID</b></td><td><b>Credits</b></td><td><b>Midsem</b></td><td><b>Endsem</b></td><td><b>TAmarks</b></td><td><b>Grade</b></td></tr></table>\n";

$query="Select cname, credit,midsem, endsem, tamarks, grade FROM examresults WHERE stuname= '$stuname'";

$results=mysql_query($query) or die(mysql_error());



$row=mysql_fetch_row($results);
for($i=0;$i<7;$i++){
if($i==0)
echo '&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp'.$row[$i];
else
echo '&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp'.$row[$i];
} 
?>
