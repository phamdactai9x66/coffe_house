<?php
require_once("../../global.php");
require_once("../../dao/category.php");
require_once("../../dao/product.php");

$list_cate=list_cate();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home 6 &#8211; Craft | Cafes Coffee Shops Bars WordPress</title>
    <link rel="icon" type="image/png"  href="<?=$document_url_clien?>logo_white-e1592989810533.png" >
    <script src="<?=$content_url?>/client/js/main_home.js"></script>

    <link rel="stylesheet" href="<?=$content_url?>/client/css/main_home.css" class="css">
    <script src="https://kit.fontawesome.com/f0abe83c71.js" crossorigin="anonymous"></script>
    
</head>

<body> 
    
    <!-- \style="display: none;" -->
    <div class="search_full_screen" style="visibility: hidden;">
        <form action="<?=$url_clien?>/main_page/?searching_product" method="post" class="form_search" >
                <div>
                        <input type="text" name="value_search" id="" placeholder="Searching product">
                        <button name="butom"><i class="fas fa-search"></i></button>
                </div>
        </form>
    </div>
    <a href="#" id="back-top"><i class="fab fa-autoprefixer"></i></a>   
    <section class="parent-filex">
        <section class="filex">
            <a href="<?=$client_url?>/main_page/" class="brand-header"><img src="<?=$content_url_image_client?>logo_white-e1592989810533.png" alt=""></a>
            <div class="border-filex">
                <div class="filex-content-top">
                    <div>
                        <p>LOCATION LAKE HOUSE,
                            13 HANWAY SQUARE, LONDON, ENGLAND</p>
                        <div>
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
                          
                        </div>
                        <a href="#">234.567.3455</a>

                    </div>
                </div>
            </div>
            <div class="border-filex">
                <div class="filex-content-bottom">
                    <div class="first_child_bottom">
                        <ul>
                            <li><a href="<?=$client_url?>/main_page/main_home.php">home</a></li>
                            <li class="menu_home11" ><a  href="#" >menu</a>
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
                        <ul>
                            <li><a href="<?=$client_url?>/main_page/">shop</a></li>
                            <li><a href="<?=$client_url?>/main_page/?cart">card</a></li>
                            <li><a href="<?=$client_url?>/main_page/?contact">contact</a></li>
                            <li class="searching_form"><i class="fas fa-search"></i></li>
                        </ul>

                    </div>
                </div>
            </div>

        </section>
    </section>
   
    <section class="parent-filex2 ">
        <section class="filex">
        <a href="<?=$client_url?>/main_page/" class="brand-header"><img src="<?=$content_url_image_client?>logo-e1592989828631.png" alt=""></a> 
            <div class="border-filex">
                <div class="filex-content-bottom">
                    <div class="first_child_bottom">
                        <ul>
                            <li><a href="<?=$client_url?>/main_page/main_home.php">home</a></li>
                            <li class="menu_home11" ><label class="menu_child">menu</label>
                                <div class="menu-home"> 
                                  
                                    <div class="category">
                                      
                                       <div class="parent_1">
                                        <div class="row">
                                            <header>home site</header>
                                            <ul class="link_row">
                                            <li>
                                                    <img src="<?=$content_url_image_client?>58db701349cb48738069e8c912e2b3ac_result-150x150.jpg" alt="">
                                                    <h2>cafe americano ... <span>$9</span><span>$9</span>
                                                        <label class="font_size_text">the content it under</label></h2>
                                                </li>
                                                <li>
                                                    <img src="<?=$content_url_image_client?>58db701349cb48738069e8c912e2b3ac_result-150x150.jpg" alt="">
                                                    <h2>cafe americano ... <span>$9</span><span>$9</span>
                                                        <label class="font_size_text">the content it under</label></h2>
                                                </li>
                                                <li>
                                                    <img src="<?=$content_url_image_client?>58db701349cb48738069e8c912e2b3ac_result-150x150.jpg" alt="">
                                                    <h2>cafe americano ... <span>$9</span><span>$9</span>
                                                        <label class="font_size_text">the content it under</label></h2>
                                                </li>
                                            </ul>
                                        </div>
                                            <div class="row">
                                                <header>home site</header>
                                                <ul class="link_row">
                                            <li>
                                                    <img src="<?=$content_url_image_client?>58db701349cb48738069e8c912e2b3ac_result-150x150.jpg" alt="">
                                                    <h2>cafe americano ... <span>$9</span><span>$9</span>
                                                        <label class="font_size_text">the content it under</label></h2>
                                                </li>
                                                <li>
                                                    <img src="<?=$content_url_image_client?>58db701349cb48738069e8c912e2b3ac_result-150x150.jpg" alt="">
                                                    <h2>cafe americano ... <span>$9</span><span>$9</span>
                                                        <label class="font_size_text">the content it under</label></h2>
                                                </li>
                                                <li>
                                                    <img src="<?=$content_url_image_client?>58db701349cb48738069e8c912e2b3ac_result-150x150.jpg" alt="">
                                                    <h2>cafe americano ... <span>$9</span><span>$9</span>
                                                        <label class="font_size_text">the content it under</label></h2>
                                                </li>
                                            </ul>
                                            </div>
                                            <div class="row">
                                                <header>home site</header>
                                                <ul class="link_row">
                                            <li>
                                                    <img src="<?=$content_url_image_client?>58db701349cb48738069e8c912e2b3ac_result-150x150.jpg" alt="">
                                                    <h2>cafe americano ... <span>$9</span><span>$9</span>
                                                        <label class="font_size_text">the content it under</label></h2>
                                                </li>
                                                <li>
                                                    <img src="<?=$content_url_image_client?>58db701349cb48738069e8c912e2b3ac_result-150x150.jpg" alt="">
                                                    <h2>cafe americano ... <span>$9</span><span>$9</span>
                                                        <label class="font_size_text">the content it under</label></h2>
                                                </li>
                                                <li>
                                                    <img src="<?=$content_url_image_client?>58db701349cb48738069e8c912e2b3ac_result-150x150.jpg" alt="">
                                                    <h2>cafe americano ... <span>$9</span><span>$9</span>
                                                        <label class="font_size_text">the content it under</label></h2>
                                                </li>
                                            </ul>
                                            </div>
                                            
                                       </div>
                                        
                                    </div>
                                   
                                </div> 
                            </li>
                        </ul>
                        <ul>
                            <li><a href="<?=$client_url?>/main_page/">shop</a></li>
                            <li><a href="<?=$client_url?>/main_page/?contact">contact</a></li>
                            <li class="searching_form"><i class="fas fa-search"></i></li>
                        </ul>
