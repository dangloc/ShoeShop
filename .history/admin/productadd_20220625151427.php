<?php
include "header.php";
include "slider.php";
include "./class/product_class.php"
?>
<?php
$pro = new product;
if($_SERVER['REQUEST_METHOD'] == 'POST'){
  // echo '<pre>';
  // var_dump($_FILES['description_img']);
  // echo '</pre>';
    $insert_product = $pro ->insert_product($_POST, $_FILES);

}
?>
<div class="admin-content-right">
    <div class="admin-content-right-product-add">
        <h1>Add product</h1>
        <form action="" method="POST" enctype="multipart/form-data">
            <label for="">Product Name <span style="color: red;">*</span></label>
            <input name="product_name" required type="text">

            <label for="">Category<span style="color: red;">*</span></label>
            <select name="category_id" id="">

                <option value="#"> --Choose category-- </option>
                <?php 
                $show_Category = $pro -> showCategory();
                if($show_Category) {
                  $i= 0;
                  while($result = $show_Category -> fetch_assoc()){
                    $i++;
                ?>
                <option value="<?php echo $result['category_id'] ?>"><?php echo $result['category_name']?></option>
                <?php
                  }
                }
                ?>
            </select>

            <label for="">Product Type<span style="color: red;">*</span></label>
            <select name="product_type_id" id="">
                <<option value="#"> --Choose category-- </option>
                <?php 
                $show_products = $pro -> showProductType();
                if($show_products) {
                  while($result = $show_products -> fetch_assoc()){
                ?>
                <option value="<?php echo $result['product_type_id'] ?>"><?php echo $result['product_type_name'] ?></option>
                <?php
                  }
                }
                ?>
            </select>

            <label for="">Product price<span style="color: red;">*</span></label>
            <input name="product_price" required type="text">

            <label for="">Promotional price<span style="color: red;">*</span></label>
            <input name="promote_price" required type="text">

            <label for="">Description product<span style="color: red;">*</span></label>
            <textarea name="description_product" required name="" id="editor1" cols="30" rows="10"></textarea>

            <label for="">Product img<span style="color: red;">*</span></label>
            <input name="product_img" required type="file">

            <label for="">Description img<span style="color: red;">*</span></label>
            <input name="description_img[]" required multiple type="file">
            <button>Submit</button>
        </form>
    </div>

</div>
</section>

</body>
<script>
                CKEDITOR.replace( 'editor1' );
                filebrowserBrowseUrl: 'ckfinder/ckfinder.html'
                filebrowserUploadUrl: 'ckfinder/core/connector/php/connector.php?command=QuickUpload'
</script>
</html>