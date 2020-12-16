<?php
//   require 'vendor/autoload.php';
  // echo "<pre>";
  // print_r($_SESSION);
  // echo "</pre>";
//  echo "<pre>";
//             print_r($_POST);
//             echo "</pre>";
  $error=[];
  $test="";
  $gmail_to=$title=$message=$from_gmail=$brand_web="";
//   echo "<pre>";
//   print_r($_POST);
//   echo "</pre>";
// echo check_gmail($_POST["post_email"]);
  if( isset($_POST["post_contact"])){
    //   die('xcvbcxcxc');
      $gmail_to=htmlspecialchars($_POST["post_email"]);
      $title=htmlspecialchars($_POST["post_title"]);
      $message=htmlspecialchars($_POST["content"]);
    
    
      if(!check_gmail($gmail_to) or empty($gmail_to)){
          $error[]="Ban chua nhap dung dinh dang gmail";
      }
      if(!check_title($title) or empty($title)){
          $error[]="Ban chua nhap dung dinh dang title";
      }
      if(!check_comment($message) or empty($message)){
          $error[]="Ban chua nhap dung dinh dang message";
      }
      if(empty($error)){
          echo "thanh cong";
        //   echo "<pre>";
        //   print_r($_POST);
        //   echo "</pre>";
          $SENDGRID_API_KEY='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';
         
          $email = new \SendGrid\Mail\Mail();
          ///------- bạn chỉnh sửa các thông tin dưới đây cho phù hợp với mục đích cá nhân
          // Thông tin người gửi
          $email->setFrom("kienthph11546@fpt.edu.vn", "MRS"); //gmail se gui/ten gmail
          // Tiêu đề thư
          $email->setSubject($title);//tieu de
          // Thông tin người nhận
          $email->addTo($gmail_to, $gmail_to); //gmail nhan
          $email->addContent("text/plain", "and easy to do anywhere, even with PHP");//message
        
          // Soạn nội dung cho thư
          // $email->addContent("text/plain", "Nội dung text thuần không có thẻ html");
          $email->addContent("text/html", $message);//message
          // tiến hành gửi thư
          $sendgrid =new \SendGrid($SENDGRID_API_KEY);
          try {
              $response = $sendgrid->send($email);
              if(!$response){
                  $test="loi gmail";
              }
            //   unset($_POST);
           
           
            //   print $response->statusCode() . "\n";
            //   print_r($response->headers());
            //   print $response->body() . "\n";
          
          } catch (Exception $e) {
              echo 'Caught exception: '. $e->getMessage() ."\n";
          }
          // echo "<pre>";
          // print_r($_POST);
          // echo "</pre>";
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
    <link rel="stylesheet" href="<?=$content_url?>/client/css/contact.css" class="css">
</head>
<body>
<section id="parent-sevice">
    
            <div id="flex-service">
                <div class="box1">
                    <div class="text_lg">
                        <h1>OPENNING HOURS</h1>
                        <div>
                            <table style="width:630px; font-size: 16px;">
                                <tbody>
                                    <tr style="height: 40px;">
                                        <td style="width: 550px;">Working Days</td>
                                        <td style="width: 80px;">10AM - 7PM</td>
                                    </tr>
                                    <tr style="height: 40px;">
                                        <td style="width: 550px;">Saturday</td>
                                        <td style="width: 80px;">10AM - 6PM</td>
                                    </tr>
                                    <tr style="height: 40px;">
                                        <td style="width: 550px;">Sunday</td>
                                        <td style="width: 80px;">11AM - 5PM</td>
                                    </tr>
                                </tbody>
                            </table>
                            <table style="width:630px; margin-top: 50px;font-size: 16px;">
                                <tbody>
                                    <tr style="height: 50px;">
                                        <td style="width: 315px; font-size: 24px;">
                                            <h4>ADDRESS</h4>
                                        </td>
                                        <td style="width: 315px;font-size: 24px;">
                                            <h4>GROUP BOOKING</h4>
                                        </td>
                                    </tr>
                                    <tr style="height: 50px;">
                                        <td style="width: 315px;">Our Address 467 Davidson ave,<br>Los Angeles CA 95716
                                        </td>
                                        <td style="width: 315px;">Craft beer elit seitan exercitation, photo booth et
                                            8-bit kale chips proident chillwave deep v laborum. </td>
                                    </tr>
                                    <tr style="height: 50px;">
                                        <td style="width: 315px;font-size: 24px;">
                                            <h4>CUSTOMER SUPPORT</h4>
                                        </td>
                                        <td style="width: 315px;font-size: 24px;">&nbsp;</td>
                                    </tr>
                                    <tr style="height: 50px;">
                                        <td style="width: 315px; color: #c7a17a;">
                                            <h1>888.373.2374</h1>
                                        </td>
                                        <td style="width: 315px;">Aliquip veniam delectus, Marfa eiusmod Pinterest in do
                                            umami readymade swag. </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="box2">
                    <div class="login_form_inner">
                        <div class="login_form">
                            <form action="" method="POST">
                                <p>Your Title (required)</p>
                                <input type="text"  name="post_title">
                                <p>Your Email (required)</p>
                                <input type="email" name="post_email">
                                <p style="margin-bottom: 20px;">Your Message</p>
                                <textarea
                                    style="background-color: black; border: none; border-bottom: 1px solid white; width: 333px;outline: 0; color: white; height: 100px; "
                                    type="text" name="content"></textarea>
                                <div class="login_bts">
                                    <?php
                                    if(isset($_SESSION["user"])){
                                        echo '  <button type="submit" name="post_contact">SEND</button>';
                                    }else{
                                        echo '<a href="'.$client_url.'/main_page/?account&login">Login to use contact</a>';
                                    }
                                    ?>
                                  
                                </div>
                                    
                              
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3723.8639810443337!2d105.74459841486184!3d21.038127785993314!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x313454b991d80fd5%3A0x53cefc99d6b0bf6f!2zVHLGsOG7nW5nIENhbyDEkeG6s25nIEZQVCBQb2x5dGVjaG5pYw!5e0!3m2!1svi!2s!4v1606837641283!5m2!1svi!2s"
        width="1639" height="504" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false"
        tabindex="0"></iframe>
</body>
</html>