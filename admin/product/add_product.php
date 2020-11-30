<div class="create_something">
                            <form action="?insert_product" method="post" enctype="multipart/form-data">
                            <div>
                                    <label for="">name_EN</label>
                                    <input type="text" name="name_EN" value="<?php if(isset($_POST["name_EN"])){echo $_POST["name_EN"];}?>" placeholder="name_EN">
                                </div>
                                <div>
                                    <label for="">name_VN</label>
                                    <input type="text" name="name_VN" value="<?php if(isset($_POST["name_VN"])){echo $_POST["name_VN"];}?>" placeholder="name_VN">
                                </div>
                                <div>
                                    <label for="">quantily</label>
                                    <input type="number" name="quantily" value="<?php if(isset($_POST["quantily"])){echo $_POST["quantily"];}?>" placeholder="quantily">
                                </div>
                                <div>
                                    <label for="">prict</label>
                                    <input type="number" name="prict" value="<?php if(isset($_POST["prict"])){echo $_POST["prict"];}?>" placeholder="prict">
                                </div>
                                <div>
                                    <label for="">discount</label>
                                    <input type="number" name="discount" value="<?php if(isset($_POST["discount"])){echo $_POST["discount"];}?>" placeholder="discount">
                                </div>
                                <div>
                                    <label for="">view</label>
                                    <input type="number" name="view" value="<?php if(isset($_POST["view"])){echo $_POST["view"];}?>" placeholder="view" disabled>
                                </div>
                                <div>
                                    <label for="">image</label>
                                    <input type="file" name="image" id="" >
                                </div>
                                <div class="check_radio">
                                <label for="">check_admin</label>
                                <select name="id_cate" class="select_inside_div" >
                                <?php
                                    foreach($list_cate as $key => $value){
                                        extract($value);
                                        echo ' <option value="'.$id_cate.'">'.$name_VN.'</option>';
                                    }
                                ?>
                                    </select>
                                </div>
                                
                              <div>
                              <label for="desription">desription</label>
                              <textarea name="desription" id="desription"  cols="30" rows="10" placeholder="text..."></textarea>
                              </div>

                              <div>
                              <label for="content">content</label>
                              <textarea name="content" id="content" cols="30" rows="10" placeholder="text..."></textarea>
                              </div>
                               
                                <!-- image textarea content -->

                               <div class="submit_bottom">
                               <input type="submit" value="submit" name="post_add_user">
                                <a href="?list_product" class="submit">list_cart</a>
                               </div>
                                
                            </form>
                    </div>
                 