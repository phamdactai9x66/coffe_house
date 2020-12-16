                <li><a href="<?=$admin_url?>/main_page"><i class="fas fa-monument"></i>home</a></li>    
                <li><a href="<?=$admin_url?>/category"><i class="fas fa-monument"></i>category_product</a></li>    
                <li><a href="<?=$admin_url?>/product"><i class="fab fa-product-hunt"></i>product</a></li>
                <li><a href="<?=$admin_url?>/conment"><i class="fas fa-cart-plus"></i>comment</a></li>
                <?php
                if($_SESSION["user"]["check_admin"] > 0){
                    echo ' <li><a href="'.$admin_url.'/user"><i class="fas fa-comments"></i>user</a></li>';  
                   
                }
                ?>
                <li><a href="<?=$admin_url?>/bill"><i class="fas fa-comments"></i>bill</a></li>
                