<?php
// echo "xin chao this cart";
// echo "<pre>";
// print_r($_SESSION);
// echo "</pre>";
$quantily_one=$quantily_all=0;
$table="";
if(isset($_SESSION["cart"]) and !empty($_SESSION["cart"])){
        $array_key=array_keys($_SESSION["cart"]);
        $array_id=implode(",",$array_key);
        // echo $array_id;
        if($array_id){
            $value_array= list_product_cart($array_id);
            // echo "<pre>";
            // print_r($value_array);
            // echo "</pre>";
            // echo "<pre>";
            // print_r($_SESSION["cart"]);
            // echo "</pre>";
            foreach($value_array as $key => $value){
                extract($value);
                if( $_SESSION["cart"][$id_product] >  $quantily){
                    $_SESSION["cart"][$id_product]= $quantily;
                }
                $quantily_one=$price * $_SESSION["cart"][$id_product];
              
                $quantily_all+=$quantily_one;
                if($image == "img.png" or $image == "" ){
                    $image=$content_url_image_ad.$image;
                   }else{
                       $image=$content_url_image_ad.$image;
                   }
                $table.='
                <tr>
                <td><a href="'.$client_url.'/product/cart.php?remove='.$id_product.'"><i class="fas fa-times"></i></a></td>
                <td><img src="'.$image.'" alt=""></td>
                <td> <label>'.$name_EN.'</label> 
                </td>
                <td>$'.number_format($price).'</td>
                <td><input type="number" name="quantily-'.$id_product.'" id="" value="'.$_SESSION["cart"][$id_product].'" min="1" max="'.$quantily.'"> </td>
                <td><label>$</label>'.number_format($quantily_one).'</td>
                ';
            }
          
        } 
}
// if (isset($_GET['remove']) && is_numeric($_GET['remove']) && isset($_SESSION['cart']) && isset($_SESSION['cart'][$_GET['remove']])) {
    
//     unset($_SESSION['cart'][$_GET['remove']]);
//     header("location: http://localhost:8090/text/coffe-house/client/main_page/?cart");
// }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?=$content_url?>/client/css/cart.css" class="css">
</head>
<body>
<section class="main-center">
                <div class="list_detail_bill">
                       <form action="<?=$client_url?>/product/cart.php" method="post">
                            <table>
                                <thead>
                                    <tr>
                                        <th></th>
                                        <th></th>
                                        <th>PRODUCT</th>
                                        <th>PRICE</th>
                                        <th>QUANTITY</th>
                                        <th>SUBTOTA</th>
                                    </tr>
                                </thead>
                                <tbody>
                                       
                                <?php
                                echo $table;
                                ?>
                                       
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <td  colspan="6"><input type="submit" name="update_list_cart" value="UPDATE CART"></td>
                                    </tr>
                                </tfoot>
                        </table>
                       </form>
                    
                      <div class="buy_now">
                           <h1>CART TOTALS</h1>
                           <table style="width: 100%;border-collapse: collapse;">
                               <tr>
                                   <td>Subtotal</td>
                                   <td>$<?=number_format($quantily_all)?></td>
                               </tr>
                               <tr>
                                <td>Total</td>
                                <td>$<?=number_format($quantily_all)?></td>
                            </tr>
                           </table>
                           <?php
                           if(isset($_SESSION["user"])){

                           
                           ?>
                           <form class="form_buy" action="<?=$client_url?>/product/cart.php" method="post" style="width:100%;">
                           <input type="submit" name="buy_now" value="proceed to checkout" >
                           <input type="hidden" name="quantily_all" value="<?=$quantily_all?>">
                          
                           
                         </form>
                            <?php }else{?>
                                <form class="form_buy" action="<?=$client_url?>/main_page/?account&login" method="post" style="width:100%;">
                            
                            
                                <input type="submit" value="Login to buy product" >
                            </form>
                            <?php }?>

                       </div>
                      
                </div>
        </section>
</body>
</html>