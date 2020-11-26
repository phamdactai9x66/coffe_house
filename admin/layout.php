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
        <div id="fix_full"></div>
        <nav  id="first_nav">
                <div>
                    <ul>
                        <li><a href="javascript:void(0)" class="open_nav"><i class="fas fa-bars"></i></a></li>
                        <li><a href="#">home</a></li>
                        <li><a href="#">contac</a></li>
                    </ul>
                </div>
                <div class="image_aside_left">
                    <img src="./image/P4TJEQG-683x1024.jpg" alt="">
                   
                </div>
        </nav>
        <aside id="aside_left">
            <div class="image_aside_left">
                <img src="./image/on-26WN7JR-683x1024.jpg" alt="">
                <p>admin</p>
                <div class="next"><i class="fas fa-chevron-left"></i></div>
            </div>
            <div class="image_aside_left">
                <img src="./image/P4TJEQG-683x1024.jpg" alt="">
                <p>pham dac tai</p>
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
            <div class="row_analysis">
                    <div >
                      <div class="flex_row_analysis">
                        <span class="box1"><i class="far fa-comments"></i></span>
                        <p><label for="">comment</label> <br>
                            <label class="font_ad"><span>10</span><span>%</span></label>
                        </p>
                      </div>
                    </div>
                    <div >
                       <div class="flex_row_analysis">
                        <span class="box2"><i class="far fa-eye"></i></span>
                        <p><label for="">view</label> <br>
                            <label class="font_ad"><span>10</span><span>%</span></label>
                        </p>
                       </div>
                    </div>
                    <div >
                        <div class="flex_row_analysis">
                            <span class="box3"><i class="fas fa-shopping-cart"></i></span>
                        <p><label for="">cart</label> <br>
                            <label class="font_ad"><span>10</span><span>%</span></label>
                        </p>
                        </div>
                    </div>
                    <div >
                       <div class="flex_row_analysis">
                        <span class="box4"><i class=" fas fa-users"></i></span>
                        <p><label for="">users</label> <br>
                            <label class="font_ad"><span>10</span><span>%</span></label>
                        </p>
                       </div>
                    </div>
            </div>
            <div class="main_ad">
                   <?php
                   require $VIEW_NAME;
                   ?>
            </div>
         
        </main>
        
</body>
</html>