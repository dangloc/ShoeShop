<?php
include "database.php"
?>

<?php
class product{
    private $db;

    public function __construct()
    {
        $this -> db = new Database();
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

    public function showProductAjax($category_id)
    {
        $query = "SELECT * FROM tbl_product_type WHERE category_id = '$category_id'";
        $resutls = $this->db->select($query);
        return $resutls;
    }

    public function insert_product(){
        $product_name = $_POST['product_name'];
        $category_id = $_POST['category_id'];
        $product_type_id = $_POST['product_type_id'];
        $product_price = $_POST['product_price'];
        $promote_price = $_POST['promote_price'];
        $description_product = $_POST['description_product'];
        $product_img = $_FILES['product_img']['name'];
        $filetarget = basename($_FILES['product_img']['name']);
        $filetype = strtolower(pathinfo($filetarget, PATHINFO_EXTENSION));
        if(file_exists("uploads/$filetarget")){
            $alert = "File already exists";
            return $alert;
        }
        else{
                move_uploaded_file( $_FILES['product_img']['tmp_name'],"uploads/".$_FILES['product_img']['name']);
                $query = "INSERT INTO tbl_product (
                product_name,
                category_id,
                product_type_id,
                product_price,
                promote_price,
                description_product,
                product_img
                ) VALUES (
                    '$product_name', 
                    '$category_id', 
                    '$product_type_id', 
                    '$product_price', 
                    '$promote_price',                 
                    '$description_product',
                    '$product_img')";
            $resutls = $this->db->insert($query);
            if($resutls){
                $query = "SELECT * FROM tbl_product ORDER BY product_id DESC LIMIT 1";
                $results = $this-> db ->select($query)->fetch_assoc();
                $product_id = $results['product_id'];
                $filename = $_FILES['description_img']['name'];
                $filetmp = $_FILES['description_img']['tmp_name'];
                
                foreach($filename as $key => $val) 
                {
                    move_uploaded_file($filetmp[$key],"uploads/".$val);
                    $query = "INSERT INTO tbl_description_img (product_id,description_img) VALUES ('$product_id', '$val')";
                    $results = $this -> db ->insert($query);
                }
            }
        }

        
        // header("Location:listproducttype.php");
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