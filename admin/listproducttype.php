<?php
include "header.php";
include "slider.php";
include "./class/producttype_class.php"
?>

<?php
$pro_type = new productType;
$showpro_type = $pro_type -> showProductType();
?>


    <div class="admin-content-right">
      <div class="admin-content-right-category-list">
        <h1>List Product Type</h1>
        <table>
            <tr>
                <th>STT</th>
                <th>Id</th>
                <th>Category_ID</th>
                <th>Category Name</th>
                <th>Name</th>
                <th>Cus</th>
            </tr>
            <?php
            if($showpro_type){
                $i = 0;
                while($result = $showpro_type->fetch_assoc()) {$i++; 
            ?>
            <tr>
                <td><?php echo $i ?></td>
                <td><?php echo $result['product_type_id'] ?></td>
                <td><?php echo $result['category_id'] ?></td>
                <td><?php echo $result['category_name'] ?></td>
                <td><?php echo $result['product_type_name'] ?></td>
                <td><a href="product_type_edit.php?product_type_id=<?php echo $result['product_type_id'] ?>">Edit</a> | <a href="product_type_delete.php?product_type_id=<?php echo $result['product_type_id'] ?>">Delele</a></td>
            </tr>

            <?php
                }
            }
            ?>
        </table>
        
      </div>  
    </div>
  </section>

</body>
</html>

