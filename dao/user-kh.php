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
        return execute_pdo($sql,$username,$pass,$fullname,$email
        ,$address,$image,$sex == 1,$birth,$role == 1,$status == 1,$check_addmin == 1,$id_khachhang);
    }
    function delete_user($id_khachhang){
        $sql= "DELETE FROM `user_kh`
        WHERE id_kh =?";
         execute_pdo($sql,$id_khachhang);
    }
    function list_user(){
        $sql="SELECT * FROM `user_kh` WHERE 1";
        return select_all($sql);
    }
    function quantily_user(){
        $sql="SELECT COUNT(id_kh) FROM `user_kh` WHERE 1";
        return select_value($sql);
    }
    
    // echo quantily_user();
    // echo "<pre>";
    // print_r(list_user());
    // echo "</pre>";
    // delete_user(2);
    // echo update_user("pham_tai",123,"pham dac tai12312","31","dasd","anh1",0,"2000-10-15",0,0,0,1);