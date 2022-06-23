<?php
include "header.php";
include "slider.php";
include "./class/producttype_class.php"
?>

<?php
    $pro_type = new productType;
    $pro_type_id = $_GET['product_type_id'];
    $get_pro_type = $pro_type -> get_pro_type($pro_type_id);
    if($get_pro_type){
        $resultD = $get_pro_type -> fetch_assoc();
    }

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $category_id = $_POST['category_id'];
    $product_type_name = $_POST['pro_type_name'];
    $update_pro_type = $pro_type->update_pro_type($category_id, $product_type_name, $pro_type_id);
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
        <h1>Add category</h1>
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
                    <option <?php if($resultD['category_id']==$result['category_id']) {echo 'selected';}  ?> value="<?php echo $result['category_id']?>"><?php echo $result['category_name']?></option>
            <?php
                    }
                }
            ?>
          </select> <br>
          <input required name="pro_type_name" type="text" placeholder="Enter product type name.." 
          value="<?php echo $resultD['product_type_name'] ?>">
          <button type="submit">Update</button>
        </form>
      </div>
      
    </div>
  </section>

</body>
</html>

