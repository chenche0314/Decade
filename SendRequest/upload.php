<?php
  var_dump($_FILES);
if($_FILES['file']['error']==0){
    $old_path=$_FILES['file']['tmp_name'];
    $pic_name=time() . mb_str()
    $new_path='./text/'.$_FILES['file']['name'];
    move_uploaded_file($old_path,$new_path);
}
?>