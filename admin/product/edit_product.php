<div class="create_something">
                            <form action="?edit_product&id_product=<?=$id_product?>" method="post" enctype="multipart/form-data">
                            <div>
                                    <label for="">name_EN</label>
                                    <input type="text" name="name_EN" value="<?=$name_EN?>" placeholder="name_EN">
                                </div>
                                <div>
                                    <label for="">name_VN</label>
                                    <input type="text" name="name_VN" value="<?=$name_VN?>" placeholder="name_VN">
                                </div>
                                <div>
                                    <label for="">quantily</label>
                                    <input type="number" name="quantily" value="<?=$quantily?>" placeholder="quantily">
                                </div>
                                <div>
                                    <label for="">price</label>
                                    <input type="number" name="prict" value="<?=$price?>" placeholder="prict">
                                </div>
                                <div>
                                    <label for="">discount</label>
                                    <input type="number" name="discount" value="<?=$discount?>" placeholder="discount">
                                </div>
                                <div>
                                    <label for="">view_pd</label>
                                    <input type="number" name="view" value="<?=$view_pd?>" placeholder="view" >
                                </div>
                                <div>
                                    <label for="">image</label>
                                    <input type="file" name="image" id="" >
                                    <input type="hidden" name="image_up" value="<?=$image?>">
                                </div>
                                <div class="check_radio">
                                <label for="">check_admin</label>
                                <select name="id_cate" class="select_inside_div" >
                                <?php
                                      foreach($list_cate as $key => $value){
                                        extract($value);
                                        // var_dump($id_cate);
                                        if($id_cate == $list_product["id_cate"]){
                                            echo ' <option value="'.$id_cate.'" selected>'.$name_VN.'</option>';
                                        }else{
                                            echo ' <option value="'.$id_cate.'">'.$name_VN.'</option>';
                                        }
                                       
                                    }
                                ?>
                                    </select>
                                </div>
                                
                              <div>
                              <label for="desription">desription</label>
                              <textarea name="desription" id="desription"  cols="30" rows="10" placeholder="text..."><?=$desription?></textarea>
                              </div>

                              <div>
                              <label for="content">content</label>
                              <textarea name="content" id="content" cols="30" rows="10" placeholder="text..."><?=$content?></textarea>
                              </div>
                               
                                <!-- image textarea content -->

                               <div class="submit_bottom">
                               <input type="submit" value="submit" name="post_add_user">
                                <a href="?list_product" class="submit">list_cart</a>
                               </div>
                                
                            </form>
                         
                    </div>
              