<?php
    require_once "./src/config/db.php";
    require_once "./src/helpers/main.php";
    
    $db = new DB_OPERATIONS($connect_with_pdo);
    $data = $db->getData();
