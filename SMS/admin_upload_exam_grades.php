<!--<form method="post" action="admin_upload_exam_grades.php">-->

<?php

/* session_start();
if($_SESSION['authuser']!=1)
{
echo"ACCESS DENIED";
exit();	
} */
	$name1 =$_FILES['mfile']['name'];
	$name2 =$_FILES['efile']['name'];
	$tmp_name1 = $_FILES['mfile']['tmp_name'];
	$tmp_name2 = $_FILES['efile']['tmp_name'];
	
	$location = 'uploads/';
	move_uploaded_file($tmp_name1, $location.$name1);
	//	echo 'Uploaded mid-sem question paper!!'.'<br>';
	move_uploaded_file($tmp_name2, $location.$name2);
		//echo 'Uploaded end-sem question paper!!'.'<br>';
	

	
?>
<form action="insert_exam_marks.php" method="POST" enctype="multipart/form-data">
Student name   :<input type="text" name="name"><br/>
Course ID to Grade:<input type="text" name="cname"><br/>
Course Credit:<input type="number" name="credit"><br/>
Enter mid-sem mark: <input type="number" name="msemmark"><br/>
Enter end-sem mark: <input type="number" name="esemmark"><br/>
Enter TA mark: <input type="number" name="tasemmark"><br/>
Upload mid-sem exam paper:<input type="file" name="mfile"><br/>
Upload end-sem exam paper:<input type="file" name="efile"><br/>

<input type="submit" class="myButton" name="submit" value="submit">
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