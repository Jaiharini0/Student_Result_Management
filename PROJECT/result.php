<?php
session_start();
?>
<?php
$server_name="localhost";
$username="root";
$password="";
$database_name="student";
 
 $conn=mysqli_connect($server_name,$username,$password,$database_name);

 if(isset($_POST['submit']))
 {
    
   $rollno=$_POST['rollno'];
   $class=$_POST['class'];

	$sql="SELECT * FROM `data` WHERE `rollno`='$rollno' AND `class`='$class'";
    $sql2="SELECT * FROM `mark` WHERE `rollno`='$rollno' AND `class`='$class'";

 $run=mysqli_query($conn,$sql);
 $run2=mysqli_query($conn,$sql2);
   $row=mysqli_num_rows($run2);
   $data2=mysqli_fetch_assoc($run2);
       
if(mysqli_num_rows($run)>0)
{
$data=mysqli_fetch_assoc($run);
?>


<html lang="en">

  <head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible"content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>STUDENT DETAILS</title>

   <link  href="result.css" rel="stylesheet">
  </head>
  <body>
      <header>
         <h2 class="logo">STUDENT RESULT</h2>
            <nav class="navigation">
                <button class="btnLogin-popup"><a href="user.html">LOGOUT</a></button>
            </nav>
      </header>
      <div class="main-content-header">
        <form method="POST" action="result.php">
          <table class="table">
              <img src="./dataimg/<?php  echo $data['img' ]; ?>" class="image2" /> 
              <tr>
              <th>Name :</th>
                <td><?php echo $data['name'] ?></td>
              </tr>
              <tr>
              <th>Department :</th>
              <td><?php echo $data2['class']; ?></td>
              </tr>
              <tr>
              <th>Register.No :</th>
              <td><?php echo $data['rollno']; ?></td>
              </tr>
              <tr>
          </table>
          <table class="table2">
              <tr>
               <th>Suject</th><th>IAT-1 </th><th>IAT-2</th><th>Total</th><th>Max. Marks</th>
              </tr>
              <tr>
                  
              <th>TOC</th>
                <th><?php echo $data2['toc1']; ?></th>
                <th><?php echo $data2['toc2']; ?></th>
                <th><?php echo $total1=$data2['toc1']+$data2['toc2']; ?> </th>
                <th>200</th>
              </tr>
              <tr>  
              <th>DAA</th>
                <th><?php echo $data2['daa1']; ?></th>
                <th><?php echo $data2['daa2']; ?></th>
                <th><?php echo $total2=$data2['daa1']+$data2['daa2']; ?> </th>
                <th>200</th>
              </tr>
              <tr>
              <th>DBMS</th>
                  <th><?php echo $data2['dbms1']; ?></th>
                  <th><?php echo $data2['dbms2']; ?></th>
                  <th><?php echo $total3=$data2['dbms1']+$data2['dbms2']; ?> </th>
                  <th>200</th>
              </tr>
              <tr>
              <th>AIML</th>
                  <th><?php echo $data2['aiml1']; ?></th>
                  <th><?php echo $data2['aiml2']; ?></th>
                  <th><?php echo $total4=$data2['aiml1']+$data2['aiml2']; ?></th>
                  <th>200</th>
              </tr>
              <tr>
              <th>OS</th>
                  <th><?php echo $data2['os1']; ?></th>
                  <th><?php echo $data2['os2']; ?></th>
                  <th><?php echo $total5=$data2['os1']+$data2['os2']; ?></th>
                  <th>200</th>
              </tr>
              <th>ESS</th>
                  <th><?php echo $data2['ess1']; ?></th>
                  <th><?php echo $data2['ess2']; ?></th>
                  <th><?php echo $total4=$data2['ess1']+$data2['ess2']; ?></th>
                  <th>200</th>
              </tr>
              <tr>
              <th>Total</th>
                  <th>
                   <?php echo $data2['toc1']+$data2['daa1']+$data2['dbms1']+$data2['aiml1']+$data2['os1']+$data2['ess1']; ?>
                  </th>
                  <th>
                  <?php echo $data2['toc2']+$data2['daa2']+$data2['dbms2']+$data2['aiml2']+$data2['os2']+$data2['ess2']; ?>
                  </th>
                  
                  <th><span class="colorchange"><?php echo $all=$total1+$total2+$total3+$total3+$total4+$total5; ?></span></th>
                 
                  <th>1200</th>
                  
              </tr>    
             </table>
             <h1>You Are <span class="colorchange1"><?php 
                        if($all<=600) 
                        {
                            echo "Fail";
                        }
                       else
                       {
                           echo"Pass";
                       }
                      ?></span></h1>
            <marquee scrollamount="5"><p>Your Result is Declared. Kindly check your marks and in case of any discrepany contact the admin. </p>
                </marquee>
       </form>
      </div>
    </header>
    
</body>
</html>
<?php
}
else
{$sql_query="SELECT * FROM `register` WHERE `rollno`='$username' AND `class`='$password'";

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
?>
<?php
}
 }


?>
