<?php

$server_name="localhost";
$username="root";
$password="";
$database_name="student";
 
 $conn=mysqli_connect($server_name,$username,$password,$database_name);

if(isset($_POST['save1']))
{ 
    $name=$_POST['name'];
    $class=$_POST['class'];
    $rollno=$_POST['rollno'];
    $year=$_POST['year'];
    $father=$_POST['father'];
    $mother=$_POST['mother'];
    $mobile=$_POST['mobile'];
    $village=$_POST['village'];
    
    $imagename=$_FILES['img']['name'];
    $tempname=$_FILES['img']['tmp_name'];
    move_uploaded_file($tempname,"./dataimg/$imagename");
    
    $sql="INSERT INTO `data`(`name`, `class`, `rollno`,`year`, `father`, `mother`, `mobile`, `village`, `img`) VALUES ('$name','$class','$rollno','$year','$father','$mother','$mobile','$village','$imagename')";
    $run=mysqli_query($conn,$sql);
    if($run)
    {
        ?>
        <script>
        alert('1step Complete and this is second  Step');
        window.open('addmark2.php','_self');
        </script>
        <?php
    }
    else
    {
       ?>
        <script>
        alert('Failed');
        </script>
        <?php 
    }
}

?>