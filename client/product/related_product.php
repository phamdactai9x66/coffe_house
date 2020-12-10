<section class="related_product">
            <h1 style="text-align: center;padding: 5px 0;">RELATED PRODUCTS</h1>
            <ul class="grid-bottom">
               
                <?php
                $i=0;
                    foreach($list_cate_id_pd as $key => $value){
                        extract($value);
                        $i++;
                        if($i >3){
                            return;
                        }
                            if($image == "img.png" or $image == "" ){
                                $image=$document_url_admin.$image;
                            }else{
                                $image=$document_url_admin.$image;
                            }
                            echo '  <li>
                            <a href="'.$client_url.'/product/?id_product='.$id_product.'">
                            <img src="'.$image.'" alt="">
                            <h2>'.$name_EN.'</h2>
                            <p><label for="" style="text-decoration: line-through;color:rergb(212, 65, 65)d;">$'.$price.'</label> - 
                            <label for="" class="count_money">$'.$price *  (float)$discount.'</label></p>
                        
                            </a>
                            <a href="#" id="hello">ADD TO CART</a>
                        </li>';
                       
                    }
                ?>
             </ul>
        </section>