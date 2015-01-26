<?php
/*array (size=3)
  'module' => string 'Main' (length=4)
  'action' => string 'admin' (length=5)
  'params' =>
    array (size=0)
      empty
      array (size=3)
  'menu_item' => string '1' (length=1)
  'title' => string '' (length=0)
  'text' => string '' (length=0)
array (size=1)
  'slideshow_img' =>
    array (size=5)
      'name' => string '' (length=0)
      'type' => string '' (length=0)
      'tmp_name' => string '' (length=0)
      'error' => int 4
      'size' => int 0*/

$microtime = microtime(1)*10000;
$sshparams['title'] = !empty($_POST['title']) ? $_POST['title'] : "";
$sshparams['text'] = isset($_POST['text']) ? $_POST['text'] : "";
$sshparams['img'] = isset($_FILES['slideshow_img']['name']) ? "slide-".(dechex(microtime(1)*10000))."-".($Main->translitIt3($_FILES['slideshow_img']['name'])) : "";
$sshparams['menu_item_id'] = isset($_POST['menu_item_id']) ? $_POST['menu_item_id'] : "";
foreach($sshparams as $v){
    if(empty($v)){
        $no = 1;
        echo !empty($_POST) && !isset($_POST['del']) ? "<script>alert('Hamma maydonlar to\'ldirilmadi!!! ')</script>" : "";
        break;
    }
}
$sshparams=isset($no) ? "" : $sshparams;
//var_dump($sshparams);
if(!empty($sshparams)){
    $uploaddir = 'avant/images/';
    $uploadfile = $uploaddir . basename($sshparams['img']);
    print "<pre>";
    if (move_uploaded_file($_FILES['slideshow_img']['tmp_name'], $uploadfile)) {
        print "File is valid, and was SUCCESSFULLY UPLOADED.\n";
        print "Here's some more debugging info:\n";
        print_r($uploadfile);echo"\n";
        //print_r($_POST);echo"\n";
        //print_r($_FILES);echo"\n";
        $Slideshow = new Slideshow;
        $Slideshow->insert($sshparams);
    } else {
        print "Хьюстон, у нас проблемы:\n Possible FILE UPLOAD ATTACK!  Here's some debugging info:\n";
        print_r($_POST);echo"\n";
        //print_r($_FILES);echo"\n";
    }
    print "</pre>";
}


