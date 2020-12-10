<?php
extract($_REQUEST);
// echo "<pre>";
// print_r($_POST);
// echo "</pre>";
require_once("../../global.php");
require_once("../../dao/product.php");
require_once("../../dao/category.php");
require_once("../../dao/bill.php");
require_once("../../dao/detail_bill.php");
$date= date("Y-m-d-H-i-s");
// echo $date;

if(exist_param("buy_now")){
  
    $array_key=array_keys($_SESSION["cart"]);
    $array_id=implode(",",$array_key);// 31,35
    // echo $array_id;
    if($array_id){
        $value_array= list_product_cart($array_id);//31/35
        //
        $id_hoa_hon= insert_bill($_SESSION["user"]["id_kh"],$quantily_all,$date);
        //
        foreach($value_array as $key => $value){

            extract($value);
            $quantily_one=$price * $_SESSION["cart"][$id_product];// $quantily_one
            $id_hdct=insert_detail_bill($id_product,$id_hoa_hon, $_SESSION["cart"][$id_product],$quantily_one);
        }
        unset($_SESSION["cart"]);
        echo "thanh cong";

    }else{
        header('location: '.$client_url.'/main_page/?cart');
        exit;
    }
    header('location: '.$client_url.'/main_page/?cart');
    // session_destroy();
    //$id_user,$total_money,$time
    // echo $date;
  
    //$id_sanpham,$id_hoadon,$soluong,$prict_product
    
    
    // $id_product,$id_bill,$quantily,$prict
    
   
    
  
}
if (isset($_POST['id_product'], $_POST['quantily']) && is_numeric($_POST['id_product']) && is_numeric($_POST['quantily'])) {
  
    $product_id = (int)$_POST['id_product'];
    $quantity = (int)$_POST['quantily'];
    $check_product=find_product($id_product);
   
    if ($check_product && $quantity > 0) {
       
        if (isset($_SESSION['cart']) && is_array($_SESSION['cart'])) {
            if (array_key_exists($product_id, $_SESSION['cart'])) {
              
                $_SESSION['cart'][$product_id] += $quantity;
            } else {
               
                $_SESSION['cart'][$product_id] = $quantity;
            }
        } else {
          
            $_SESSION['cart'] = array($product_id => $quantity);
        }
    }

    header('location: '.$client_url.'/product/?id_product='.$id_product.'');
    // Prevent form resubmission...
    // header('location: index.php?page=cart');
    // exit;
}
if (isset($_GET['remove']) && is_numeric($_GET['remove']) && isset($_SESSION['cart']) && isset($_SESSION['cart'][$_GET['remove']])) {
    
    unset($_SESSION['cart'][$_GET['remove']]);
    header("location: '.$client_url.'/main_page/?cart");
}

if (isset($_POST['update_list_cart']) && isset($_SESSION['cart'])) {

    foreach ($_POST as $k => $v) {
        if (strpos($k, 'quantily') !== false && is_numeric($v)) {
            $id = str_replace('quantily-', '', $k);
            $quantity = (int)$v;
            // Always do checks and validation
            if (is_numeric($id) && isset($_SESSION['cart'][$id]) && $quantity > 0) {
                // Update new quantity
                $_SESSION['cart'][$id] = $quantity;
            }
        }
    }
   
    header('location: '.$client_url.'/main_page/?cart');
    exit;
}