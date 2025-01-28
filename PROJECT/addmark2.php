<?php
session_start();
?>
<html lang="en">

  <head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible"content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>STUDENT DETAILS</title>

   <link  href="addmark2.css" rel="stylesheet">
  </head>
  <body>
    <div class="wrapper" >
        <span class="icon-close"><ion-icon name="close"></ion-icon>
        </span>
 <div class="main-content-header">
          
    <form method="POST" action="thirdstep.php">
        
        <h2>Step 2/2 : Add Exam mark</h2>    
        
        <td><input type="text" placeholder='Department' name="class" class="class" value="<?php  
        if(isset($_POST['class']))
        {
            $class=$_POST['class'];
            echo $class;
        } ?>" required/></td>
        <td><input type="text" placeholder='Register Number' name="rollno" class="rollno" value="<?php  
        if(isset($_POST['rollno']))
        {
            $class=$_POST['rollno'];
            echo $rollno;
        }
        ?>" required/></td>

    <table class="table1">
        <span> <h4 class="h_3">IAT-1</h4></span>
       <tr>
          <th>TOC</th>   <th>DAA</th> <th>DBMS</th>
       </tr>
       <tr>
           <td><input type='text' name='toc1' placeholder='TOC' required/></td>
           <td><input type='text' name='daa1' placeholder='DAA' required/></td>
           <td><input type='text' name='dbms1' placeholder='DBMS' required/></td>
       </tr>
       </table>
       <table class="table2">
       <tr>
           <th>AIML</th>   <th>OS</th>   <th>ESS</th> 
       </tr>
           <tr>
           
           <td><input type='text' name='aiml1' placeholder='AIML' required/></td>
           <td><input type='text' name='os1' placeholder='OS' required/></td>
           <td><input type='text' name='ess1' placeholder='ESS' required/></td>
       </tr>
       
   </table>
    <span> <h4 class="h3">IAT-2</h4> </span>
   <table class="table4">
       <tr>
        <th>TOC</th>   <th>DAA</th> <th>DBMS</th>
       </tr>
       <tr>
        <td><input type='text' name='toc2' placeholder='TOC' required/></td>
        <td><input type='text' name='daa2' placeholder='DAA' required/></td>
        <td><input type='text' name='dbms2' placeholder='DBMS' required/></td>
           </tr>
       </table>
       <table class="table2">
       <tr>
        <th>AIML</th>   <th>OS</th>   <th>ESS</th> 
    </tr>
        <tr>
        
        <td><input type='text' name='aiml2' placeholder='AIML' required/></td>
        <td><input type='text' name='os2' placeholder='OS' required/></td>
        <td><input type='text' name='ess2' placeholder='ESS' required/></td>
    </tr>
       <tr>
       <td  colspan="2"><button name="save" class="btn" >Submit</a></button></td>   
       </tr>
       
   </table>
    </form>
 </div>
    </div>   
   <script src="script.js"></script>
   <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
   <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script> 
  </body>
</html>
<?php

if(isset($_POST['save1']))
{ 
    include('./dbcon.php');
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
    $run=mysqli_query($con,$sql);
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
    