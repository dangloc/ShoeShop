<?php
include "database.php"
?>

<?php
class category{
    private $db;

    public function __construct()
    {
        $this -> db = new Database();
    }

    public function insertCategory($category){
          $query = "INSERT INTO tbl_category (category_name) VALUES ('$category')";
          $resutls = $this->db->insert($query);
          header("Location:categorylist.php");
          return $resutls;
    }

    public function showCategory(){
        $query = "SELECT * FROM tbl_category ORDER BY category_id ASC";
        $resutls = $this->db->select($query);
        return $resutls;
    }

    public function get_category($category_id)
    {
        $query = "SELECT * FROM tbl_category WHERE category_id = '$category_id'";
        $resutls = $this->db->select($query);
        return $resutls;
    }

    public function updateCategory($category_name, $category_id)
    {
        $query = "UPDATE tbl_category SET category_name = '$category_name' WHERE category_id = '$category_id'";
        $resutls = $this->db->update($query);
        header("Location:categorylist.php");
        return $resutls;
    }

    public function delete_category($category_id){
        $query = "DELETE FROM tbl_category WHERE category_id = '$category_id'";
        $resutls = $this->db->delete($query);
        header("Location:categorylist.php");
        return $resutls;
    }
}

?>