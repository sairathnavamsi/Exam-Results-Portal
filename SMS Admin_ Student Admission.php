<!DOCTYPE html>
<head>
<html lang="en" >
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<link rel="stylesheet" href="f.css" type="text/css"/>
<title>Student Admission</title>
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
<a href="#" class="care4" onclick="logout()" id="ida">Logout</a>
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
<div class="care6">
<div class="care7">
<h2>Student Admission</h2>
</div>
<div class="care8">
<a href="Student Result Management System _ Dashboard2.php" class="care2">Home</a>  
<h2>Student Admission</h2>                          
<h5>Fill the Student info</h5>
<form method="POST" name="student" action="<?php $self ?>">
<pre>Full Name:<input type="text" name="fullname" required="required"><br></pre>
<pre>Roll Id:<input type="text" name="rollid" required="required"><br></pre>
<pre>Email Id:<input type="email" name="emailid" required="required"><br></pre>
<pre>Gender:<input type="radio" name="gender" value="Male" required="required">Male</input><input type="radio" name="gender" value="Female" required="required">Female </input><input type="radio" name="gender" value="Other" required="required">Other</input><br></pre>
<pre>Class<select name="class">
<option value="" disabled selected>Select Class</option>
<?php
for($i=1;$i<=10;$i++)
{
echo "<option value='".$i."'>".$i."</option>";
}
?>
</select><br></pre>
<pre>Section<select name="section">
<option value="" disabled selected>Select Section</option>
<option value="A">A</option>
<option value="B">B</option>
<option value="C">C</option>
</select><br></pre>
<pre>DOB<input type="date" name="dob" required="required"><br></pre>
<input type="submit" class="button" name="add" value="Add">
</form>
</div>
</div>
</body>
</html>
<?php
if(isset($_POST["add"]))
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
$fn=$_POST["fullname"];
$rid=$_POST["rollid"];
$eid=$_POST["emailid"];
$gen=$_POST["gender"];
$cls=$_POST["class"];
$sec=$_POST["section"];
$db=$_POST["dob"];
$dat=date("Y/m/d H:i:s");
$pat="/^([1-9]|[1][0])[A-C][0-9]{3}$/";
if(preg_match($pat,$rid)===1)
{
$sql="INSERT INTO student (Roll_Id,Student_Name,Email_Id,Class,Gender,DOB,Section,UpdationDate)
VALUES('$rid','$fn','$eid','$cls','$gen','$db','$sec','$dat')";
if(mysqli_query($conn,$sql))
{
echo "<div style='margin-left:325px;'><p style='color:MediumVioletRed;'>Student Admitted Successfully!</p></div>";
}
else
{
echo "<div style='margin-left:325px;'><p style='color:MediumVioletRed;'>Please Select different Roll_Id!</p></div>";
}
}
else
{
echo "<div style='margin-left:325px;'><p style='color:MediumVioletRed;'>Please enter valid Roll Id!</p></div>";
}
}
?>