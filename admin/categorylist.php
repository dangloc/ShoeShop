<?php
include "header.php";
include "slider.php";
include "./class/category_class.php"
?>

<?php
$category = new Category;
$showCategory = $category -> showCategory();
?>
    <div class="admin-content-right">
      <div class="admin-content-right-category-list">
        <h1>List Category</h1>
        <table>
            <tr>
                <th>STT</th>
                <th>Id</th>
                <th>Name</th>
                <th>Cus</th>
            </tr>
            <?php
            if($showCategory){
                $i = 0;
                while($result = $showCategory->fetch_assoc()) {$i++; 
            ?>
            <tr>
                <th><?php echo $i ?></th>
                <th><?php echo $result['category_id'] ?></th>
                <th><?php echo $result['category_name'] ?></th>
                <th><a href="categoryedit.php?category_id=<?php echo $result['category_id'] ?>">Edit</a> | <a href="categorydelete.php?category_id=<?php echo $result['category_id'] ?>">Delele</a></th>
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

