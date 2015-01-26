<?php
//var_dump($_POST);
if(isset($_POST['del']) && !empty($_POST['del'])){
    $Slideshow = new Slideshow;
    $Slideshow->delete($_POST['del']);
    unlink("avant/images/$_POST[img]");
}



