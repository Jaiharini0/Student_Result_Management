<?php
session_start();
?>
<?php
include('./dbcon.php');
$rollno=$_GET['sid'];


$sql="SELECT * FROM `data` WHERE `rollno`='$rollno'";
$run=mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($run);

$class=$row['class'];

$sql2="SELECT * FROM `mark` WHERE `rollno`='$rollno'";
$run2=mysqli_query($con,$sql2);
$data=mysqli_fetch_assoc($run2);



?>
<html lang="en">

  <head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible"content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>STUDENT DETAILS</title>

   <link  href="updatemark_form.css" rel="stylesheet">
  </head>
  <body>
    <header>
        <h2 class="logo">SEARCH STUDENT AND UPDATE MARK</h2>
     </header>
     <div  class="wrapper" >
        <span class="icon-close"><ion-icon name="close"></ion-icon>
        </span>
    <div class="main-content-header">        
                <form method="POST" action="update_mark_data.php">
                    <table>
                   <h4> 
                      <tr>
                        <th>Student Name: </th>
                        <td><span class="span"><?php echo $row['name']; ?></span></td>
                      </tr>
                    </h4>
                    <h4>
                      <tr>
                        <th>Student Department: </th>
                        <td><span class="span"><?php echo $row['class']; ?></span></td>
                      </tr>
                    </h4>
                    <h4>
                        <tr>
                          <th>Student Year/Sem: </th>
                          <td><span class="span"><?php echo $row['year']; ?></span></td>
                        </tr>
                      </h4>

                    <h4>
                      <tr>
                        <th>Student Register.No: </th>
                        <td><span class="span"><?php echo $row['rollno']; ?></span></td>
                      </tr>
                    </h4>
                        </table>
                <table class="table1">
                    <span> <h4 class="h_3">IAT-1</h4></span>
                   <tr>
                      <th>TOC</th>   <th> DAA </th> <th>DBMS</th>
                   </tr>
                   <tr>
                       <td>
                      <input type='text' name='toc1' value="<?php echo $data['toc1']; ?>" class="th" required/></td>
                       <td><input type='text' name='daa1' value="<?php echo $data['daa1']; ?>" class="th" required/></td>
                       <td><input type='text' name='dbms1' value="<?php echo $data['dbms1']; ?> " class="th" required/></td>
                   </tr>
                   </table>
                   <table class="table2">
                   <tr>
                       <th>AIML</th>   <th>OS</th>       <th>ESS</th> 
                   </tr>
                       <tr>
                       <td><input type='text' name='aiml1' value="<?php echo $data['aiml1']; ?>" class="th" required/></td>
                       <td><input type='text' name='os1' value="<?php echo $data['os1']; ?> " class="th" required/></td>
                       <td><input type='text' name='ess1' value="<?php echo $data['ess1']; ?> " class="th" required/></td>
                       
                   </tr>
                   
               </table>
                <span> <h4 class="h3">IAT-2</h4> </span>
               <table class="table4">
                   <tr>
                      <th>TOC</th>   <th>DAA </th> <th>DBMS</th>
                   </tr>
                   <tr>
                       <td><input type='text' name='toc2' value="<?php echo $data['toc2']; ?> " class="th" required/></td>
                       <td><input type='text' name='daa2' value="<?php echo $data['daa2']; ?> " class="th" required/></td>
                       <td><input type='text' name='dbms2' value="<?php echo $data['dbms2']; ?> " class="th" required/></td>
                   </tr>
                   </table>
                   <table class="table2">
                   <tr>
                       <th>AIML</th>   <th>OS</th>      <th>ESS</th> 
                   </tr>
                       <tr>
                       <td><input type='text' name='aiml2' value="<?php echo $data['aiml2']; ?> " class="th" required/></td>
                       <td><input type='text' name='os2' value="<?php echo $data['os2']; ?> " class="th" required/></td>
                       <td><input type='text' name='ess2' value="<?php echo $data['ess2']; ?> " class="th" required/></td>
                       </tr>
                   <tr>
                   <td><input type="hidden" name="rollno" value="<?php echo $row['rollno']; ?>"/></td>
                  </tr>
                   <tr>
                   <td colspan="2"><button type="submit" name="submit"  class="btn">Submit</button></td>   
                   </tr>
                   
                </table>
             </form>
            </div>
            <script src="script.js"></script>
            <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
            <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
      </body>
      </html>