<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="http://localhost:8090/text/coffe-house/content/admin/admin.css" class="css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src="http://localhost:8090/text/coffe-house/content/admin/admin.js"></script>
    <title>Document</title>
</head>
<body>
    <?php
    // echo '<pre>';
    // print_r($_SESSION);
    // echo "</pre>";
    extract(($_SESSION["user"]));
    // echo $image;
    if(empty($image)){
        if($sex == 1){
           $image="http://localhost:8090/text/coffe-house/content/admin/image/undraw_male_avatar_323b%20(1).png";
        }else{
            $image="http://localhost:8090/text/coffe-house/content/admin/image/undraw_female_avatar_w3jk%20(2).png";
        }
     }else{
         $image=$document_url_admin.$image;
     }
    ?>
        <div id="fix_full"></div>
        <nav  id="first_nav">
                <div>
                    <ul>
                        <li><a href="javascript:void(0)" class="open_nav"><i class="fas fa-bars"></i></a></li>
                        <li><a href="<?=$url_clien?>/main_page/">home</a></li>
                        <li><a href="<?=$url_clien?>/main_page/?contact">contac</a></li>
                    </ul>
                </div>
                <div class="image_aside_left">
                    <img src="<?=$image?>" alt="">
                   
                </div>
        </nav>
        <aside id="aside_left">
            <div class="image_aside_left">
                <img src="<?=$document_url_admin?>logo_white-e1592989810533.png" alt="">
                <p>admin</p>
                <div class="next"><i class="fas fa-chevron-left"></i></div>
            </div>
            <div class="image_aside_left">
                <img src="<?=$image?>" alt="">
                <p><?=$fullname?></p>
            </div>
            <ul class="element_bottom">
               <?php
                require("menu.php")
               ?>
            </ul>
        </aside>
        <main class="main_center">
        <div class="brand_web">
                <?php
                if(isset($brand_category)){
                    echo $brand_category;
                }
              
                ?>
            </div>
                <?php
               
               
                 require("analysis.php")
                ?>
            <div class="main_ad">
                   <?php
                   require $VIEW_NAME;
                   ?>
            </div>
         
        </main>
        
</body>
</html>