<?php

include 'db.php';
 
 if(ISSET($_POST['update'])){
     try{
         $id = $_POST['id'];
         $fname = $_POST['fname'];
         $lname = $_POST['lname'];
         $department = $_POST['department'];
         $sport_type = $_POST['sport_type'];
         $email = $_POST['email'];
         $phone = $_POST['phone'];
         $password = $_POST['password'];
         $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
         $sql = "UPDATE `login_table` SET `fname` = '$fname', `lname` = '$lname', `department` = '$department',
          `sport_type` = '$sport_type', `email` = '$email', `phone` = '$phone',
           `password` = '$password' WHERE `login_table`.`id` = $id";
           $st = $connection->prepare($sql);
         $st->execute();
     }catch(PDOException $e){
         echo $e->getMessage();
     }

     $connection = null;

     echo "<script>alert('Succesfully updated an account!')</script>";
     echo "<script>window.location='admin_work.php'</script>";
 }
?>