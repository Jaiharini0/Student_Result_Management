<?php

$server_name="localhost";
$username="root";
$password="";
$database_name="student";
 
 $conn=mysqli_connect($server_name,$username,$password,$database_name);

if(isset($_POST['save']))
{
    $class=$_POST['class'];
    $rollno=$_POST['rollno'];
    $sql2="SELECT * FROM `data` WHERE `class`='$class'  AND `rollno`='$rollno' ";
    $run1=mysqli_query($conn,$sql2);
if($data=mysqli_fetch_assoc($run1))
{
    $toc1=$_POST['toc1'];
    $daa1=$_POST['daa1'];
    $dbms1=$_POST['dbms1'];
    $aiml1=$_POST['aiml1'];
    $os1=$_POST['os1'];
    $ess1=$_POST['ess1'];
    $toc2=$_POST['toc2'];
    $daa2=$_POST['daa2'];
    $dbms2=$_POST['dbms2'];
    $aiml2=$_POST['aiml2'];
    $os2=$_POST['os2'];
    $ess2=$_POST['ess2'];
    
    $sql="INSERT INTO `mark`(`rollno`,`class`,`toc1`, `daa1`, `dbms1`, `aiml1`, `os1`,`ess1`,`toc2`,`daa2`, `dbms2`, `aiml2`, `os2`, `ess2`) VALUES ('$rollno','$class','$toc1','$daa1','$dbms1','$aiml1','$os1','$ess1','$toc2','$daa2','$dbms2','$aiml2','$os2','$ess2')";
    
    $run=mysqli_query($conn,$sql);
    if($run)
    {
        ?>
        <script>
        alert('Data Inserted Succesfully');
        window.open('page.html?sid=<?php echo $rollno; ?>', '_self');
        </script>
        <?php
    }
}
}
?>