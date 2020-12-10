<?php
    require_once("function_pdo.php");
    //tong so comment theo loai
    function comment_product(){
        $sql="SELECT pd.id_product,pd.name_EN,pd.image,COUNT(cm.id_comment) as 'sl_comment',
        MIN(cm.date_post) as 'new', MAX(cm.date_post) as 'old'
        FROM product pd LEFT JOIN comment cm on pd.id_product = cm.id_product
        GROUP BY  pd.id_product,pd.name_EN";
        return select_all($sql);
    }
    //list comment theo liaj san pham
    function list_comment($id_kh){
        $sql="SELECT  cm.id_comment,pd.id_product,kh.sex, kh.fullname,kh.image,cm.content,cm.date_post
        FROM product pd INNER JOIN comment cm on cm.id_product= pd.id_product
                            INNER join user_kh kh on kh.id_kh = cm.id_kh
        WHERE pd.id_product = ?";
        return select_all($sql,$id_kh);
    }
    function delete_comment($id_kh){
        $sql="DELETE FROM `comment`
        WHERE id_comment=?";
        execute_pdo($sql,$id_kh);
    }
    function insert_comment($content,$id_product,$id_kh,$date){
        $sql="INSERT INTO `comment`( `content`, `id_product`, `id_kh`, `date_post`)
        VALUES (?,?,?,?)";
        execute_pdo($sql,$content,$id_product,$id_kh,$date);
    }
    function delete_comment_product($id_pd){
        $sql="DELETE FROM `comment` WHERE id_product=?";
        execute_pdo($sql,$id_pd);
    }
    function check_empty($id_pd){
        $sql="SELECT * FROM `comment` WHERE id_product =?";
        return select_one($sql,$id_pd);
    }
    function comment_sildeshow(){
        $next_page=7;//so trang se duoc hien thi
        $count_table=select_value("SELECT COUNT(id_product) FROM `product`");
 
        $tong_hientai= ceil($count_table / $next_page);
     //    echo $_POST["current_page"];
         $trang_hientai=(exist_param("current_page")) ? $_REQUEST["current_page"] : 0;
 
         if($trang_hientai < 0){
             $trang_hientai =0;}
         if($trang_hientai > $tong_hientai -1){
             $trang_hientai = $tong_hientai -1;}
 
         $start= $trang_hientai * $next_page;
         $sql="SELECT pd.id_product,pd.name_EN,pd.image,COUNT(cm.id_comment) as 'sl_comment',
         MIN(cm.date_post) as 'new', MAX(cm.date_post) as 'old'
         FROM product pd LEFT JOIN comment cm on pd.id_product = cm.id_product
         GROUP BY  pd.id_product,pd.name_EN
           LIMIT {$start},{$next_page}";
 
        $_SESSION["tong_trang"]=$tong_hientai;
         $_SESSION["back"]=$trang_hientai <=0 ? 0 : $trang_hientai -1;
         $_SESSION["next"]=$trang_hientai >= $tong_hientai -1 ? $tong_hientai -1 : $trang_hientai +1;
        return select_all($sql);
 
     }
    // function count_comment(){
    //     $sql="SELECT COUNT(id_comment) FROM comment";
    //     return select_value($sql);
    // }
    // echo count_comment();
    // delete_comment(1);
    // echo "<pre>";
    // print_r(list_comment(1));
    // echo "<pre>";