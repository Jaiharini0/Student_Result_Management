<!DOCTYPE html>

<html lang="en">

  <head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible"content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>STUDENT DETAILS</title>

   <link  href="detail.css" rel="stylesheet">
  </head>
  <body>
      <header>
         <h2 class="logo">STUDENT MANAGEMENT</h2>
      </header>
      <div  class="wrapper" >
        <span class="icon-close"><ion-icon name="close"></ion-icon>
        </span>
        <div class="form-box login">
            <h2>Admin Login</h2>
            <form action="detail.php" method="POST" >
                <div class="input-box">
                  <span class="icon"><ion-icon name="person"></ion-icon></span>
                  <input type="text" name="username" required>
                  <label>Username</label>       
               </div>
               <div class="input-box">
                   <span class="icon"><ion-icon name="lock-closed"></ion-icon></span>
                   <input type="password" name="password" required>
                   <label>Password</label>
               </div>
                <button type="submit" class="btn" name="save" >Login</a></button>
           </form>
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
   
    $username=$_POST['username'];
    $password=$_POST['password'];
    $qry="SELECT * FROM `admin` WHERE `username`='$username' AND `password`='$password'";
    $run=mysqli_query($conn,$qry);
    $row=mysqli_num_rows($run);
    if($row<1)
    {
        ?>
        <script>
        alert('Username or Password Not Match');
        window.open('detail.php','_self');
        </script>
       <?php
    }
    else
    {
        $data=mysqli_fetch_assoc($run);
        header('location:page.html');
    }
  }
 ?>


