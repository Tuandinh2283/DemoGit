<?php
include "database.php";
class cartegory {
    private $db;
    public function __construct(){
        $this -> db = new Database();
    }
    public function insert_cartegory($cartgory_name){
        $query = "INSERT INTO tbl_cartegory (cartegory_name) VALUES ('$cartgory_name')";
        $result = $this ->db-> insert($query);
        return $result;
    }
    public function show_cartegory(){
        $query = "SELECT * FROM tbl_cartegory ORDER BY cartegory_ID DESC";
        $result = $this ->db->select($query);
        return $result;
    }
}
?>