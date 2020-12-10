<?php
require("../../global.php");
require_once("../../dao/comment.php");
$brand_category="Comment";
extract($_REQUEST);

if(exist_param("delete_cate")){
    try{
        if(check_empty($id_pd)){
        delete_comment_product($id_pd);

        $list_comment=comment_product();
        }else{
            $list_comment=comment_product();
        }
       
    
      }catch(PDOException $check){
          $check->getMessage();
      }
      $VIEW_NAME="list_comment.php";

} else if(exist_param("edit_cate")){
    try{
        if(isset($id_pd)){
            $list_comment_kh=list_comment($id_pd);
        }else{
            $VIEW_NAME="list_comment.php";
            $list_comment=comment_product();
            require("../layout.php");
            return;
        }
      
       
        // echo "<pre>";
        // print_r($list_comment_kh);
        // echo "</pre>";
    
      }catch(PDOException $check){
          $check->getMessage();
      }
      $VIEW_NAME="list_comment_kh.php";
}else if(exist_param("delete_comment")){
    try{
        delete_comment($id_product);
        $list_comment_kh=list_comment($id_pd);
    
      }catch(PDOException $check){
          $check->getMessage();
      }
      $VIEW_NAME="list_comment_kh.php";
}
else{
  try{
    $list_comment=comment_sildeshow();


  }catch(PDOException $check){
      $check->getMessage();
  }
$VIEW_NAME="list_comment.php";
}




require("../layout.php");