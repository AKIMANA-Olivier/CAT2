<?php
require 'db.php';
$message = '';
if (isset ($_POST['fname'])  && isset($_POST['lname']) && isset($_POST['department']) && isset($_POST['sport_type']) && isset($_POST['email'])&& isset($_POST['phone']) && isset($_POST['password'])  ) {
  $fname = $_POST['fname'];
  $lname = $_POST['lname'];
  $department = $_POST['department'];
  $sport_type = $_POST['sport_type'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $password = $_POST['password'];
  $sql = 'INSERT INTO login_table(fname, lname,department, sport_type, email, phone, password) VALUES (:fname,:lname, :department, :sport_type, :email, :phone, :password)';
  $statement = $connection->prepare($sql);
  if ($statement->execute([':fname'=> $fname,':lname' => $lname, ':department' => $department, ':sport_type' => $sport_type, ':email' => $email, ':phone' => $phone, ':password' => $password])) {
    $message = 'data inserted successfully';
    header("Location: homepage.php");
  }



}


 ?>

<div class="container">
  <div class="card mt-5">
    <div class="card-header">
      
    </div>
    <div class="card-body">
      <?php if(!empty($message)): ?>
        <div class="alert alert-success">
          <?= $message; ?>
        </div>
      <?php endif; ?>

<!DOCTYPE html>
<html>
<head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Registration Form </title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>
<body>

     <div class="container">
           <div class="row">
             <div class="col-md-6 offset-md-3">
                 <div class="Registration-form">
                     <form action="SignUpForm.php" method="post" class="mt-5  p-4 bg-light shadow">
                        <h4 class="mb-5 text-secondary">Create Your Account</h4>
                         <div class="row">
                                <div class="mb-3 col-md-6">
                                       <label>First Name<span class="text-danger">*</span></label>
                                       <input type="text" name="fname" class="form-control" placeholder="Enter First Name " >   
                                </div>

                                <div class="mb-3 col-md-6">
                                        <label>Last Name<span class="text-danger">*</span></label>
                                        <input type="text" name="lname" class="form-control" placeholder="Enter Last Name ">   
                                </div>

                                <div class="mb-3 col-md-6">
                                        <label>Department<span class="text-danger">*</span></label>
                                        <select name="department" class="form-select" aria-label="Default select example">
										  <option selected>Open this select menu</option>
										  <option value="IT">IT</option>
										  <option value="ET">ET</option>
										  <option value="RE">RE</option>
                                                                                  <option value="RE">MT</option>
										</select>   
                                </div>
                                
                                <div class="mb-3 col-md-6">
                                        <label>Sport Type<span class="text-danger">*</span></label>
                                        <select name="sport_type" class="form-select" aria-label="Default select example">
										  <option selected>Open this select menu</option>
										  <option value="football ball">football ball</option>
										  <option value="volley ball">volley ball</option>
										  <option value="basket ball">basket ball</option>
										</select>   
                                </div>

                                <div class="mb-3 col-md-12">
                                        <label>Email<span class="text-danger">*</span></label>
                                        <input type="text" name="email" class="form-control" placeholder="Enter Email">   
                                </div>

                                <div class="mb-3 col-md-12">
                                        <label>phone<span class="text-danger">*</span></label>
                                        <input type="text" name="phone" class="form-control" placeholder="Enter phone">   
                                </div>

                                <div class="mb-3 col-md-12">
                                        <label>Password<span class="text-danger">*</span></label>
                                        <input type="password" name="password" class="form-control" placeholder="Enter Password">    
                                </div>

                                <div class=" col-md-12">
                                        <button class="btn btn-primary float-end">SignUp Now</button> 
                                </div>
                         </div>
                         
                     </form>
                     
                     
                 </div>
                 
             </div>
               
           </div>
          
     </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>