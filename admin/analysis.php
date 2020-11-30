<?php
 require_once("../../dao/function_pdo.php");
     function count_user(){
        $sql="SELECT COUNT(id_kh) FROM user_kh";
        return select_value($sql);
     }
     function count_bill(){
        $sql="SELECT COUNT(id_bill) FROM bill";
        return select_value($sql);
    }
    function count_product(){
        $sql="SELECT COUNT(id_product) FROM product";
        return select_value($sql);
    }
    function count_comment(){
        $sql="SELECT COUNT(id_comment) FROM comment";
        return select_value($sql);
    }

?>

<div class="row_analysis">
                    <div >
                      <div class="flex_row_analysis">
                        <span class="box1"><i class="far fa-comments"></i></span>
                        <p><label for="">comment</label> <br>
                            <label class="font_ad"><span><?=count_comment()?></span></label>
                        </p>
                      </div>
                    </div>
                    <div >
                       <div class="flex_row_analysis">
                        <span class="box2"><i class="fab fa-product-hunt"></i></span>
                        <p><label for="">product</label> <br>
                            <label class="font_ad"><span><?=count_product()?></span></label>
                        </p>
                       </div>
                    </div>
                    <div >
                        <div class="flex_row_analysis">
                            <span class="box3"><i class="fas fa-shopping-cart"></i></span>
                        <p><label for="">cart</label> <br>
                            <label class="font_ad"><span><?=count_bill()?></span></label>
                        </p>
                        </div>
                    </div>
                    <div >
                       <div class="flex_row_analysis">
                        <span class="box4"><i class=" fas fa-users"></i></span>
                        <p><label for="">users</label> <br>
                            <label class="font_ad"><span><?=count_user()?></span></label>
                        </p>
                       </div>
                    </div>
            </div>