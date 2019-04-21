<?php 

require_once "../config/db.php";
require_once "../helpers/main.php";

if(isset($_POST['insert'])) {
  $name = $_POST['name'];

  $db = new DB_OPERATIONS($connect_with_pdo);
  $db->insertData($name);
  header('Location: '.URL.'index.php');
}