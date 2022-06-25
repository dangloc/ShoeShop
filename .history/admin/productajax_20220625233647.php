 
<?php 
include './class/product_class.php';

$product = new product;

$category_id = $_GET['category_id'];
?>
                <?php 
                $show_products_ajax = $product -> showProductAjax($category_id);
                if($show_products_ajax) {
                  while($result = $show_products_ajax -> fetch_assoc()){
                ?>
                <option value="<?php echo $result['product_type_id'] ?>"><?php echo $result['product_type_name'] ?></option>
                <?php
                  }
                }
                ?>