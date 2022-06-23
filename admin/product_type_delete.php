<?php
include "./class/producttype_class.php";
$product_type = new productType;
if(!isset($_GET['product_type_id']) || $_GET['product_type_id'] == NULL){
    echo "<script>window.location = 'listproducttype.php'</script>";
}
else{
    $product_type_id = $_GET['product_type_id'];
}
    $delete_category = $product_type -> delete_product_type($product_type_id);
?>