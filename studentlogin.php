<!DOCTYPE html>
<html lang="en" >
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Student Login</title>
<link rel="stylesheet" href="d.css" type="text/css"/>
</head>
<body>
<div class="care" style='height:20em;'>
<div class="care2">
<h4 class="care1">Student Login</h4>
</div>
<p class="care1">Exam Result Portal</p>
<form onsubmit="<?php $self ?>" method="POST" name="login" id='loginform'>
<pre style='font-family:Poppins,sans-serif'>Student_Id:<input class="care11" type="text" name="studentid" value="<?php echo isset($_POST['studentid']) ? htmlspecialchars($_POST['studentid'], ENT_QUOTES) : ''; ?>" placeholder="Student_Id"><br></pre>
<pre style='font-family:Poppins,sans-serif'>Password:<input class="care11" type="password" name="password" value="<?php echo isset($_POST['password']) ? htmlspecialchars($_POST['password'], ENT_QUOTES) : ''; ?>" placeholder="Password"><br></pre>
<div class="care1">
<input type="submit" style='background-color:PapayaWhip;border:none;color:MediumVioletRed;padding:5px;' value="Sign in" name="signin"/>
</div>
Note : Please <a href="student-update-password.php" style='background-color:MediumVioletRed;color:PapayaWhip'><u>Set Password</u></a> If Not Set!<br>
<a href='HOME.php'>Go Back To Home</a>
<p id="message"></p>
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
$sid=$_POST["studentid"];
$pwd=$_POST["password"];
$sql="SELECT Roll_Id,Password from student WHERE Roll_Id='$sid' AND Password='$pwd'";
$result=mysqli_query($conn,$sql);
if(mysqli_num_rows($result)==0)
{
echo "<script>document.getElementById('message').innerHTML='Invalid Credentials!';";
echo "setTimeout(function(){document.getElementById('message').innerHTML='';},3000)</script>";
}
else
{
echo "<script>";
echo "document.getElementById('loginform').action='resultpage.php';";
echo "document.getElementById('loginform').submit();";
echo "</script>";
}
mysqli_close($conn);
}
?>
