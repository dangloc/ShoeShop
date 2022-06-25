 
 
                <?php 
                $show_products_ajax = $pro -> showProductAjax();
                if($show_products) {
                  while($result = $show_products -> fetch_assoc()){
                ?>
                <option value="<?php echo $result['product_type_id'] ?>"><?php echo $result['product_type_name'] ?></option>
                <?php
                  }
                }
                ?>