<!DOCTYPE html>
<html lang="en" style="">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<link rel="stylesheet" href="e.css" type="text/css"/>
<title>Add Result</title>
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

setTimeout(function(){document.getElementById('a').innerHTML="";},3000);
setTimeout(function(){document.getElementById('a1').innerHTML="";},3000);
setTimeout(function(){document.getElementById('a2').innerHTML="";},3000);
setTimeout(function(){document.getElementById('a11').innerHTML="";},3000);
function validate1()
{
var sc=document.getElementById("sclass").value;
var si=document.getElementById("ssection").value;
var sid=document.getElementById("sid").value;
if(sc===""||si===""||sid==="")
{
document.getElementById("message").innerHTML="Please Select Class and Student Id!";
setTimeout(function(){document.getElementById('message').innerHTML="";},3000);
}
else
{
$(".div2").toggleClass("div1");
$(".div1").toggleClass("div2");
}
}
function validate()
{
var em1=document.marks.em.value;
var mm1=document.marks.mm.value;
var cm1=document.marks.cm.value;
var hm1=document.marks.hm.value;
var sm1=document.marks.sm.value;
if(em1===""||hm1===""||sm1===""||cm1===""||mm1==="")
{
document.getElementById('message').innerHTML="Please Enter all the fields!";
setTimeout(function(){document.getElementById('message').innerHTML="";},3000);
}
else
{
document.getElementById('message1').innerHTML="Class Info Added Successfully!";
setTimeout(function(){document.getElementById('message1').innerHTML="";},3000);
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
<h2>Declare Result</h2>
</div>
<div class="care8">
<a href="Student Result Management System _ Dashboard2.php" class="care2">Home</a>                             
<h2>Declare Result info</h2>
<form name="marks" method="POST">
<label>Class</label>
<select id="sclass" name="sclass">
<option value="" disabled selected>Select Class</option>
<?php
for($i=1;$i<=10;$i++)
{
echo "<option value='".$i."'>".$i."</option>";
}
?>
</select>
<label>Section</label>
<select id="ssection" name="ssection">
<option value="" disabled selected>Select Section</option>
<option value="A">A</option>
<option value="B">B</option>
<option value="C">C</option>
</select>
<label>Student Id:</label><input type="text" name="sid" id="sid" placeholder="Student Id">
<div class="div1">
<h3>Subjects</h3>
<p><pre>     English:<input type="text" value="" name="em" placeholder="Enter marks out of 100"></pre></p>
<p><pre>       Social:<input type="text" name="mm"  value="" placeholder="Enter marks out of 100"></pre></p>
<p><pre>        Hindi:<input type="text" name="hm"  value="" placeholder="Enter marks out of 100"></pre></p>
<p><pre>   Science:<input type="text" name="sm"  value="" placeholder="Enter marks out of 100"></pre></p>
<p><pre>Computer:<input type="text" name="cm"  value="" placeholder="Enter marks out of 100"></pre></p>
</div>
<div class="div1">
<input type="submit" name="submit" id="submit" onclick="validate()" value="Publish Result">
</div>
</form>
<p id="message"></p>
<p id="message1"></p>
<div class="div2">
<button onclick="validate1()" name="next">Next</button>
</div>
</div>
</div>
</body>
</html>
<?php
if(isset($_POST["submit"]))
{
$servername="localhost";
$username="root";
$password="";
$dbname="iwp";
$conn=mysqli_connect($servername,$username,$password,$dbname);
if(!$conn)
{
die("Connection Failed:".mysqli_connect_error());
}
$class=$_POST["sclass"];
$sec=$_POST["ssection"];
$sid=$_POST["sid"];
$cm=$_POST["cm"];
$em=$_POST["em"];
$hm=$_POST["hm"];
$sm=$_POST["sm"];
$mm=$_POST["mm"];
$date=date("Y/m/d H:i:s");
$sql="SELECT Roll_Id,Class,Section from student WHERE Class=$class AND Roll_Id='$sid' AND Section='$sec'";
$result=mysqli_query($conn,$sql);
if(mysqli_num_rows($result)!==1)
{
echo "<p id='a2' style='color:MediumVioletRed'>Student ".$sid." Doesn't belong to Class ".$class." Section ".$sec." !</p>";
}
else
{
$sql1="INSERT INTO results (Roll_Id,Class,Section,Computer,English,Hindi,Science,Social,Updation_Date)
VALUES('$sid',$class,'$sec',$cm,$em,$hm,$sm,$mm,'$date')";
if(mysqli_query($conn,$sql1))
{
echo "<p id='a' style='color:MediumVioletRed'>Marks Added Successfully!</p>";
}
else
{
echo "<p id='a1' style='color:MediumVioletRed'>Error Occured!</p>";
echo "<p id='a11' style='color:MediumVioletRed'>Please Try Again Later!</p>";
}
}
}
?>