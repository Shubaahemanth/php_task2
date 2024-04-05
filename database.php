<?php
$n=$_POST['stname'];
$c=$_POST['stclass'];
$con=mysqli_connect("phpapp-db.cxowmomm6bcy.ap-south-1.rds.amazonaws.com","phpdbuser","phpadmin","studentdb");
$sql="INSERT INTO student(name,class) values('$n','$c')";
$r=mysqli_query($con,$sql);
if($r)
{
    echo"student details added successfully";
}
else{
    echo"student details not added";
}
?>
