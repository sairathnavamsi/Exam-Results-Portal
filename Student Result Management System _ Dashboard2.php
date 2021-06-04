<!DOCTYPE html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Home</title>
<link rel="stylesheet" href="c.css">
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
document.getElementById("id9").href="HOME.php";
}
}
</script>
</head>
<body>
<div class="care3">
<a href="#" class="care21">Exam Result Portal | Admin</a>
<a href="#" onclick="logout()" class="care4" id="id9">Logout</a>
</div>
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
$date=date('Y/m/d');
$sql="SELECT * FROM student WHERE DOB='$date'";
$result=mysqli_query($conn,$sql);
if(mysqli_num_rows($result)>=1)
{
echo "<div style='background-color:MediumVioletRed'><marquee style='color:#88B04B'>Students Celebrating Birthday Today!</marquee>";
while($row=mysqli_fetch_assoc($result))
{
echo "<marquee style='color:White'>Name : ".$row['Student_Name'].", Class : ".$row['Class'].", Section : ".$row['Section']."</marquee>";
}
}
echo "</div>";
?>
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
<div class="care6">
<div class="care7">
<h2>Dashboard</h2>
</div>                  
<div class="care8">         
<a class="care1" href="view-admin.php" name='regd'>
<span><?php
$servername="localhost";
$username="root";
$password="";
$dbname="iwp";
$conn=mysqli_connect($servername,$username,$password,$dbname);
if(!$conn)
{
die("Connection failed:".mysqli_connect_error());
}
$sql="SELECT * from admin";
$result=mysqli_query($conn,$sql);
$num=mysqli_num_rows($result);
echo $num;
?></span>
<span>Regd Users</span>
</a>
</div>
<div class="care8">
<a class="care11" href="view-subjects.php">
<span><?php
$servername="localhost";
$username="root";
$password="";
$dbname="iwp";
$conn=mysqli_connect($servername,$username,$password,$dbname);
if(!$conn)
{
die("Connection failed:".mysqli_connect_error());
}
$sql="SELECT * from subjects";
$result=mysqli_query($conn,$sql);
$num=mysqli_num_rows($result);
echo $num;
?></span>
<span>Subjects Listed</span>
</a>
</div>
<div class="care8">
<a class="care111" href="view-class.php" name='cls'>
<span>30</span>
<span>Total classes listed</span>
</a>
</div>
<div class="care8">
<a class="care1111" href="#">
<span><?php
$servername="localhost";
$username="root";
$password="";
$dbname="iwp";
$conn=mysqli_connect($servername,$username,$password,$dbname);
if(!$conn)
{
die("Connection failed:".mysqli_connect_error());
}
$sql="SELECT * from results";
$result=mysqli_query($conn,$sql);
$num=mysqli_num_rows($result);
echo $num;
?></span>
<span>Results Declared</span>
</a>
</div>
<div class="care8">         
<a class="care1" href="#" name='regd'>
<span><?php
$servername="localhost";
$username="root";
$password="";
$dbname="iwp";
$conn=mysqli_connect($servername,$username,$password,$dbname);
if(!$conn)
{
die("Connection failed:".mysqli_connect_error());
}
$sql="SELECT * from student";
$result=mysqli_query($conn,$sql);
$num=mysqli_num_rows($result);
echo $num;
?></span>
<span>Total students</span>
</a>
</div>
</div>
</div>
</body>
</html>