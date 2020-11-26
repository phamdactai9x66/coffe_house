<?php
    session_start();
    $root_url="/text/coffe-house";
    $client_url=$root_url."/client";
    $content_url=$root_url."/content";
    $admin_url=$root_url."/admin";
    // echo "$content_url/admin/admin.css";
    // echo '   <a href="'.$content_url.'/admin/admin.css">das</a>';
    $image_dir=$_SERVER["DOCUMENT_ROOT"].$content_url;
    // echo $image_dir;

    $VIEW_NAME = "index.php";
    //kiem tra ton tai gia tri or bien
    function exist_param($fieldname){
        return array_key_exists($fieldname, $_REQUEST);
    }
    //duong dan thu luu image
    function save_file($fieldname, $target_dir){
        if(!file_exists($target_dir)){
            mkdir($target_dir, 0777,1 );
        }
        $file_uploaded = $_FILES[$fieldname];
        $file_name = basename($file_uploaded["name"]);
        $target_path = $target_dir . $file_name;

        move_uploaded_file($file_uploaded["tmp_name"], $target_path);
        return $file_name;
    }
    //tao cookie tren may ca nhan
    function add_cookie($name,$value,$time_litmit){
        setcookie($name,$value,time() + ($time_litmit * 86400));
    }
    function delete_cookie($name){
        setcookie($name,"",time() -1);
    }
    function get_cookie($name){
        return $_COOKIE[$name]??'';
    }
    // get_cookie("xin chao");
    
    delete_cookie("new_value");

    // var_dump(get_cookie("new_value"));
    // echo "<pre>";
    // print_r($_COOKIE);
    // echo "</pre>";
    