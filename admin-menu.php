<nav id="menu">
    <div id="menu-handler" class="container">
        <div class="row-fluid">
            <div class="span12">
                <ul class="menu-nav" id="nav">
                    <li class="item-435 current "><a href="<?php echo "http://$SERVER_NAME/$REQUEST_URI/admin";?>"><span class="link-has-image"><img
                                    src="avant/images/home-menu-item-icon.png" alt="Home"/><span
                                    class="image-title">Home</span> </span></a></li>
                    <?php
                    $menu_id = $Main->selectTableMenuByName("eshopsections");
                    $eshopsections = $Main->selectTableMenuItemById($menu_id);
                    function print_list($array, $parent=0,$str)
                    {
                        if(isset($array)){
                            foreach ($array as $row) {
                                if ($row["parent"] == $parent && $row["parent"] != "") {
                                    $menu_item = preg_replace("~ +~","-",mb_convert_case($GLOBALS['Main']->translitIt2($row['name']), MB_CASE_LOWER, "UTF-8"));
                                    $deeperparent = $row["havechild"]==1 ? "deeper parent":"";
                                    echo "<li class='item-$row[menu_item_id] $deeperparent'>
                            <a href='$str/$menu_item.html'><span class='link-no-image'>" . htmlentities($row['name'], ENT_QUOTES, "utf-8") . "</span></a>";
                                    echo $row["havechild"]==1 ? "<ul>":"";
                                    print_list($array, $row["menu_item_id"],"$str/$menu_item"); //# recurse
                                    echo $row["havechild"]==1 ? "</ul>":"";
                                    echo "</li>";
                                }
                            }
                        }//$str="";
                    }
                    print_list($eshopsections, $parent = 0, "http://$SERVER_NAME/$REQUEST_URI/admin/online-store");
                    ?>
                    <li class=''>
                        <a href='<?php echo"http://$SERVER_NAME/$REQUEST_URI/control";?>'>
                            <span class='link-no-image'>CONTROL PANEL</span>
                        </a>
                    </li>
                </ul>
                <script>
                    selectnav('nav', { nested: true, indent: ' &nbsp; &nbsp; ' });
                    //selectnav('nav', { nested: true, indent: ' &nbsp; &nbsp; ' });

                </script>
            </div>

        </div>
    </div>
</nav>