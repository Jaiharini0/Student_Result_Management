<?php
session_start();
?>

<html lang="en">

  <head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible"content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>STUDENT DETAILS</title>

   <link  href="allstudentdata.css" rel="stylesheet">
  </head>
  <body>
    <header>
        <h2 class="logo">STUDENT RECORD</h2>
     </header>
        <div class="main-content-header">
            <form>
             <table>
               <tr>
                 <th class="id_h1">Register.No</th>
                  <th class="name_h1">Name </th> 
                 <th class="contact_h1">Department</th> 
                 <th class="contact_h1">Year/Sem</th>
                 <th class="contact_h1">Father Name</th>
                 <th class="massage_h1">Mother Name </th>
                 <th class="contact_h1">City</th>
                 <th class="name_h1">Mobile No</th>
               </tr>

               <?php
include('./dbcon.php');
  $sql="SELECT * FROM `data`";
  $run=mysqli_query($con,$sql);
  if(mysqli_num_rows($run)>0)
{
     while($row=mysqli_fetch_assoc($run))
     {
        ?>
        <tr>
            <th class="id_h"> <?php  echo $row['rollno'].'<br>'; ?></th>
            <th class="name_h"> <?php  echo $row['name'].'<br>'; ?></th> 
            <th class="email_h"> <?php  echo $row['class'].'<br>'; ?></th> 
            <th class="contact_h"> <?php  echo $row['year'].'<br>'; ?></th> 
            <th class="contact_h"> <?php  echo $row['father'].'<br>'; ?></th> 
            <th class="contact_h"> <?php  echo $row['mother'].'<br>'; ?></th>
            <th class="contact_h"> <?php  echo $row['village'].'<br>'; ?></th> 
            <th class="massage_h"><?php  echo $row['mobile'].'<br>'; ?></th> 
        </tr>     
        <?php    
        }
   
}
else{
    echo "No Record Found";
}

?>
             </table>
            </form>
        </div>
       <script src="script.js"></script>
       <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
       <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script> 
  </body>
</html>