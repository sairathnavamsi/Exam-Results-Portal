<!DOCTYPE html>
<html lang="en" >
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Login Page</title>
<link rel="stylesheet" href="a.css" type="text/css"/>
</head>
<body backgroundimage="C:\Users\Anudeep.C.V\Desktop\VIT\F-2-INTERNET AND WEB PROGRAMMING\IWP Project\download.jpg">
<div class="care1">
<h1 align="center">Exam Result Portal</h1>
</div>
<div class="care2">
<div class="care3">
<h4>For Students</h4>
</div>
<p>Exam Result Portal</p>
<div class="care71">
<a class="c" href="studentlogin.php">Search your result</a>
</div>
</div>
<div class="care4">
<div class="care3">
<h4>Admin Login</h4>
</div>
<p>Exam Result Portal</p>
<form method="post" name="login">
Admin ID:<input type="text" class="care5" name="aid" placeholder="Admin ID"><br>
Password :<input type="password" class="care5" name="password" placeholder="Password"><br>
<div class="care7">
<input type="submit" class="c" id="id1" name="signin" value="Sign In"><br>
</div>
<div class="care7a">
<a id="id2" class="d" href="admin_registration.php">New User?Register!</a>
</div>
</form>
</div>
</body>
</html>
<?php
if(isset($_POST["signin"]))
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
$id=$_POST["aid"];
$pwd=$_POST["password"];
$count=0;
$sql="SELECT Id,Password from admin";
$result=mysqli_query($conn,$sql);
if(mysqli_num_rows($result)>0)
{
while($row=mysqli_fetch_assoc($result))
{
if($row["Id"]===$id && $row["Password"]===$pwd)
{
$count=1;
header("Location:Student Result Management System _ Dashboard2.php");
}
}
}
if(mysqli_num_rows($result)===0)
{
echo "<div style='float:right;margin-top:245px;margin-right:-320px;'><p style='color:PapayaWhip;font-size:20px;'>No User Registered!Please Register!</p></div>";
}
else if($count===0)
{
echo "<div style='float:right;margin-top:245px;margin-right:-270px;'><p style='color:PapayaWhip;font-size:20px;'>Invalid Login Credentials!</p></div>";
}
mysqli_close($conn);
}
?>
