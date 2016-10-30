<?php
session_start();
if($_SESSION['authuser']!=1)
{
echo"ACCESS DENIED";
exit();
}
$connect = mysql_connect("localhost","root","") or die ("check your server connection.");

mysql_select_db("2008b4a5723p");
$name=$_POST['name'];
$cname=$_POST['cname'];
$credit=$_POST['credit'];
$msemmark=$_POST['msemmark'];
$esemmark=$_POST['esemmark'];
$tasemmark=$_POST['tasemmark'];
$total_marks= $msemmark+$esemmark+$tasemmark;
$grade = 'X';
if($total_marks>=90){$grade='Ex';}
else if($total_marks>=80){$grade='A';}
else if($total_marks>=70){$grade='B';}
else if($total_marks>=60){$grade='C';}
else if($total_marks>=50){$grade='D';}
else if($total_marks>=35){$grade='P';}
else $grade='X';
//$add = "ALTER TABLE members ADD `$info` VARCHAR(25)";

//$query = mysql_query($add)or die(mysql_error());

$query2 = "INSERT INTO examresults (cname,credit,stuname,midsem,endsem,tamarks,grade) 
VALUES ('$cname','$credit','$name','$msemmark','$esemmark','$tasemmark','$grade')";
if(mysql_query($query2)){
echo("Mid-Sem Mark Added Sucessfully");
echo '<br>';
//$query3 = mysql_query("INSERT INTO examresults ('$info') VALUES ('$value')");
echo("End-Sem Mark Added Sucessfully");
echo '<br>';
//$query4 = mysql_query("INSERT INTO examresults ('$info') VALUES ('$value')");
echo("TA Mark Added Sucessfully");
echo '<br>';
echo 'Uploaded mid-sem question paper!!'.'<br>';
echo 'Uploaded end-sem question paper!!'.'<br>';
}else {
echo '<br>Some error occurred.';
}
?>
<form method="post" action="default.php">
<input type="submit" class="myButton" name="wel" value="click here to go to login page">
</form>
<footer>
            <a href="default.php" style="color: white;">Back to home</a>
            Student Information System 
        </footer>
<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css" /> 
</head>
<body>
<div id="div1"></div>
</body>
</html>	