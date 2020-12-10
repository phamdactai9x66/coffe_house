<?php
require("../../global.php");
require_once("../../dao/bill.php");
require_once("../../dao/detail_bill.php");
extract($_REQUEST);
$brand_category="bill";
if(exist_param("delete_bill")){
    try{
        delete_bill($id_bill_1);
        $list_bill=list_bill();

    }catch(PDOException $check){
        $check->getMessage();
    }
    $VIEW_NAME="bill/list_bill.php";
}else if(exist_param("detail_bill")){
    try{
       
        $list_bill=list_detail_bill($id_bill_1);
        // echo "<pre>";
        // print_r($list_bill);
        // echo "</pre>";

    }catch(PDOException $check){
        $check->getMessage();
    }
    $VIEW_NAME="bill/detail_bill.php";
}
else if(exist_param("delete_bill_part2")){
    try{
        delete_detail_bill($id_product_bill);
        $list_bill=list_detail_bill($id_bill_1);
    }catch(PDOException $check){
        $check->getMessage();
    }
    $VIEW_NAME="bill/detail_bill.php";
}
else{
   try{
    $list_bill=list_bill();
   }catch(PDOException $check){
       $check->getMessage();
   }
    $VIEW_NAME="bill/list_bill.php";
}
require("../layout.php");