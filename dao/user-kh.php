<?php
    require_once("function_pdo.php");
    function insert_user($username,$pass,$fullname,$email
    ,$address,$image,$sex,$birth,$role ,$status ,$check_addmin ){
        $sql="INSERT INTO `user_kh`( `username`, `pass`, `fullname`, `email`,
        `address`, `image`, `sex`, `birth`, `role`, `status`, `check_admin`)
        VALUES (?,?,?,?,?,?,?,?,?,?,?)";
        return execute_pdo($sql,$username,$pass,$fullname,$email
        ,$address,$image,$sex == 1,$birth,$role == 1,$status == 1,$check_addmin == 1);
    }
    function update_user($username,$pass,$fullname,$email
    ,$address,$image,$sex,$birth,$role ,$status ,$check_addmin,$id_khachhang){
        $sql="UPDATE `user_kh`
        SET	`username`=?,`pass`=?,`fullname`=?,`email`=?,`address`=?,`image`=?,
            `sex`=?,`birth`=?,`role`=?,`status`=?,`check_admin`=? 
        WHERE id_kh =?";
         execute_pdo($sql,$username,$pass,$fullname,$email
        ,$address,$image,$sex == 1,$birth,$role == 1,$status == 1,$check_addmin == 1,$id_khachhang);
    }
    function delete_user($id_khachhang){
        $sql= "DELETE FROM `user_kh`
        WHERE id_kh =?";
         execute_pdo($sql,$id_khachhang);
    }
    function select_user_one($id_kh){
        $sql="SELECT * FROM `user_kh` WHERE  id_kh = ?";
        return select_one($sql,$id_kh);
    }
    //$fullname,$email,$address,$image,$check_image1,$date_user
    function update_userinfo($fullname,$email,$address,$image,$sex,$birth,$id_kh){
        $sql="UPDATE user_kh
        SET fullname =?,email=?,address=?,image=?,sex=?,birth=?
        WHERE id_kh=?";
         execute_pdo($sql,$fullname,$email,$address,$image,$sex ==1,$birth,$id_kh);
    }
    function list_user(){
        $sql="SELECT * FROM `user_kh` WHERE 1";
        return select_all($sql);
    }
    function quantily_user(){
        $sql="SELECT COUNT(id_kh) FROM `user_kh` WHERE 1";
        return select_value($sql);
    }
    function find_username($username){
        $sql="SELECT * FROM `user_kh` WHERE username = ?";
        return select_one($sql,$username);
    }
    function kh_sildeshow(){
        $next_page=7;//so trang se duoc hien thi
        $count_table=select_value("SELECT COUNT(id_kh) FROM `user_kh`");
 
        $tong_hientai= ceil($count_table / $next_page);
     //    echo $_POST["current_page"];
         $trang_hientai=(exist_param("current_page")) ? $_REQUEST["current_page"] : 0;
 
         if($trang_hientai < 0){
             $trang_hientai =0;}
         if($trang_hientai > $tong_hientai -1){
             $trang_hientai = $tong_hientai -1;}
 
         $start= $trang_hientai * $next_page;
         $sql="SELECT * FROM `user_kh`  LIMIT {$start},{$next_page}";
 
        $_SESSION["tong_trang"]=$tong_hientai;
         $_SESSION["back"]=$trang_hientai <=0 ? 0 : $trang_hientai -1;
         $_SESSION["next"]=$trang_hientai >= $tong_hientai -1 ? $tong_hientai -1 : $trang_hientai +1;
        return select_all($sql);
 
     }
    //  function count_user(){
    //     $sql="SELECT COUNT(id_kh) FROM user_kh";
    //     return select_value($sql);
    //  }
    
    // echo quantily_user();
    // echo "<pre>";
    // print_r(list_user());
    // echo "</pre>";
    // delete_user(2);
    // echo update_user("pham_tai",123,"pham dac tai12312","31","dasd","anh1",0,"2000-10-15",0,0,0,1);