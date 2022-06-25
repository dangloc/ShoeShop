 
 
                <?php 
                $show_products_ajax = $pro -> showProductAjax($);
                if($show_products_ajax) {
                  while($result = $show_products_ajax -> fetch_assoc()){
                ?>
                <option value="<?php echo $result['product_type_id'] ?>"><?php echo $result['product_type_name'] ?></option>
                <?php
                  }
                }
                ?>