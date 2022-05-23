<?php
require 'db.php';
$id = $_GET['id'];
$sql = 'SELECT * FROM login_table WHERE id=:id';
$statement = $connection->prepare($sql);
$statement->execute([':id' => $id ]);
$person = $statement->fetch(PDO::FETCH_OBJ);

?>

<div class="container">
  <div class="card mt-5">
    <div class="card-header">
      <h2>Update Sport Info</h2>
    </div>
    <div class="card-body">
      <?php if(!empty($message)): ?>
        <div class="alert alert-success">
          <?= $message; ?>
        </div>
      <?php endif; ?>
      <form method="post" action = "update.php">
        <div class="form-group">
          <label for="fname">FirstName</label>
          <input value="<?= $person->fname; ?>" type="text" name="fname" class="form-control" placeholder="update Fname">
          <input type="hidden" name="id" value = "<?php echo $person->id;?>">
        </div>

        <div class="form-group">
          <label for="lname">LastName</label>
          <input value="<?= $person->lname; ?>" type="text" name="lname" id="lname" class="form-control" placeholder="update Lname">
        </div>

        <div class="form-group">
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
        </div>

        <div class="form-group">
        <div class="mb-3 col-md-6">
                                        <label>Sport Type<span class="text-danger">*</span></label>
                                        <select name="sport_type" class="form-select" aria-label="Default select example">
										  <option selected>Open this select menu</option>
										  <option value="football ball">Football</option>
										  <option value="volley ball">Volleyball</option>
										  <option value="basket ball">Basketball</option>
										</select>   
                                </div>
        </div>

        <div class="form-group">
          <label for="email">Email</label>
          <input value="<?= $person->email; ?>" type="text" name="email" id="email" class="form-control" placeholder="update email">
        </div>

        <div class="form-group">
          <label for="phone">Phone</label>
          <input value="<?= $person->phone; ?>" type="text" name="phone" id="phone"  placeholder="update phone">
        </div>


        <div class="form-group">
          <label for="password">Password</label>
          <input type="text" value="<?= $person->password; ?>" name="password" id="password" class="form-control" placeholder="update password">
        </div>
        <div class="form-group">
          <button type="submit" name ="update" class="btn btn-info">Update Sport</button>
        </div>
      </form>
    </div>
  </div>
</div>
