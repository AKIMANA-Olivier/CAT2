
<?php 
require 'db.php';
 
    if(ISSET($_POST['login'])){
        if($_POST['username'] != "" || $_POST['password'] != ""){
            $username = $_POST['username'];
            $password = $_POST['password'];
            $sql = "SELECT * FROM `admin_table` WHERE `username`=? AND `password`=? ";
            $query = $connection->prepare($sql);
            $query->execute(array($username,$password));
            $row = $query->rowCount();
            $fetch = $query->fetch();
            if($row > 0) {
              header("Location: admin_work.php");
            } else{
                echo"<center><h5 class='text-danger'>Invalid username or password</h5></center>";
            }
        }
    }
?>

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
                     <form action="" method="post" class="mt-5  p-4 bg-light shadow">
                        <h4 class="mb-5 text-secondary">Login Admin</h4>
                         <div class="row">
                                <div class="mb-3 col-md-8">
                                       <label>Username:</label>
                                       <input type="text" name="username" class="form-control" placeholder="Enter username ">   
                                </div>

                               
                                <div class="mb-3 col-md-8">
                                        <label>Password:</label>
                                        <input type="password" name="password" class="form-control" placeholder="Enter Password">   
                                </div>

                               

                                <div class=" col-md-12">
                                        <button name="login" class="btn btn-primary float-left">Login</button> 
                                </div>
                         </div>
                         
                     </form>
                     <p class="text-center mt-3 text-secondary"><b>Welcome admin</b> </p>
                     
                 </div>
                 
             </div>
               
           </div>
          
     </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>