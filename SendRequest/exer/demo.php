<?php

$user=$_POST['user'];
$age=$_POST['age'];

file_put_contents('./txt/cr.txt',$user.'-'.$age."\n",FILE_APPEND);

echo json_encode(['success'=>true,'message'=>'注册成功']);



?>