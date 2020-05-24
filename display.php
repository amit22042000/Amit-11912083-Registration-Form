  
<?php
$name=$_POST['name'];
$email=$_POST['email'];
$marks=$_POST['mark'];
$dob=$_POST['date'];
$gender=$_POST['gender'];
echo("<h2>Registered data</h2>");
echo("<b>Student's name:</b>".$name);
echo("<br><b>Student's Email ID : </b>".$email);
echo("<br><b>Student's Marks : </b>".$marks);
echo("<br><b>Student's DOB : </b>".$dob);
echo("<br><b>Student's Gender : </b>".$gender);
?>