<?php 

require_once "../config/db.php";
require_once "../helpers/main.php";

$name = $_POST['name'];
$db = new DB_OPERATIONS($connect_with_pdo);
$data = $db->searchData($name);
echo json_encode($data);