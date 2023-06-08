<?php
    //echo  $stu_id = $_GET['id'];
    $stu_id = $_GET['id'];
    include 'config.php';
    $sql = "DELETE FROM `student` WHERE `student`.`sid` ={$stu_id}";
    $result = mysqli_query($conn , $sql) or die("Query unsuccessfull");
    
    header("location: http://localhost/crud_html/index.php");
    mysqli_close($conn);
?>
