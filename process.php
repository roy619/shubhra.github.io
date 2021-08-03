<?php
include_once 'db.php';
if(isset($_POST['submit']))
session_start();
      $_SESSION['eid']=$_POST['Email']; 
    $eid=$_POST['Email'];
    $sql="SELECT * FROM users where Email=$eid";
    $result = mysqli_query($conn, $sql);
    
    
         {
    echo"hi there $eid";
    header("location:next.php");
}
    

?>
