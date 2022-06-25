<?php
include "database.php"
?>

<?php
class productType{
    private $db;

    public function __construct()
    {
        $this -> db = new Database();
    }

    public function insert_pro_type($category_id, $product_type_name){
          $query = "INSERT INTO tbl_product_type (category_id, product_type_name) VALUES ('$category_id', '$product_type_name')";
          $resutls = $this->db->insert($query);
          header("Location:listproducttype.php");
          return $resutls;
    }

    public function showCategory(){
        $query = "SELECT * FROM tbl_category ORDER BY category_id ASC";
        $resutls = $this->db->select($query);
        return $resutls;
    }

    public function showProductType(){
        // $query = "SELECT * FROM tbl_product_type ORDER BY product_type_id ASC";
        $query = "SELECT tbl_product_type.*, tbl_category.category_name FROM tbl_product_type INNER JOIN tbl_category ON tbl_product_type.category_id = tbl_category.category_id
        ORDER BY tbl_product_type.product_type_id DESC";
        $resutls = $this->db->select($query);
        return $resutls;
    }

    public function get_pro_type($product_type_id)
    {
        $query = "SELECT * FROM tbl_product_type WHERE product_type_id = '$product_type_id'";
        $resutls = $this->db->select($query);
        return $resutls;
    }



    public function update_pro_type($category_id, $product_type_name, $product_type_id)
    {
        $query = "UPDATE tbl_product_type SET product_type_name = '$product_type_name', category_id = '$category_id' WHERE product_type_id = '$product_type_id'";
        $resutls = $this->db->update($query);
        header("Location:listproducttype.php");
        return $resutls;
    }


    public function delete_product_type($product_type_id){
        $query = "DELETE FROM tbl_product_type WHERE product_type_id = '$product_type_id'";
        $resutls = $this->db->delete($query);
        header("Location:listproducttype.php");
        return $resutls;
    }
}

?>