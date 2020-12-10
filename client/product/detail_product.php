<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?=$content_url?>/client/css/detail_product.css">
    <script src="<?=$content_url?>/client/js/detail_product.js"></script>
</head>
<body>
<?php
// echo $_SERVER["REQUEST_URI"];
?>
<div id="big_img">
            <img src="" alt="">
            <p></p>
            <span id="next"><i class="fas fa-times"></i></span>
    </div>
<section class="main-center">
            <article>
                <div class="image-left">
                    
                        <img  src="<?=$document_url_admin.$image?>" id="image_origin1" alt="san ppham 12">
                  
                </div>
                <div class="content-right">
                 <div>
                    <h2><?=$name_EN?></h2>
                    <h3><label for="">$</label><span><?=number_format($price)?></span></h3>
                    <p><?=$content?></p>
                        <form action="cart.php" method="post">
                        <!-- so luogn san pham -->
                            <input type="number" class="number1" name="quantily" min="1" max="<?=$quantily?>" value="1">
                              <!-- so luogn san pham -->
                            <input type="hidden" name="id_product" value="<?=$id_product?>">
                            <input type="submit" class="submit2"  value="ADD TO CART">
                            <!-- id_product -->
                        </form>
                 </div>
                       
                </div>

            </article>
        </section>
        
    <!-- comment -->
    <?php
    require "comment.php";
    ?>
    
    <?php
    require "related_product.php";
    ?>
    <!-- product related -->
      
</body>
</html>