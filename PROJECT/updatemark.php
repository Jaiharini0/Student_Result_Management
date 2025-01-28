<?php
  session_start();
?>

<html lang="en">

  <head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible"content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>STUDENT DETAILS</title>

   <link  href="updatemark.css" rel="stylesheet">
  </head>
  <body>
    <header>
        <h2 class="logo">SEARCH STUDENT AND UPDATE MARK</h2>
     </header>
    <div class="main-content-header">
            <form method="POST" action="updatemark.php">

<table class="table2">
     <tr> 
       <th class="student_class">Name</th>
       <th class="student_class">Father's Name</th>
       <th class="student_class">Address</th>
       <th class="student_class">Department</th>
       <th class="student_class">Year/Sem</th>
       <th class="student_class">Register.No</th>
       <th class="student_edit">Edit</th>
   </tr>
   <?php
            if(isset($_POST['submit']))
            {
                include('./dbcon.php');
                $class=$_POST['class'];
                $rollno=$_POST['rollno'];
                
                $sql="SELECT * FROM `data` WHERE `class`='$class'  AND `rollno`='$rollno' ";
                $run=mysqli_query($con,$sql);
                if(mysqli_num_rows($run)<1)
                {
                     ?>
                     <script>
                     alert('No Record Found');
                     window.open('update.html','_self');
                     </script>
                    <?php
                }
                else
                {
                 while($data=mysqli_fetch_assoc($run))  
                 {
                    
             ?>
                   <tr>
            
                   
    <th class="student_class2"> <?php  echo $data['name'].'<br>'; ?></th> 
    <th class="student_class2"> <?php  echo $data['father'].'<br>'; ?></th> 
    <th class="student_class2"> <?php  echo $data['village'].'<br>'; ?></th> 
    <th class="student_class2"> <?php  echo $data['class'].'<br>'; ?></th> 
    <th class="student_class2"> <?php  echo $data['year'].'<br>'; ?></th>
    <th class="student_class2"> <?php  echo $data['rollno'].'<br>'; ?></th>
    <th class="student_class2"><a href="updatemark_form.php?sid=<?php echo $data['rollno']; ?>">Edit</a></th>
           </tr>    
              
               <?php  
                 }
                    
                }
               
            }
            
            ?>

</table>
            </form>
    </div>

  </body>
</html>