<!DOCTYPE html>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Exam Result Page</title>
<link rel="stylesheet" href="b.css" type="text/css"/>
<script>
function func()
{
window.print()
}
function logout()
{
var r=confirm("Would you like to Log-Out?");
if(r==true)
{
document.getElementById("ida").href="studentlogin.php";
}
}
</script>
</head>
<body>
<div class="care2">
<h2 class="care1">Exam Result Portal</h2>
<div class="div2">
<a href="#" onclick="logout()" id="ida">Log Out</a>
</div>
</div>
<div class="care3" style='height:38em'>
<div class="care4">
<h3 class="care5">Student Result Details</h3>
</div>
<p class="care"><b>Student Name :</b><?php 
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
$sql="SELECT Student_Name from student WHERE Roll_Id='$sid'";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($result);
echo $row['Student_Name'];
?></p>
<p class="care"><b>Student Roll Id :</b><?php $id=$_POST['studentid'];echo " ".$id; ?></p>
<p class="care"><b>Student Class:</b><?php 
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
$sql="SELECT Class,Section from student WHERE Roll_Id='$sid'";
$result=mysqli_query($conn,$sql);
if(mysqli_num_rows($result)>0)
{
while($row=mysqli_fetch_assoc($result))
{
echo " ".$row["Class"]."-".$row["Section"];
}
}
?></p>
<div class="care7">
<table>
<tr>
<th class="th1">#</th>
<th class="th1">Subject</th>    
<th class="th1">Marks</th>
</tr>
<tr>
<th>1</th>
<td>Computer</td>
<td><?php
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
$sql="SELECT Computer from results WHERE Roll_Id='$sid'";
$result=mysqli_query($conn,$sql);
if(mysqli_num_rows($result)>0)
{
while($row=mysqli_fetch_row($result))
{
print_r($row[0]);
}
}
?></td>
</tr>
<tr>
<th>2</th>
<td>English</td>
<td><?php
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
$sql="SELECT English from results WHERE Roll_Id='$sid'";
$result=mysqli_query($conn,$sql);
if(mysqli_num_rows($result)>0)
{
while($row=mysqli_fetch_row($result))
{
print_r($row[0]);
}
}
?></td>
</tr>
<tr>
<th>3</th>
<td >Hindi</td>
<td><?php
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
$sql="SELECT Hindi from results WHERE Roll_Id='$sid'";
$result=mysqli_query($conn,$sql);
if(mysqli_num_rows($result)>0)
{
while($row=mysqli_fetch_row($result))
{
print_r($row[0]);
}
}
?></td>
</tr>
<tr>
<th>4</th>
<td>Science</td>
<td><?php
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
$sql="SELECT Science from results WHERE Roll_Id='$sid'";
$result=mysqli_query($conn,$sql);
if(mysqli_num_rows($result)>0)
{
while($row=mysqli_fetch_row($result))
{
print_r($row[0]);
}
}
?></td>
</tr>
<tr>
<th>5</th>
<td>Social</td>
<td><?php
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
$sql="SELECT Social from results WHERE Roll_Id='$sid'";
$result=mysqli_query($conn,$sql);
if(mysqli_num_rows($result)>0)
{
while($row=mysqli_fetch_row($result))
{
print_r($row[0]);
}
}
?></td>
</tr>
<tr>
<th colspan="2">Total Marks</th>
<td><b><?php
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
$sql="SELECT Total from results WHERE Roll_Id='$sid'";
$result=mysqli_query($conn,$sql);
if(mysqli_num_rows($result)>0)
{
while($row=mysqli_fetch_assoc($result))
{
echo $row['Total'];
}
}
?></b> OUT OF <b>500</b></td>
</tr>
<tr>
<th colspan="2">Percentage</th>           
<td><b><?php
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
$sql="SELECT Percentage from results WHERE Roll_Id='$sid'";
$result=mysqli_query($conn,$sql);
if(mysqli_num_rows($result)>0)
{
while($row=mysqli_fetch_assoc($result))
{
echo $row['Percentage']."%";
}
}
?></td>
</tr>
</table>
<div class="div1">
<button onclick="func()">Print Result</button>
</div>
</tr>
</table>
</body>
</html>