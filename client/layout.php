<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?=$content_url?>/client/css/layout_client.css" class="css">
    <link rel="icon" type="image/png"  href="<?=$content_url_image_client?>logo_white-e1592989810533.png" >
    <script src="https://kit.fontawesome.com/f0abe83c71.js" crossorigin="anonymous"></script>
    <script src="<?=$content_url?>/client/js/layout_client.js"></script>
    <title>Home 6 &#8211; Craft | Cafes Coffee Shops Bars WordPress</title>
</head>
<body>


    <div class="search_full_screen" style="visibility: hidden;">
        <form action="<?=$client_url?>/main_page/?searching_product" method="post" class="form_search" >
                <div>
                        <input type="text" name="value_search" id="" placeholder="Searching product">
                        <button name="butom"><i class="fas fa-search"></i></button>
                </div>
        </form>
    </div>
    <a href="#" id="back-top"><i class="fab fa-autoprefixer"></i></a>
    <?php
        require_once("../layout/menu_main.php");
    ?>

    <main>

      <?php
            require $VIEW_NAME;
        ?>
    </main>
    <?php
        require_once("../layout/footer.php");
    ?>
    <!-- footer -->

    
</body>
</html>