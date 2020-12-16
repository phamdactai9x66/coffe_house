<?php
// echo " hello";
    function check_TK($string){
        $RE_tk="#^[A-z]\w{4,30}$#";
        $boolean=false;
        if(preg_match($RE_tk,$string,$value)){
            $boolean=true;
        }
        return $boolean;
    }
    function check_PW($string){
        $RE_tk="#^.{3,}$#";
        $boolean=false;
        if(preg_match($RE_tk,$string,$value)){
            $boolean=true;
        }
        return $boolean;
    }
    function check_PW_part2($string){
        $RE_tk="#^(?=.*[a-z]).{6,}$#";
        $boolean=false;
        if(preg_match($RE_tk,$string,$value)){
            $boolean=true;
        }
        return $boolean;
    }
    function check_name($string){
        $RE_tk="#^[A-z][A-z\sàáạảãâầấậẩẫăằắặẳẵèéẹẻẽêềếệểễìíịỉĩòóọỏõôồốộổỗơờớợởỡùúụủũưừứựửữỳýỵỷỹđÀÁẠẢÃÂẦẤẬẨẪĂẰẮẶẲẴÈÉẸẺẼÊỀẾỆỂỄÌÍỊỈĨÒÓỌỎÕÔỒỐỘỔỖƠỜỚỢỞỠÙÚỤỦŨƯỪỨỰỬỮỲÝỴỶỸĐD]{5,30}$#";
        $boolean=false;
        if(preg_match($RE_tk,$string,$value)){
            $boolean=true;
        }
        return $boolean;
    }
    function check_address($string){
        $RE_tk="#^[A-z][A-z-\s\sàáạảãâầấậẩẫăằắặẳẵèéẹẻẽêềếệểễìíịỉĩòóọỏõôồốộổỗơờớợởỡùúụủũưừứựửữỳýỵỷỹđÀÁẠẢÃÂẦẤẬẨẪĂẰẮẶẲẴÈÉẸẺẼÊỀẾỆỂỄÌÍỊỈĨÒÓỌỎÕÔỒỐỘỔỖƠỜỚỢỞỠÙÚỤỦŨƯỪỨỰỬỮỲÝỴỶỸĐD]{5,30}$#";
        $boolean=false;
        if(preg_match($RE_tk,$string,$value)){
            $boolean=true;
        }
        return $boolean;
    }
    function check_gmail($string){
        $RE_tk="#^[A-z0-9_.]{4,25}\@[a-z0-9]{2,}(\.[a-z0-9]{2,4}){1,2}$#";
        $boolean=false;
        if(preg_match($RE_tk,$string,$value)){
            $boolean=true;
        }
        return $boolean;
    }
    function check_number($string){
        $RE_tk="#^(0|\+84)(\s|\.)?((3[2-9])|(5[689])|(7[06-9])|(8[1-689])|(9[0-46-9]))(\d)(\s|\.)?(\d{3})(\s|\.)?(\d{3})$#";
        $boolean=false;
        if(preg_match($RE_tk,$string,$value)){
            $boolean=true;
        }
        return $boolean;
    }
    function check_name_product($string){
        $RE_tk="#^[A-z][a-z][A-z\s0-9_àáạảãâầấậẩẫăằắặẳẵèéẹẻẽêềếệểễìíịỉĩòóọỏõôồốộổỗơờớợởỡùúụủũưừứựửữỳýỵỷỹđÀÁẠẢÃÂẦẤẬẨẪĂẰẮẶẲẴÈÉẸẺẼÊỀẾỆỂỄÌÍỊỈĨÒÓỌỎÕÔỒỐỘỔỖƠỜỚỢỞỠÙÚỤỦŨƯỪỨỰỬỮỲÝỴỶỸĐD]{3,30}$#";
        $boolean=false;
        if(preg_match($RE_tk,$string,$value)){
            $boolean=true;
        }
        return $boolean;
    }
    function check_title($string){
        $RE_tk="#^[A-z][A-z\s0-9_àáạảãâầấậẩẫăằắặẳẵèéẹẻẽêềếệểễìíịỉĩòóọỏõôồốộổỗơờớợởỡùúụủũưừứựửữỳýỵỷỹđÀÁẠẢÃÂẦẤẬẨẪĂẰẮẶẲẴÈÉẸẺẼÊỀẾỆỂỄÌÍỊỈĨÒÓỌỎÕÔỒỐỘỔỖƠỜỚỢỞỠÙÚỤỦŨƯỪỨỰỬỮỲÝỴỶỸĐD]{3,30}$#";
        $boolean=false;
        if(preg_match($RE_tk,$string,$value)){
            $boolean=true;
        }
        return $boolean;
    }
    function check_comment($string){
        $RE_tk="#^[A-z][A-z\s0-9_àáạảãâầấậẩẫăằắặẳẵèéẹẻẽêềếệểễìíịỉĩòóọỏõôồốộổỗơờớợởỡùúụủũưừứựửữỳýỵỷỹđÀÁẠẢÃÂẦẤẬẨẪĂẰẮẶẲẴÈÉẸẺẼÊỀẾỆỂỄÌÍỊỈĨÒÓỌỎÕÔỒỐỘỔỖƠỜỚỢỞỠÙÚỤỦŨƯỪỨỰỬỮỲÝỴỶỸĐD]{10,}$#";
        $boolean=false;
        if(preg_match($RE_tk,$string,$value)){
            $boolean=true;
        }
        return $boolean;
    }
    function check_url_product($string_URL){
        $RE_url="#^\d{1,}$#";
        $booblen=false;
        if(preg_match($RE_url,$string_URL,$value)){
            $booblen=true;
        }
        return $booblen;
    }
    function date_product($string_URL){
        $RE_url="#^\d{4,4}(\/|-)+\d{2,2}(\/|-)+\d{2,2}$#";//yyyy/mm/dd
        $booblen=false;
        if(preg_match($RE_url,$string_URL,$value)){
            $booblen=true;
        }
        return $booblen;
    }
    function check_discount2($string_URL){
        $RE_url="#^[\dA-z]{1,30}$#";//yyyy/mm/dd
        $booblen=false;
        if(preg_match($RE_url,$string_URL,$value)){
            $booblen=true;
        }
        return $booblen;
    }

    function path_file($file,$path_file=array("jpg","png","gif","tmp")){
        $file1=strtolower(pathinfo($file,PATHINFO_EXTENSION));
        if(in_array($file1,$path_file)){
             return true;
        }else{
            return false;
        }
    }
    
    function size_file($file_size,$min = 0,$max= 1.5 * 1024 * 1024 ){
        if(is_numeric($file_size) and $file_size >= $min and $file_size <= $max){
            return true;
        }else{
            return false;
        }
    }
   