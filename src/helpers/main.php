<?php

class DB_OPERATIONS {
  
  private $table ;
  private $connect_with_pdo ;
  public function __construct($pdo) {
    $this->connect_with_pdo = $pdo ;
    $this->table = TABLE_NAME ;
  }

  public function insertData ($name) {
    $sql = "INSERT INTO $this->table (name) VALUES (:name)";
    $stmt = $this->connect_with_pdo->prepare($sql);
    $stmt->execute(['name' => $name]);
  }

  public function getData() {
    $sql = "SELECT * FROM $this->table";
    $stmt = $this->connect_with_pdo->prepare($sql);
    $stmt->execute();
    $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $data;
  }

  public function deleteData($id) {
    $sql = "DELETE FROM $this->table WHERE id = :id";
    $stmt = $this->connect_with_pdo->prepare($sql);
    $stmt->execute(['id' => $id]);
  }

  public function editData($id, $name) {
    $sql = "UPDATE $this->table SET name = :name WHERE id = :id";
    $stmt = $this->connect_with_pdo->prepare($sql);
    $stmt->execute(['id' => $id, 'name' => $name]);
  }

  public function searchData($name) {
    $sql = "SELECT * FROM $this->table WHERE name LIKE :name";
    $stmt = $this->connect_with_pdo->prepare($sql);
    $stmt->execute(['name' => '%' . $name . '%']);
    $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $data;
  }

}

