<?php
require 'db.php';
$id = $_GET['id'];
$sql = 'DELETE FROM login_table WHERE id=:id';
$statement = $connection->prepare($sql);
if ($statement->execute([':id' => $id])) {
  header("Location: admin_work.php");
}