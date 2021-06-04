<!DOCTYPE html>
<html lang="en" >
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Student Login</title>
<link rel="stylesheet" href="d.css" type="text/css"/>
</head>
<body>
<div class="care" style='height:22em;'>
<div class="care2">
<h4 class="care1">Student Login</h4>
</div>
<p class="care1">Exam Result Portal</p>
<form method="POST" name="login" id='loginform'>
<pre style='font-family:Poppins,sans-serif'>            Student_Id:<input class="care11" type="text" name="studentid" value="<?php echo isset($_POST['studentid']) ? htmlspecialchars($_POST['studentid'], ENT_QUOTES) : ''; ?>" placeholder="Student_Id" required="required"><br></pre>
<pre style='font-family:Poppins,sans-serif'>              Password:<input class="care11" type="password" name="password" value="<?php echo isset($_POST['password']) ? htmlspecialchars($_POST['password'], ENT_QUOTES) : ''; ?>" placeholder="Password" required="required"><br></pre>
<pre style='font-family:Poppins,sans-serif'>Confirm Password:<input class="care11" type="password" name="confirmpassword" value="<?php echo isset($_POST['confirmpassword']) ? htmlspecialchars($_POST['confirmpassword'], ENT_QUOTES) : ''; ?>" placeholder="Confirm-Password" required="required"><br></pre>
<div class="care1">
<input type="submit" style='background-color:PapayaWhip;border:none;color:MediumVioletRed;padding:5px;' value="Set Password" name="sp"/>
</div>
<a href='studentlogin.php'>Go Back To Student Login</a>
<p id="message"></p>
</form>
</div>
</body>
</html>
<?php
if(isset($_POST["sp"]))
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
$sid=$_POST["studentid"];
$pwd=$_POST["password"];
$cpwd=$_POST["confirmpassword"];
if($pwd!=$cpwd)
{
echo "<script>document.getElementById('message').innerHTML='Please Confirm Password!';</script>";
}
else
{
$sql1="SELECT Password FROM student WHERE Roll_Id='$sid'";
$result=mysqli_query($conn,$sql1);
$row=mysqli_fetch_assoc($result);
if($row['Password']!='')
{
echo "<script>document.getElementById('message').innerHTML='Password Already Exists!';</script>";
}
else
{
$sql="UPDATE student SET Password='$pwd' WHERE Roll_Id='$sid'";
if(mysqli_query($conn,$sql))
{
echo "<script>document.getElementById('message').innerHTML='Password Set!';</script>";
}
else
{
echo "<script>document.getElementById('message').innerHTML='Password Already Exixts!';</script>";
}
}
}
mysqli_close($conn);
}
?>