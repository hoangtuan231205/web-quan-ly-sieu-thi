<?php
namespace App\Models;

class Product {
    private $conn;

    public function __construct($conn){
        $this->conn = $conn;
    }

    public function getAll(){
        $sql = "SELECT * FROM products";
        $result = $this->conn->query($sql);

        $data = [];
        while($row = $result->fetch_assoc()){
            $data[] = $row;
        }
        return $data;
    }
}
