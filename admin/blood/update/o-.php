<?php
session_start();

$con= mysqli_connect('localhost', 'root', '');
mysqli_select_db($con,'blood_bank');
$Bloodname=$_POST['bloodgroup'];
$availability=$_POST['Availibility'];
$unit=$_POST['unit'];
$hos=$_POST['hospital'];
$s = "select * from bloodgroup where Bloodname= '$Bloodname'";
$result = mysqli_query($con, $s);
$num = mysqli_fetch_row($result);
// if($num==true)
// {
// 	echo "<script>alert('These type of blood entry is already done')</script>";
// }
//  elseif ($unit==null && $Bloodname==null)
//     {
//        echo"Please fill all the fields.";
//       exit();
//    } 
 

// else
// {
   $del="DELETE FROM bloodgroup WHERE Bloodname==$Bloodname";

$reg="insert into bloodgroup (bloodid, Bloodname, Availibility,unit,hospital) values ('','$Bloodname','$availability','$unit','$hos')";
mysqli_query($con,$reg);
 echo "<script>alert('Entry is Successfull')</script>";
 
   header("location:../../bloodupdate.php");
 
            ?>
    