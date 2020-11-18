<?php
    function connect_DB($db_name="coffe_house2",$username="root",$password=""){
       try{
        $save= new PDO("mysql:host=localhost;dbname=$db_name",$username,$password);
        $save->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        return $save;
        // echo "succesfuly";
        // return $save;
       }catch(PDOException $check){
           echo $check->getMessage();
       }
    }
    //exeute,select_all,select_one,value
    function execute_pdo($sql){
        $value=array_slice(func_get_args(),1);
        try{
            $save= connect_DB();
            $exeute= $save->prepare($sql);
            $exeute->execute($value);
            return $save->lastInsertId();
        }catch(PDOExcepetion $check){
            echo $check->getMessage();
        }
        finally{
            unset($save);
        }
    }
    function select_all($sql){
        $value=array_slice(func_get_args(),1);
        try{
            $save=connect_DB();
            $exeute=$save->prepare($sql);
            $exeute->execute($value);
            $array=$exeute->fetchAll(PDO::FETCH_ASSOC);
            return $array;
        }catch(PDOException $check){
            echo $check->getMessage();
        }finally{
            unset($save);
        }
    }
    function select_one($sql){
        $value=array_slice(func_get_args(),1);
        try{
            $save=connect_DB();
            $exeute=$save->prepare($sql);
            $exeute->execute($value);
            $array_one=$exeute->fetch(PDO::FETCH_ASSOC);
            return $array_one;
        }catch(PDOException $check){
            echo $check->getMessage();
        }finally{
            unset($save);
        }
    }
    function select_value($sql){
        $value=array_slice(func_get_args(),1);
        try{
            $save=connect_DB();
            $exeute=$save->prepare($sql);
            $exeute->execute($value);
            $array_one=$exeute->fetch(PDO::FETCH_ASSOC);
            return array_values($array_one)[0];
        }catch(PDOException $check){
            echo $check->getMessage();
        }finally{
            unset($save);
        }
    }

    // echo "<pre>";
    // print_r(select_value("SELECT COUNT(id_cate) FROM `category` "));
    // echo "</pre>";
    // SELECT COUNT(id_cate) FROM `category` 
    // echo execute_pdo("INSERT INTO coffe_house2.category(name_EN,name_VN)
    // VALUES(?,?)","xin chao","xin chao");
    // connect_DB();