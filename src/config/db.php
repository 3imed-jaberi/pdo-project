<?php

   require_once "config.php";

    try {
      $connect_with_pdo = new PDO("mysql:host=" . DB_SERVER . ";dbname=" .  DB_NAME, DB_USERNAME, DB_PASSWORD);
      $connect_with_pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }catch(PDOException $error) {
      die("DB Connection failed: " . $error->getMessage());
    }
