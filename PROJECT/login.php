<?php
session_start();
?>

<html lang="en">

    <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible"content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Login Page</title>

      <link  href="login.css" rel="stylesheet">
    </head>
    <body>
        <div  class="wrapper" >
            <span class="icon-close"><ion-icon name="close"></ion-icon>
            </span>
            <div class="form-box login">
                <h2>Student Login</h2>
                <form action="result.php" method="POST">
                    <div class="input-box">
                      <span class="icon"><ion-icon name="person"></ion-icon></span>
                      <input type="text" name="rollno" required>
                      <label>REGISTER NUMBER</label>       
                   </div>
                   <div class="input-box">
                       <span class="icon"><ion-icon name="lock-closed"></ion-icon></span>
                       <input type="password" name="class" required>
                       <label>DEPARTMENT</label>
                   </div>
                   <div class="remember-forgot">
                     <label><input type="checkbox">
                      Remember me</label>
                      <a href="forgot.html">Forgot Password?</a>
                   </div>
                     <button type="submit" class="btn" name="submit" >Login</a></button>
                   <div class="login-register">
                     <p>Don't have an account?<a href="register.html">Register</a></p>
                   </div>
               </form>
           </div>
           
      </div>
      <script src="script.js"></script>
      <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
      <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
  </body>
</html>

<?php
$server_name="localhost";
$username="root";
$password="";
$database_name="student";
 
 $conn=mysqli_connect($server_name,$username,$password,$database_name);
 
 if(isset($_POST['save']))
 {
  $username=$_POST['rollno'];
  $password=$_POST['class'];
  $sql_query="SELECT * FROM `register` WHERE `rollno`='$username' AND `class`='$password'";

  $run=mysqli_query($conn,$sql_query);
  $row=mysqli_num_rows($run);
  if($row<1)
  {
      ?>
      <script>
      alert('NO ACCOUNT REGISTERED KINDLY PLEASE REGISTER NOW');
      window.open('register.html','_self');
      </script>
     <?php
  }
  else
  {
      $data=mysqli_fetch_assoc($run);
      $username=$data['rollno'];
      header('location:result.php');
  }
}
?>