<!--  <li><a href="<?=$client_url?>/main_page/">shop</a></li>
                            <li><a href="<?=$url_clien?>/main_page/?cart">card</a></li>
                            <li><a href="<?=$url_clien?>/main_page/?contact">contact</a></li>
                            <li class="searching_form"><i class="fas fa-search"></i></li> -->
                    </div>
                </div>
            </div>

        </section>
    </section>

    <header id="header">

        <!-- <div class="backgrounc-black"></div> -->

        <section id="content_header">

            <div id="text-content-header">
                <p>DELIGHTFUL EXPERIENCE</p>
                <h1>COFFEE MAKES US SEVERE, AND GRAVE</h1>
                <a href="<?=$client_url?>/main_page/">VIEW SHOP</a>

            </div>
            <div id="border1"></div>

        </section>
        <div id="backgrounc-buttom-header"></div>
    </header>
    <main>
        <section id="product-header-main">
            <article id="header-main">
                <div id="parent-product-header-main">
                    <div class="flex-child bg-1">
                       
                        <div class="next-flex-child">
                            <div class="last-flex-child">

                                <div>
                                    <img src="<?=$content_url_image_client?>noun_Coffee_3077892.png" alt="">
                                    <h2>coffe</h2>
                                </div>
                                <div>Cras chinwag brown bread Eaton cracking goal so I said a load of old tosh baking
                                    cakes, geeza arse it’s your round grub sloshed burke, my good sir chancer he legged
                                    it he lost his bottle pear shaped bugger all mate.</div>
                            </div>
                        </div>
                    </div>
                    <div class="flex-child bg-2">
                        
                        <div class="next-flex-child">
                            <div class="last-flex-child">

                                <div>
                                    <img src="<?=$content_url_image_client?>bakery-icon.png" alt="">
                                    <h2>BAKERY</h2>
                                </div>
                                <div>Cras chinwag brown bread Eaton cracking goal so I said a load of old tosh baking
                                    cakes, geeza arse it’s your round grub sloshed burke, my good sir chancer he legged
                                    it he lost his bottle pear shaped bugger all mate.</div>
                            </div>
                        </div>
                    </div>
                    <div class="flex-child bg-3">
                      
                        <div class="next-flex-child">
                            <div class="last-flex-child">

                                <div>
                                    <img src="<?=$content_url_image_client?>noun_Breakfast_3357939.png" alt="">
                                    <h2>BREAKFAST</h2>
                                </div>
                                <div>Cras chinwag brown bread Eaton cracking goal so I said a load of old tosh baking
                                    cakes, geeza arse it’s your round grub sloshed burke, my good sir chancer he legged
                                    it he lost his bottle pear shaped bugger all mate.</div>
                            </div>
                        </div>
                    </div>
                </div>
            </article>
        </section>
        <section id="parent-sevice">
            <div id="flex-service">
                <div class="child-service box1">
                   <div class="flex-service-text">
                    <p>Delightful Experience</p>
                    <h1>Delightful Experience</h1>
                    <p class="tag_p">Nesting close by to our Tiroran Estate, these legendary birds are the inspiration behind our
                        family-owned Whitetail brand. Just like its namesake,</p>
                       <div>
                           <img src="<?=$content_url_image_client?>signature-1-e1592385747477.png" alt="">
                       </div>
                   </div>
                </div>
                <div class="child-service box2 ">
                   <div  id="list_image2">
                            <div><img src="<?=$content_url_image_client?>on-26WN7JR-683x1024.jpg" alt=""></div>
                            <div><img src="<?=$content_url_image_client?>P4TJEQG-683x1024.jpg" alt=""></div>
                   </div>
            </div>
            </div>
        </section>
        <section class="bg-black-main-top"></section>
        <section id="parent-sevice2"v>
            <div id="flex-service2">
                <div class="child-service box1">
                   <div class="flex-service-text">
                    <p>Delightful Experience</p>
                    <h1>Delightful Experience</h1>
                    <p class="tag_p">Nesting close by to our Tiroran Estate, these legendary birds are the inspiration behind our
                        family-owned Whitetail brand. Just like its namesake,</p>
                       <a href="<?=$client_url?>/main_page/">VIEW SHOP</a>
                   </div>
                </div>
                <div class="child-service box2 ">
                   <div  id="list_image2">
                            <div><img src="<?=$content_url_image_client?>on-26WN7JR-683x1024.jpg" alt=""></div>
                            <div><img src="<?=$content_url_image_client?>P4TJEQG-683x1024.jpg" alt=""></div>
                   </div>
            </div>
            </div>
        </section>
        <section class="bg-black-main-bottom"></section>
       
    </main>
    <footer>
        <section class="footer-top" >
            <div class="content-footer">
                    <div class="box box1-footer">
                        <div class="flex-service-text2">
                            <h1>Delightful Experience</h1>
                            <p class="tag_p">Nesting close by to our Tiroran Estate, these legendary birds are the inspiration behind our
                                family-owned Whitetail brand. Just like its namesake,</p>
                                <div>
                                    <img src="<?=$content_url_image_client?>signature-1-e1592385747477.png" alt="">
                                </div>
                           </div>
                    </div>
                    <div class="box box2-footer"></div>
                    <div id="brand-footer">
                        <img src="<?=$content_url_image_client?>since_1997.png" alt="">
                    </div>
            </div>
            <footer>
            <section class="footer-center">
                    <div class="content-footer-center">
                            <div>
                                <div class="image-footer-center part1">
                                   <div>
                                    <img src="<?=$content_url_image_client?>icon_vintage_compass.png" alt="">
                                    <p><label>Openning Hours</label><br>11.30AM – 2.30PM</p>
                                   </div>
                                </div>
                                <div class="image-footer-center">
                                    <div>
                                        <img src="<?=$content_url_image_client?>icon_vintage_phone.png" alt="">
                                        <p><label>Openning Hours</label><br>11.30AM – 2.30PM</p>
                                    </div>
                                </div>
                                <div class="image-footer-center part-3">
                                   <div>
                                    <i class="fab fa-facebook"></i>
                                    <i class="fab fa-instagram-square"></i>
                                    <i class="fab fa-twitter"></i>
                                   </div>
                                </div>
                                <div></div>
                            </div>
                    </div>
            </section>
    </footer>


</body>

</html>