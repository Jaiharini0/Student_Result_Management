<?php
$server_name="localhost";
$username="root";
$password="";
$database_name="student";
 
 $conn=mysqli_connect($server_name,$username,$password,$database_name);


    $rollno=$_REQUEST['sid']; 
    
    $sql1="DELETE FROM `mark` WHERE `rollno`='$rollno';";

    $sql2="DELETE FROM `data` WHERE `rollno`='$rollno';";
    $run=mysqli_query($conn,$sql1);

    $run=mysqli_query($conn,$sql2);
    if($run==true)
    {
        ?>
        <script>
        window.open('deleteform.php?sid=<?php echo $rollno; ?>', '_self');
        </script>
        <?php
    }

?>