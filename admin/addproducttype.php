<?php
include "header.php";
include "slider.php";
include "./class/producttype_class.php"
?>

<?php
$pro_type = new productType;
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $category_id = $_POST['category_id'];
    $product_type_name = $_POST['pro_type_name'];
    $insert_pro_type = $pro_type->insert_pro_type($category_id, $product_type_name);
}
?>

<style>
    select{
        height: 35px;
        width:200px;
        outline: none;
        padding-left: 12px;
         margin-top:20px;
    }
</style>
    <div class="admin-content-right">
      <div class="admin-content-right-category-add">
        <h1>Add product type</h1>
        <form action="" method="POST">
          <select name="category_id" id="">
            <option value="">--chosse category</option>
            <?php
                $show_Category = $pro_type -> showCategory();
                if($show_Category)
                { 
                    $i = 0;
                    while($result = $show_Category-> fetch_assoc()){$i++;     
            ?>
                    <option value="<?php echo $result['category_id']?>"><?php echo $result['category_name']?></option>
            <?php
                    }
                }
            ?>
          </select> <br>
          <input required name="pro_type_name" type="text" placeholder="Enter product type name..">
          <button type="submit">Submit</button>
        </form>
      </div>
      
    </div>
  </section>

</body>
</html>

