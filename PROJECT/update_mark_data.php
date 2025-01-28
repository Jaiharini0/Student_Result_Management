<?php
if(isset($_POST['submit']))
{
include('./dbcon.php');
    $rollno=$_POST['rollno'];
    $toc1=$_POST['toc1'];
    $daa1=$_POST['daa1'];
    $dbms1=$_POST['dbms1'];
    $aiml1=$_POST['aiml1'];
    $os1=$_POST['os1'];
    $ess1=$_POST['ess1'];
    $toc2=$_POST['toc2'];
    $daa2=$_POST['daa2'];
    $dbms2=$_POST['dbms2'];
    $aiml2=$_POST['aiml2'];
    $os2=$_POST['os2'];
    $ess2=$_POST['ess2'];
    
    $sql="UPDATE `mark` SET  `toc1` = '$toc1', `daa1` = '$daa1', `dbms1` = '$dbms1', `aiml1` = '$aiml1', `os1` = '$os1', `ess1` = '$ess1', `toc2` = '$toc2',`daa2` = '$daa2',`dbms2` = '$dbms2', `aiml2` = '$aiml2', `os2` = '$os2', `ess2` = '$ess2' WHERE `rollno` = '$rollno'";
    
    $run=mysqli_query($con,$sql);
    if($run)
    {
        ?>
        <script>
        alert('Data Updated  Succesfully');
        window.open('page.html?sid=<?php echo $rollno; ?>', '_self');
             </script>
       
       
        <?php
    }
    else
    {
        echo "Error";
    }
}
?>