<?php
require_once("../../dao/category.php");
require_once("../../dao/product.php");

$list_cate=list_cate();


?>
<section class="top-header">
            <div class="flex-top-header">
                    <div class="box1 genaral"><a href="<?=$client_url?>/main_page/main_home.php"><img src="<?=$content_url_image_client?>logo-e1592989828631.png" alt=""></a></div>
                    <div class="box2 genaral"> <i class="far fa-clock"></i> OPENNING HOURS 11.30AM – 2.30PM</div>
                    <ul class="box3 genaral">
                            <li><a href="<?=$client_url?>/main_page/">home</a></li>
                            <li><a href="<?=$client_url?>/main_page/?cart">card</a></li>
                            <li><a href="<?=$client_url?>/main_page/?contact">contact</a></li>
                            <li class="menu_home11"><a href="#">menu</a><i class="fas fa-angle-down"></i>
                                <div class="menu-home"> 
                                  
                                    <div class="category">
                                      
                                       <div class="parent_1">
                                        <div class="row">
                                            <header><?=$list_cate[0]["name_EN"]?></header>
                                            
                                            <ul class="link_row">
                                            <?php
                                            $product=find_product_equal_id_cate($list_cate[0]["id_cate"]);
                                            $i=0;
                                            foreach($product as $key => $value){
                                                extract($value);
                                                $i++;
                                                echo ' 
                                                <li>
                                                <img src="'.$content_url_image_ad.$image.'" alt="">
                                                <h2>'.$name_EN.' ... <span>$'.number_format($price).'</span>
                                                    <label class="font_size_text">the content it under</label></h2>
                                                </li>
                                                ';
                                                if($i >= 3){
                                                break;
                                                }
                                            }
                                            ?>
                                            </ul>
                                        </div>
                                            <div class="row">
                                                <header><?=$list_cate[1]["name_EN"]?></header>
                                                <ul class="link_row">
                                                <?php
                                            $product=find_product_equal_id_cate($list_cate[1]["id_cate"]);
                                            $i=0;
                                            foreach($product as $key => $value){
                                                extract($value);
                                                $i++;
                                                echo ' 
                                                <li>
                                                <img src="'.$content_url_image_ad.$image.'" alt="">
                                                <h2>'.$name_EN.' ... <span>$'.number_format($price).'</span>
                                                    <label class="font_size_text">the content it under</label></h2>
                                                </li>
                                                ';
                                                if($i >= 3){
                                                break;
                                                }
                                            }
                                            ?>
                                            </ul>
                                            </div>
                                            <div class="row">
                                                <header><?=$list_cate[2]["name_EN"]?></header>
                                                <ul class="link_row">
                                                <?php
                                            $product=find_product_equal_id_cate($list_cate[2]["id_cate"]);
                                            $i=0;
                                            foreach($product as $key => $value){
                                                extract($value);
                                                $i++;
                                                echo ' 
                                                <li>
                                                <img src="'.$content_url_image_ad.$image.'" alt="">
                                                <h2>'.$name_EN.' ... <span>$'.number_format($price).'</span>
                                                    <label class="font_size_text">the content it under</label></h2>
                                                </li>
                                                ';
                                                if($i >= 3){
                                                break;
                                                }
                                            }
                                            ?>
                                            </ul>
                                            </div>
                                            
                                       </div>
                                        
                                    </div>
                                   
                                </div> 
                            </li>
                    </ul>
                    <div class="box4 genaral">
                    <div  id="parent_account"><i class="fas fa-user-circle"></i>
                                <ul class="acount_for_user">
                                         
                                         <?php
                                        //$_SESSION["user"]["id_kh"]
                                        //http://localhost:8090/text/coffe-house/admin/main_page/
                                        if(isset($_SESSION["user"])){
                                            echo ' <li><a href="'.$client_url.'/check_account/login.php'.'">Logout</a></li>
                                            <li><a href="'.$client_url.'/main_page/?account&update_user">Edit account</a></li>';
                                            if($_SESSION["user"]["role"] == 1){
                                               echo ' <li><a href="'.$admin_url.'/main_page/">admin</a></li>';
                                            }
                                        }else{
                                            echo ' <li><a href="'.$client_url.'/main_page/?account&login">Login</a></li>
                                            <li><a href="'.$client_url.'/main_page/?account&forgot_pass">forgot password</a></li>
                                            <li><a href="'.$client_url.'/main_page/?account&create_ac">Create account</a></li>
                                            ';
                                        }
                                         ?>
                                       
                                       
                                        
                                      
                                        
                                </ul>
                        </div>
                       <a href="#"> <i class="fab fa-facebook"></i></a>
                       <a href="#"> <i class="fab fa-instagram-square"></i></a>
                       
                        <div class="searching_form"><i class="fas fa-search"></i></div>
                    </div>
            </div>
    </section>