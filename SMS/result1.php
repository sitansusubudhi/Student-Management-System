<?php
session_start();
if($_SESSION['authuser']!=1)
{
echo"ACCESS DENIED";
exit();
}

$name= $_POST['myusername'];
$pass= $_POST['mypassword'];


if($name!="admin" && $pass!="admin")
  {
echo"ACCESS DENIED";
exit();
}
?>
<html>
<body>
<form method="post" action="select_course.php">
COURSE ID:<input type="text" name="cname">
<input type="submit" class="myButton" name="submit" value="Students Enrolled">
</form>

<form method="post" action="select_student.php">
STUDENT NAME :<input type="text" name="name">
<input type="submit" class="myButton" name="submit" value="Courses Enrolled">
</form>

<form method="post" action="add_course.php">
<input type="submit" class="myButton" name="wel" value="ADD NEW COURSE">
</form>
<form method="post" action="admin_edit_course.php">
<input type="submit" class="myButton" name="submit" value="EDIT EXISTING STUDENT COURSE">
</form>
<form method="post" action="admin_upload_exam_grades.php">
<input type="submit" class="myButton" name="submit" value="EXAMINATION SECTION">
</form>
<form method="post" action="admin_upload_attendance.php">
<input type="submit" class="myButton" name="submit" value="UPLOAD ATTENDANCE">
</form>
<form method="post" action="default.php" style="float:right;">
<input type="submit" class="myButton" name="add" value="LOGOUT">
</form>

<!--
<footer>
            <a href="default.php" style="color: white;">Back to home</a>
            Student Information System 
        </footer>
	-->	
</body>
</html>	

<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css" /> 
</head>
<body>
<div id="div1"></div>
</body>
</html>	

