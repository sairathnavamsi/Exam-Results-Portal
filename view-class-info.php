<!DOCTYPE html>
<html lang="en" >
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<link rel="stylesheet" href="g.css" type="text/css"/>
<title>Class Info</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
$("#id1").click(function(){
$("#id2").toggleClass("ul2");
});
});
$(document).ready(function(){
$("#id3").click(function(){
$("#id4").toggleClass("ul2");
});
});
$(document).ready(function(){
$("#id5").click(function(){
$("#id6").toggleClass("ul2");
});
});
$(document).ready(function(){
$("#id7").click(function(){
$("#id8").toggleClass("ul2");
});
});
function check()
{
var cc1=document.createclass.cn.value;
var cc2=document.createclass.cn1.value;
var cc3=document.createclass.sec.value;
if(cc1==""|| cc2==""||cc3=="")
{
document.getElementById('message').innerHTML="Please Fill all the Text-Boxes!";
setTimeout(function(){document.getElementById('message').innerHTML="";},3000);
}
else if(cc2>10||cc2<1)
{
document.getElementById('message').innerHTML="Class Should be between 1 & 10!";
setTimeout(function(){document.getElementById('message').innerHTML="";},3000);
}
else if((cc1.toLowerCase()==="first" && cc2.match(/1/) && cc3.toLowerCase().match(/[abc]/i))||(cc1.toLowerCase()==="second" && cc2.match(/2/) && cc3.toLowerCase().match(/[abc]/i))||(cc1.toLowerCase()==="third" && cc2.match(/3/) && cc3.toLowerCase().match(/[abc]/i))||(cc1.toLowerCase()==="fourth" && cc2.match(/4/) && cc3.toLowerCase().match(/[abc]/i))||(cc1.toLowerCase()==="fifth" && cc2.match(/5/) && cc3.toLowerCase().match(/[abc]/i))||(cc1.toLowerCase()==="sixth" && cc2.match(/6/) && cc3.toLowerCase().match(/[abc]/i))||(cc1.toLowerCase()==="seventh" && cc2.match(/7/) && cc3.toLowerCase().match(/[abc]/i))||(cc1.toLowerCase()==="eighth" && cc2.match(/8/) && cc3.toLowerCase().match(/[abc]/i))||(cc1.toLowerCase()==="ninth" && cc2.match(/9/) && cc3.toLowerCase().match(/[abc]/i))||(cc1.toLowerCase()==="tenth" && cc2.match(/10/) && cc3.toLowerCase().match(/[abc]/i)))
{
document.getElementById('message1').innerHTML="Class Info Added Successfully!";
setTimeout(function(){document.getElementById('message1').innerHTML="";},3000);
}
else
{
document.getElementById('message').innerHTML="Please check the Information entered!";
setTimeout(function(){document.getElementById('message').innerHTML="";},3000);
}
}
function logout()
{
var r=confirm("Would you like to Log-Out?");
if(r==true)
{
document.getElementById("ida").href="HOME.php";
}
}
</script>
</head>
<body>
<div class="care3">
<a href="#" class="care21">Exam Result Portal | Admin</a>
<a href="#" onclick="logout()" id="ida" class="care4">Logout</a>
</div>
<div class="care9">
<div class="care" style='height:33em'>
<div class="caree"> 
<h2 class="care10">Main Category</h2>
</div>
<ul>
<li>
<a href="Student Result Management System _ Dashboard2.php" class="care2">Dashboard</a>
</li>
</ul>
<div class="caree"> 
<h2 class="care10">Appearance</h2>
</div>
<ul>
<li>
<acronym title="Click here for Student & Class Information"><a href="#" class="care2" id="id1">Student & Classes Info</a></acronym>
<ul class="ul1" id="id2">
<li>
<acronym title="Click here for Class Info"><a href='view-class-info.php' class='care2'>Class Info</a></acronym>
</li>
<li>
<acronym title="Click here to View Student Info"><a href='view-student-info.php' class='care2'>Student Info</a></acronym>
</li>
</ul>
</li>
<li>
<acronym title="Click here for Subjects Information and Management"><a href="#" class="care2" id="id3">Subjects Info</a></acronym>
<ul class="ul1" id="id4">
<li>
<acronym title="Click here to View Subjects"><a href="view-subjects.php" class="care2">View Subjects</a></acronym>
</li>
<li>
<acronym title="Click here to Add Subjects"><a href="create-subject.php" class="care2">Add Subjects</a></acronym>
</li>
</ul>
</li>
<li>
<acronym title="Click here for Student Information and Management"><a href="#" class="care2" id="id5">Admission Related</a></acronym>
<ul class="ul1" id="id6">
<li>
<acronym title="Click here to a New Student Info"><a href="SMS Admin_ Student Admission.php" class="care2">Student Admission</a></acronym>
</li>
<li>
<acronym title="Click here to Manage Student Info"><a href="update-student-info.php" class="care2">Manage Student Info</a></acronym>
</li>
</ul>
</li>
<li>
<acronym title="Click here for Student Result Information and Management"><a href="#" class="care2" id="id7">Result Info</a></acronym>
<ul class="ul1" id="id8">
<li>
<acronym title="Click here To Add Results And Publish"><a href="SMS Admin_ Add Result.php" class="care2">Add Result</a></acronym>
</li>
<li>
<acronym title="Click here to Update Results"><a href="update-result.php" class="care2">Update Result</a></acronym>
</li>
<li>
<acronym title="Click here to View Results"><a href="view-result.php" class="care2">View Result</a></acronym>
</li>                                          
</ul>
</li>
<li>
<acronym title="Click here for Changing Admin Password"><a href="change-password.php" class="care2">Admin Change Password</a></acronym>
</li>
</ul>
</div>
</div>
<div class="care6" id='ht' style='height:15em'>
<div class="care7">
<h2>Class Info</h2>
</div>
<div class="care8">
<a href="Student Result Management System _ Dashboard2.php" class="care2">Home</a>                           
<h2>Class Info</h2>
<form method="POST" name="createclass">
Class:
<select name="class">
<option value="" selected disabled>Select Class</option>
<?php
for($i=1;$i<=10;$i++)
{
echo "<option value='".$i."'>".$i."</option>";
}
?>
</select>
Section:
<select name="section">
<option value="" selected disabled>Select Section</option>
<?php
echo "<option value='A'>A</option>";
echo "<option value='B'>B</option>";
echo "<option value='C'>C</option>";
?>
</select>
<div class='abcd'>
<input style='color:PapayaWhip;background-color:MediumVioletRed' type="submit" value="Show" name="show">
</div>
</form>
</div>
<div style='margin-top:11em;'>
<?php
if(isset($_POST["show"]))
{
error_reporting(0);
$sc=$_POST["class"];
$ss=$_POST["section"];
if($sc==""||$ss=="")
{
echo "<p id='message' style='color:MediumVioletRed'>Please Select Class and Section!</p>";
echo "<script>setTimeout(function(){document.getElementById('message').innerHTML='';},3000)</script>";
}
else
{
$servername="localhost";
$username="root";
$password="";
$dbname="iwp";
$conn=mysqli_connect($servername,$username,$password,$dbname);
if(!$conn)
{
die("Connection failed:".mysqli_connect_error());
}
$sql="SELECT Roll_Id,Student_Name from student WHERE Class=$sc AND Section='$ss'";
$result=mysqli_query($conn,$sql);
if(mysqli_num_rows($result)>0)
{
$a=1;
echo "<table style='border-collapse:collapse;border:1px solid black'><tr style='border:1px solid black'><th style='border:1px solid black'>Sl.No</th><th style='border:1px solid black'>Student ID</th><th style='border:1px solid black'>Student Name</th></tr>";
while($row=mysqli_fetch_assoc($result))
{
echo "<tr style='border:1px solid black'><td style='border:1px solid black'>".$a."</td><td style='border:1px solid black'>".$row['Roll_Id']."</td><td style='border:1px solid black'>".$row['Student_Name']."</td></tr>";
$a++;
}
echo "</table>";
$a=$a*1.5;
$height=$a+15;
echo "<script>document.getElementById('ht').style.height='".$height."em';</script>";
}
}
}
?>
</div>
</div>
</body>
</html>