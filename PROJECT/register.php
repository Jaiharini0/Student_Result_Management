<?php
$server_name="localhost";
$username="root";
$password="";
$database_name="student";
 
 $conn=mysqli_connect($server_name,$username,$password,$database_name);
 
 

 if(isset($_POST['submit']))
 {
  $username=$_POST['rollno'];
  $email=$_POST['email'];
  $password=$_POST['class'];
$sql_query="INSERT INTO register(rollno,email,class) VALUES('$username','$email','$password')";

if(mysqli_query($conn,$sql_query)){

  ?>
      <script>
      alert('REGISTRATION COMPLETED SUCCESSFULLY');
      window.open('login.php','_self');
      </script>
     <?php
}
else{
  echo "ERROR:".$sql."".mysqli_error($conn);
 }
mysqli_close($conn);
    
 }
 
  
?>