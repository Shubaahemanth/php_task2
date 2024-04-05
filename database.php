<?php
$n=$_POST['stname'];
$c=$_POST['stclass'];
$con=mysqli_connect("localhost","root"," ","mydata");
$sql="INSERT INTO data(name,class) values('$n','$c')";
$r=mysqli_query($con,$sql);
if($r)
{
    echo"student details added successfully";
}
else{
    echo"student details not added";
}
?>
