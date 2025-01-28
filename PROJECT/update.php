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
                if(mysqli_num_rows($run)<1)
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
            <th class="student_class2"> <?php  echo $data['id'].'<br>'; ?></th>
            <th class="student_class2"> <?php  echo $data['name'].'<br>'; ?></th> 
            <th class="student_class2"> <?php  echo $data['father'].'<br>'; ?></th> 
            <th class="student_class2"> <?php  echo $data['village'].'<br>'; ?></th> 
            <th class="student_class2"> <?php  echo $data['class'].'<br>'; ?></th> 
            <th class="student_class2"> <?php  echo $data['year'].'<br>'; ?></th>
            <th class="student_class2"> <?php  echo $data['rollno'].'<br>'; ?></th>
            <th class="student_class2"><a href="updatemark_form.php?sid=<?php echo $data['rollno']; ?>">Edit</a></th> 
           
           </tr>               

<script>
alert('Details Found');
window.open('updatemark.html','_self');
</script>
<?php
                 }
       
                }
               
            }
            
            ?>