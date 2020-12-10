<?php

extract($_REQUEST);
$error=[];
$test="";

if(isset($post_username)){
    //     echo "<pre>";
    // print_r($_POST);
    // echo "</pre>";
    $taikhoan_user=htmlspecialchars($username);
    $email_user=htmlspecialchars($email1);
    if(empty($taikhoan_user)){
        $error[]="ban chua nhap vao username";
    }
    if(empty($email_user)){
        $error[]="ban chua nhap vao email";
    }
    if(empty($error)){
            $user=find_username($username);
            if(!empty($user)){
                // echo "<pre>";
                // print_r($user);
                // echo "</pre>";
                extract($user);
                $SENDGRID_API_KEY='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';
         
                $email = new \SendGrid\Mail\Mail();
                ///------- bạn chỉnh sửa các thông tin dưới đây cho phù hợp với mục đích cá nhân
                // Thông tin người gửi
                $email->setFrom("kienthph11546@fpt.edu.vn", "MRS"); //gmail se gui/ten gmail
                // Tiêu đề thư
                $email->setSubject("coffe_house");//tieu de
                // Thông tin người nhận
                $email->addTo($email_user, $email_user); //gmail nhan
                $email->addContent("text/plain", "and easy to do anywhere, even with PHP");//message
              
                // Soạn nội dung cho thư
                // $email->addContent("text/plain", "Nội dung text thuần không có thẻ html");
                $email->addContent("text/html", ' Your password is: '.$pass.'');//message
                // tiến hành gửi thư
                $sendgrid =new \SendGrid($SENDGRID_API_KEY);
                try {
                    $response = $sendgrid->send($email);
                    if(!$response){
                        $test="loi gmail";
                    }
                  //   unset($_POST);
                  // echo "<pre>";
                  // print_r($_POST);
                  // echo "</pre>";
                 
                  //   print $response->statusCode() . "\n";
                  //   print_r($response->headers());
                  //   print $response->body() . "\n";
                
                } catch (Exception $e) {
                    echo 'Caught exception: '. $e->getMessage() ."\n";
                }
                echo "check password inside email";
                unset($_POST);
                
            }else{
                echo "tai khoan chua ton tai";
            }
       
    }else{
        $test=implode("<br />",$error);
        echo $test;
    }

}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?=$content_url?>/client/css/forgot_pass.css" class="css">
</head>
<body>
<section class="main-center">
            <div class="list_detail_bill">
                <form action="" method="post">
                    <table>
                        <div class="conten">
                            <h1>FORGOT PASSWORD</h1>
                            <p>Here you can reset your forgotten password and/or unlock your account.<br>
                                Enter your username, email and click Next
                            </p></div>
                        <tbody>
                            <tr>
                                <td><label for="11">Username:</label></td>
                                <td><input class="ip" type="text" id="11" name="username" placeholder="123-45-678"></td>
                                <td><br>
                                </td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td><label for="22">Email:</label></td>
                                <td><input class="ip" type="email" id="22" name="email1" placeholder="..."></td>
                                <td><br>
                                </td>
                                <td></td>
                                <td></td>
                                <td></i></td>
                            </tr>
                        </tbody>
                        <tfoot>
                            <tr style="border: none;">
                                <td colspan="4"><a class="button" href="#popup1" style="color: black;" >
                                <a href="<?=$client_url?>/main_page/?account&login" style="color:black;">Cancel</a></td>
                                <td colspan="4"><input type="submit" value="NEXT" name="post_username"></td>
                            </tr>
                        </tfoot>
                    </table>
                </form>
        </section>
</body>
</html>