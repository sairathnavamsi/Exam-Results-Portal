<!DOCTYPE html>
<html lang="en" >
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<link rel="stylesheet" href="m.css" type="text/css"/>
<title>View Admins Registered</title>
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
<div class="care6"  style="height:25em">
<div class="care7">
<h2>Registered Admins</h2>
</div>
<table style='border-collapse:collapse;margin-top:10px;padding:5px;border:1px solid black;'>
<tr style='padding:5px;border:1px solid black;'>
<th style='padding:5px;border:1px solid black;'>Sl.No</th>
<th style='padding:5px;border:1px solid black;'>Admin Id</th>
<th style='padding:5px;border:1px solid black;'>Name</th>
</tr>
<?php
$servername="localhost";
$username="root";
$password="";
$dbname="iwp";
$conn=mysqli_connect($servername,$username,$password,$dbname);
if(!$conn)
{
die("Connection failed:".mysqli_connect_error());
}
$sql="SELECT Id,UserName from admin";
$result=mysqli_query($conn,$sql);
if(mysqli_num_rows($result)>0)
{
$i=0;
while($row=mysqli_fetch_assoc($result))
{
echo "<tr style='border:1px solid black;padding:5px;'><td style='border:1px solid black;padding:5px;'>".($i+1)."</td><td style='border:1px solid black;padding:5px;'>".$row['Id']."</td><td style='border:1px solid black;padding:5px;'>".$row['UserName']."</td><tr>";
$i=$i+1;
}
}
else
{
echo "<p style='color:MediumVioletRed'>No Subjects Added!</p>";
}
?>
</table>
</div>
</body>
</html>