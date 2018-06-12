/*
* @Author: Cherry
* @Date:   2018-06-04 16:30:24
* @Last Modified by:   Cherry
* @Last Modified time: 2018-06-07 18:32:32
*/

<?php

$user=$_POST['user'];   
$age=$_POST['age'];

file_put_contents('./wn.txt',$user.'-'.$age."\n",FILE_APPEND);   //存取数据
                               // .代表拼接      
echo json_encode(['success'=>true,'message'=>'注册成功']);

?>

