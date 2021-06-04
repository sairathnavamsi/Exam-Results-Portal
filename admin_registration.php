<!DOCTYPE html>
<html lang="en" >
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Admin Registration</title>
<link rel="stylesheet" href="l.css" type="text/css"/>
</head>
<body>
<div class="care">
<div class="care2">
<h4 class="care1">Admin Registration</h4>
</div>
<p class="care1">Admin Registration Portal</p>
<form method="POST" name="login" action="<?php $self ?>">
<pre>                 Admin Id:<input class="care11" type="text" name="aid" placeholder="Admin_Id" required="required"><br></pre>
<pre>               UserName:<input class="care11" type="text" name="username" placeholder="UserName" required="required"><br></pre>
<pre>              Password :<input class="care11" type="password" name="password" placeholder="Password" required="required"><br></pre>
<pre>Confirm Password :<input class="care11" type="password" name="cpassword" placeholder="Confirm Password" required="required"><br></pre>
<div class="care1a">
<input type="submit" name="createadmin" id='id1' value="Create Admin">
</div>
</form>
<p id="message"></p>
<div class="care1a">
<a href="HOME.php" id='id2'>Go Back</a>
</div>
</div>
</body>
</html>
<?php
if(isset($_POST["createadmin"]))
{
$servername="localhost";
$username="root";
$password="";
$dbname="iwp";
$conn=mysqli_connect($servername,$username,$password,$dbname);
if(!$conn){
die("Connection failed:".mysqli_connect_error());
}
$id=$_POST["aid"];
$un=$_POST["username"];
$pwd=$_POST["password"];
$cpwd=$_POST["cpassword"];
$rid="/^2021[0-9]{3}$/";
date_default_timezone_set('Asia/Kolkata');
$dat=date("Y/m/d H:i:s");
if(preg_match($rid,$id)===1)
{
if($pwd==$cpwd)
{
$sql="INSERT INTO admin (Id,UserName,Password,UpdationDate)
VALUES($id,'$un','$pwd','$dat')";
if(mysqli_query($conn,$sql))
{
echo "<div style='margin-top:-100px;margin-left:85px'><p style='color:PapayaWhip'>New User Registered Successfully!</p></div>";
}
else
{
echo "<div style='margin-top:-100px;margin-left:85px'><p style='color:PapayaWhip'>Admin already registered!</p></div>";
}
}
else
{
echo "<div style='margin-top:-100px;margin-left:85px'><p style='color:PapayaWhip'>Passwords Does't match!</p></div>";
}
}
else
{
echo "<div style='margin-top:-100px;margin-left:85px'><p style='color:PapayaWhip'>Enter Valid AdminID!</p></div>";
}
}
?>