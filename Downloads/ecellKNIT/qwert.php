<?php
include_once 'dbConnection.php';?>
<html>
<head>
<title>Stdent Registration Detail</title>
<style>
table,th,td{
 border:1px solid green;
}
 </style>
</head>
<body>
<?php
$event=$_POST["eventlist"];

?>
<table align="center" style="border:1px solid green">
<center><h2>Alumni Registration Detail:</h2><center>
<?php
if($event=='alum'){
echo "<tr>
<th>S.NO</th>
<th>Roll No</th>
<th>NAME</th>
<th>EMAIL</th>
<th>CONTACT</th>
<th>BATCH</th>
<th>BRANCH</th>
<th>SELF EMPLOYED</th>
<th>CURRENT WORKPLACE</th>
<th>COMPANY ADDRESS</th>
<th>RESIDENTAL ADDRESS</th>
<th>LOCAL ADDRESS</th>
</tr>";



$query="SELECT * FROM  `ealumni` WHERE  a_id ='$event' ";
$i=1;
if ($result = mysqli_query($con, $query)) {
while ($row = mysqli_fetch_assoc($result)){
	echo "<tr><td>".$i."</td><td>".$row['rollno']."</td><td>".$row['fname']." ".$row['lname']."</td><td>".$row['email']."</td><td>".$row['phone']."</td><td>".$row['batch']."</td><td>".$row['branch']."</td><td>".$row['selfemp']."</td><td>".$row['cw']."</td><td>".$row['ca']."</td><td>".$row['add_resi']."</td><td>".$row['add_local']."</td></tr>";
	$i=$i+1;
}
}
}
else if($event=='messg'){
echo"<tr>
<th>S.NO</th>
<th>NAME</th>
<th>EMAIL</th>
<th>MESSAGE</th>
</tr>";
$query="SELECT * FROM  `message` ";
$i=1;
if ($result = mysqli_query($con, $query)) {
while ($row = mysqli_fetch_assoc($result)){
	echo "<tr><td>".$i."</td><td>".$row['name']."</td><td>".$row['email']."</td><td>".$row['message']."</td><tr>";
	$i=$i+1;
}
}
}
else if($event=='wks1'){
echo "<tr>
<th>S.NO</th>
<th>Roll No</th>
<th>NAME</th>
<th>BRANCH</th>
<th>YEAR</th>
<th>EMAIL</th>
<th>CONTACT</th>
</tr>";
$query="SELECT * FROM  `workshop` ";
$i=1;
if ($result = mysqli_query($con, $query)) {
while ($row = mysqli_fetch_assoc($result)){
	echo "<tr><td>".$i."</td><td>".$row['rollno']."</td><td>".$row['fname']." ".$row['lname']."</td><td>".$row['branch']."</td><td>".$row['year']."</td><td>".$row['email']."</td><td>".$row['phone']."</td></tr>";
	$i=$i+1;
}
}
}





else {
	echo "ERROR OCCURE IN CONNECTION";
}
?>
 </table>
</body>
</html>