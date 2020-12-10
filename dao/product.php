<?php
    require_once("function_pdo.php");
    function insert_product($name_EN,$name_VN,$image,$quantily,$prict
    ,$discount,$desription,$content,$id_cate){
        $sql="INSERT INTO `product`(`name_EN`, `name_VN`, `image`, `quantily`, `price`, `discount`, `desription`, `content`, `id_cate`)
        VALUES (?,?,?,?,?,?,?,?,?)";
        return execute_pdo($sql,$name_EN,$name_VN,$image,$quantily,$prict
        ,$discount,$desription,$content,$id_cate);
    }
    function update_product($name_EN,$name_VN,$image,$quantily,$prict
    ,$discount,$view_pd,$desription,$content,$id_cate,$id_product){
        $sql="UPDATE `product`
        SET `name_EN`=?,`name_VN`=?,`image`=?,`quantily`=?,`price`=?,`discount`=?,`view_pd`=?,`desription`=?,`content`=?,`id_cate`=?
        WHERE id_product =?";
        return execute_pdo($sql,$name_EN,$name_VN,$image,$quantily,$prict
        ,$discount,$view_pd,$desription,$content,$id_cate,$id_product);
    }
    function delete_product($id_product){
        $sql="DELETE FROM `product` WHERE id_product =?";
        execute_pdo($sql,$id_product);
    }
    function list_product_cart($array_id_product){
        $sql="SELECT * FROM `product` 
        WHERE id_product IN($array_id_product)";
        return select_all($sql,$array_id_product);
    }
    function find_product($id_pd){
        $sql="SELECT * FROM `product` WHERE id_product=?";
        return select_one($sql,$id_pd);
    }
    function quantily_product(){
        $sql="SELECT COUNT(id_product) FROM `product` WHERE 1";
        return select_value($sql);
    }
    function list_product(){
        $sql="SELECT * FROM product";
        return select_all($sql);
    }
    function searching_product($name_product){
        $sql="SELECT * FROM `product`
        WHERE name_EN like '%$name_product%' or name_VN like '%$name_product%'";
        return select_all($sql);
    }
    function find_product_equal_id_cate($id_cate){
        $sql="SELECT * FROM `product` WHERE id_cate = ?";
        return select_all($sql,$id_cate);
    }
    function raise_view($id_product){
        $sql="UPDATE product
        SET view_pd =view_pd + 1
        WHERE id_product =?";
        execute_pdo($sql,$id_product);
    }
    function hang_hoa_sildeshow(){
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
         $sql="SELECT * FROM `product`  LIMIT {$start},{$next_page}";
 
        $_SESSION["tong_trang"]=$tong_hientai;
         $_SESSION["back"]=$trang_hientai <=0 ? 0 : $trang_hientai -1;
         $_SESSION["next"]=$trang_hientai >= $tong_hientai -1 ? $tong_hientai -1 : $trang_hientai +1;
        return select_all($sql);
 
     }
    // function count_product(){
    //     $sql="SELECT COUNT(id_product) FROM product";
    //     return select_value($sql);
    // }
    // echo quantily_product();
    // echo "<pre>";
    // print_r(list_product());
    // echo "</pre>";
// delete_product(2);
    // echo update_product("san pham 1","san pham 1","anh1",4,555,4,3,"asda","asd",1,1);

