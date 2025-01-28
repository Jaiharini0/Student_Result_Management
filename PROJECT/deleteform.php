<?php
session_start();
?>
<html>
<head>
<meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible"content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>STUDENT DETAILS</title>

   <link  href="deleteform.css" rel="stylesheet">
 

</head>
<body>
    <header>
      <div class="main-content-header">
        <form method="POST" action="deleteform.php">
        <table class="table1">
            <h1 >Search Student and Delete his Mark</h1>
            <tr>
            <th>Student Department</th>
            <td><input type="text" name="class"/></td>
            <th>Student Register Number</th>
            <td><input type="text" name="rollno"/></td>
                <th><input type="submit" value="Search" name="submit" class="btn"/></th>
            </tr>
            </table>
         <table class="table2">
              <tr> 
                <th class="student_class">Name</th>
                <th class="student_class">Father's Name</th>
                <th class="student_class">Address</th>
                <th class="student_class">Department</th>
                <th class="student_class">Register Number</th>
                <th class="student_edit">Edit</th>
            </tr>
         <?php
         $server_name="localhost";
         $username="root";
         $password="";
         $database_name="student";
          
          $conn=mysqli_connect($server_name,$username,$password,$database_name);
         
            if(isset($_POST['submit']))
            {
                $class=$_POST['class'];
                $rollno=$_POST['rollno'];
                
                $sql="SELECT * FROM `data` WHERE `class`='$class'  AND `rollno`='$rollno' ";
                $run=mysqli_query($conn,$sql);
                if(mysqli_num_rows($run)<0)
                {
                     ?>
                     <script>
                     alert('No Record Found');
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
            <th class="student_class2"> <?php  echo $data['rollno'].'<br>'; ?></th> 
            <th class="student_class2"><a href="delete_data.php?sid=<?php echo $data['rollno']; ?>">Delete</a></th> 
           
           </tr>    
              
               <?php  
                 }
                    
                }
               
            }
            
            ?>
              </table>   
      </form>
 </div>
 </header>
    
</body>
</html>
      
   
