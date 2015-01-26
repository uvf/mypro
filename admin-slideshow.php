<div class="row-fluid" id="slideshow-header">

    <div id="slideshow-handler-bg" class="span12">
        <div id="slideshow-handler">
            <div class="camera_wrap" id="ph-camera-slideshow">


                <?php
                $slides = $Main->selectSlideshow();
                foreach($slides as $slide){
                ?>
                <div data-thumb="avant/images/<?php echo $slide->img;?>" data-src="avant/images/<?php echo $slide->img;?>">
                    <div class="camera_caption title fadeFromTop" style="">
                        <div id="slideshow-title-mask"></div>
                    </div>
                    <div class="camera_caption fadeFromBottom" style="">
                        <div style="top: 35%;">
                            <div class="camera_caption_bg">
                                <p style="text-align: center;">
                                    <form action="admin" method="post" enctype="multipart/form-data">
                                    <select name="menu_item_id">
                                        <?php
                                        $menu_id = $Main->selectTableMenuByName("eshopsections");
                                        $eshopsections = $Main->selectTableMenuItemById($menu_id);//print_r($eshopsections);
                                        foreach($eshopsections as $row){
                                            echo $row['parent']==0 ? "<option value='$row[menu_item_id]'>$row[name]</option>" :"";
                                        }
                                        ?>
                                    </select>
                                    <textarea id="slideshow_title" name="title" placeholder="title" style="width: 100%;"><?php echo $slide->title;?></textarea>
                                    <br>
                                    <textarea rows="5" class="col-sm-12" id="slideshow_text" name="text" placeholder="text"style="width: 100%;"><?php echo $slide->text;?></textarea>
                                    <input type="file" name="slideshow_img" id="slideshow_img" placeholder="file" title="1170px X 440px">
                                    <button id="slideshow_send">~/~ SAVE ~/~</button>
                                </form>
                                <form name="deleteslide" action="admin" method="post" enctype="multipart/form-data">
                                    <input type="hidden" name="del" value="<?php echo $slide->slideshow_id;?>">
                                    <input type="hidden" name="img" value="<?php echo $slide->img;?>">
                                    <button>DELETE</button>
                                </form>

                                <script>
                                    jQuery(document).on("keyup", "#slideshow-title", function () {
                                        var text = jQuery(this).val();
                                        jQuery("#slideshow-title-mask").text(text);
                                        console.log(text);
                                    });
                                </script>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <?php
                }
                ?>
                <!---------------------------------------------->

                <div data-thumb="avant/images/new-slide.jpg" data-src="avant/images/new-slide.jpg">
                    <div class="camera_caption title fadeFromTop" style="">
                        <div id="slideshow-title-mask"></div>
                    </div>
                    <div class="camera_caption fadeFromBottom" style="">
                        <div style="top: 35%;">
                            <div class="camera_caption_bg">
                                <p style="text-align: center;">
                                <form action="admin" method="post" enctype="multipart/form-data">
                                    <select name="menu_item_id">
                                        <?php
                                        $menu_id = $Main->selectTableMenuByName("eshopsections");
                                        $eshopsections = $Main->selectTableMenuItemById($menu_id);//print_r($eshopsections);
                                        foreach($eshopsections as $row){
                                            echo $row['parent']==0 ? "<option value='$row[menu_item_id]'>$row[name]</option>" :"";
                                        }
                                        ?>
                                    </select>
                                    <textarea id="slideshow_title" name="title" placeholder="title" style="width: 100%;"></textarea>
                                    <br>
                                    <textarea rows="5" class="col-sm-12" id="slideshow_text" name="text" placeholder="text"style="width: 100%;"></textarea>
                                    <input type="file" name="slideshow_img" id="slideshow_img" placeholder="file" title="1170px X 440px">
                                    <button id="slideshow_send">~/~ SAVE ~/~</button>
                                </form>

                                <script>
                                    jQuery(document).on("keyup", "#slideshow-title", function () {
                                        var text = jQuery(this).val();
                                        jQuery("#slideshow-title-mask").text(text);
                                        console.log(text);
                                    });
                                </script>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <!---------------------------------------------->

            </div>
        </div>
    </div>

</div>