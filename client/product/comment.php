
<section class="comment-user">
            <div class="heade-main">
                <nav>
                    <li><a href="#">comment</a></li>
                </nav>
                <div class="list_comment_parent">
                <?php
              
                
                
                if(isset($_POST["post_comment"])){
                    if(isset($_POST["content"])){
                
                   
                        // echo " xin chao";
                        // echo '<pre>';
                        // print_r($_SESSION['user']);
                        // echo "</pre>";
                        // $ma_kh = $_SESSION['user']['taikhoan'];
                        $ngay_bl = date_format(date_create(), 'Y-m-d-H-i-s');
                       
                       //$content,$id_product,$id_kh,$date
                        if(!empty($_POST["content"])){
                            insert_comment($_POST["content"],$id_product, $_SESSION['user']["id_kh"], $ngay_bl);
                            $list_comment=list_comment($id_product);
                           
                        }else{
                            echo "ban chua nhap vao comment";
                            
                        }
                       
                        
                        
                    }else{
                        echo "ban chua nhap vao comment";
                    }
                }
              
               

                    foreach($list_comment as $key => $value){
                        extract($value);
                        if(empty($image)){
                            if($sex == 1){
                               $image="http://localhost:8090/text/coffe-house/content/admin/image/undraw_male_avatar_323b%20(1).png";
                            }else{
                                $image="http://localhost:8090/text/coffe-house/content/admin/image/undraw_female_avatar_w3jk%20(2).png";
                            }
                         }else{
                             $image=$document_url_admin.$image;
                         }
                         echo ' 
                         <div class="list_comment">
                         <img src="'.$image.'" alt="">
                         <p><i>'.$fullname.'</i><br> <label>'.$content.'</label></p>
                     </div>';
                    }
                ?>
                </div>
                <div class="create_comment">
                    <p>Add a comment</p>
                    <?php
                    if(!isset($_SESSION["user"])){
                        echo '<form action="http://localhost:8090/text/coffe-house/client/main_page/?account&login" method="post">
                        <input type="submit" value="Login to use comment">
                    </form>          ';
                    }else{

                    
                    ?>
                  

                        <form action="<?=$_SERVER["REQUEST_URI"]?>" method="post">
                            <div >
                                <label for="comment_textarea">your comment</label>
                                <textarea name="content" id="comment_textarea"></textarea>
                            </div>
                            <!-- <div class="input_email">
                                <div>
                                    <p >Name</p>
                                   <input type="text" name="" class="class_input">
                                </div>
                                <div>
                                    <p >email</p>
                                   <input type="email" name="" class="class_input">
                                </div>
                            </div> -->
                            <input type="submit" value="SUBMIT" name="post_comment">
                        </form>
                        <?php
                    }
                        ?>               
                </div>
                        
               </div>

        </section>