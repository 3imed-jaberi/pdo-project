<?php 

require_once "../config/db.php";
require_once "../helpers/main.php";

if(isset($_POST['delete'])) {
  $id = $_POST['id'];

  $db = new DB_OPERATIONS($connect_with_pdo);
  $db->deleteData($id);
  header('Location: '.URL.'index.php');
}