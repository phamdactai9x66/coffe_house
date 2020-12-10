<?php
            // echo "<pre>";
            // print_r($list_cate);
            // echo "</pre>";
                // foreach($list_cate as $key => $value){
                //     echo ''
                // }
            
            ?>
<div class="heade-main">
        <h1>
            shop
        </h1>
        <nav>
            <li><a href="?all_product">ALL PRODUCTS</a></li>
            <?php
          
                foreach($list_cate as $key => $value){
                    extract($value);
                    echo '<li><a href="?id_cate='.$id_cate.'">'.$name_EN.'</a></li>';
                }
            
            ?>
            <!-- <li><a href="#">ACCESSORIES</a></li>
            <li><a href="#">APPAREL</a></li>
            <li><a href="#">COFFEE</a></li>
            <li><a href="#">EQUIPMENT</a></li> -->
        </nav>
       </div>
       <div>
       <div class="flex-mindle">
               <p>Showing all <label for="" id="count_product">12</label> results</p>
               <div>
             
       <?php
       if(isset($_POST["value_search"])){
           echo  '<label>The searching result:</label> <label style="  text-transform: uppercase;
           font-size: 1.1rem;" >'.$_POST["value_search"].'</label>';
       }
       ?>
       </div>
               <form action="" method="post">
                   <select name="select_option" id="option_kind">
                       <option value="">Efault sorting</option>
                       <option value="1">0$ - 100$</option>
                       <option value="2">100$ - 300$</option>
                       <option value="3">300$ -></option>
                   </select>
               </form>
           </div>
       </div>
       <?php
       $save_list="";
        if(exist_param("id_cate")){
            $list_cate= find_product_equal_id_cate($_GET["id_cate"]);
         
            foreach($list_cate as $key => $value){
                extract($value);
                if($image == "img.png" or $image == "" ){
                    $image=$content_url_image_ad.$image;
                   }else{
                       $image=$content_url_image_ad.$image;
                   }
                   $discount="0.".$discount."<br />";
                //    echo (float)$discount;
                //    echo $discount;
                $save_list.='  <li>
                <a href="'.$client_url.'/product/?id_product='.$id_product.'">
                 <img src="'.$image.'" alt="">
                 <h2>'.$name_EN.'</h2>
                 <p><label for="" style="text-decoration: line-through;color:rergb(212, 65, 65)d;">$'.$price.'</label> - 
                 <label for="" class="count_money">$'.$price *  (float)$discount.'</label></p>
               
                </a>
                <a href="'.$client_url.'/product/?id_product='.$id_product.'" id="hello">ADD TO CART</a>
            </li>';
            }
            // echo "<pre>";
            // print_r($list_cate);
            // echo "</pre>";
        }else if(exist_param("searching_product")){
            if(isset($_POST["value_search"])){
                $searching= searching_product($_POST["value_search"]);
                foreach($searching as $key => $value){
                    extract($value);
                    if($image == "img.png" or $image == "" ){
                        $image=$content_url_image_ad.$image;
                       }else{
                           $image=$content_url_image_ad.$image;
                       }
                       $discount="0.".$discount."<br />";
                    //    echo (float)$discount;
                    //    echo $discount;
                    $save_list.='  <li>
                    <a href="'.$client_url.'/product/?id_product='.$id_product.'">
                     <img src="'.$image.'" alt="">
                     <h2>'.$name_EN.'</h2>
                     <p><label for="" style="text-decoration: line-through;color:rergb(212, 65, 65)d;">$'.$price.'</label> - 
                     <label for="" class="count_money">$'.$price *  (float)$discount.'</label></p>
                   
                    </a>
                    <a href="'.$client_url.'/product/?id_product='.$id_product.'" id="hello">ADD TO CART</a>
                </li>';
                }
            }else{
                header("location: #");
            }
           
        }
        else{
            $list_cate= list_product();
            foreach($list_cate as $key => $value){
                extract($value);
                if($image == "img.png" or $image == "" ){
                    $image=$content_url_image_ad.$image;
                   }else{
                       $image=$content_url_image_ad.$image;
                   }
                $save_list.='  <li>
                <a href="'.$client_url.'/product/?id_product='.$id_product.'">
                 <img src="'.$image.'" alt="">
                 <h2>'.$name_EN.'</h2>
                 <p><label for="" style="text-decoration: line-through;color:rergb(212, 65, 65)d;">$'.$price.'</label> - 
                 <label for="" class="count_money">$'.$price *  (float)$discount.'</label></p>
               
                </a>
                <a href="'.$client_url.'/product/?id_product='.$id_product.'" id="hello">ADD TO CART</a>
            </li>';
            }
        }
       ?>
       <!-- <ul class="grid-bottom">
           <li>
               <a href="#">
                <img src="<?=$document_url_clien?>milk-chocolate-blend-300x300.png" alt="">
                <h2>Brazilian Coffee</h2>
                <p><label for="">$13</label> - <label for="">$131</label></p>
              
               </a>
               <a href="#" id="hello">ADD TO CART</a>
           </li>
           <li>
               <a href="#">
                <img src="<?=$document_url_clien?>milk-chocolate-blend-300x300.png" alt="">
                <h2>Brazilian Coffee</h2>
                <p><label for="">$13</label> - <label for="">$131</label></p>
              
               </a>
               <a href="#" id="hello">ADD TO CART</a>
           </li>
           <li>
               <a href="#">
                <img src="<?=$document_url_clien?>milk-chocolate-blend-300x300.png" alt="">
                <h2>Brazilian Coffee</h2>
                <p><label for="">$13</label> - <label for="">$131</label></p>
              
               </a>
               <a href="#" id="hello">ADD TO CART</a>
           </li>
           <li>
               <a href="#">
                <img src="<?=$document_url_clien?>milk-chocolate-blend-300x300.png" alt="">
                <h2>Brazilian Coffee</h2>
                <p><label for="">$13</label> - <label for="">$131</label></p>
              
               </a>
               <a href="#" id="hello">ADD TO CART</a>
           </li>
           <li>
               <a href="#">
                <img src="<?=$document_url_clien?>milk-chocolate-blend-300x300.png" alt="">
                <h2>Brazilian Coffee</h2>
                <p><label for="">$13</label> - <label for="">$131</label></p>
              
               </a>
               <a href="#" id="hello">ADD TO CART</a>
           </li>
           <li>
               <a href="#">
                <img src="<?=$document_url_clien?>milk-chocolate-blend-300x300.png" alt="">
                <h2>Brazilian Coffee</h2>
                <p><label for="">$13</label> - <label for="">$131</label></p>
              
               </a>
               <a href="#" id="hello">ADD TO CART</a>
           </li>
           
       </ul> -->
       
       <ul class="grid-bottom">
      
        <?php
            echo $save_list;
        ?>
       </ul>
       