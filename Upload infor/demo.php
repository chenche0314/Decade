<?php
$file_con=trim(file_get_contents('./name.txt'));  //获取文件加上去除 文件多余的空格
$arr=explode("\n",$file_con);   //把文件分割成数组
foreach ($arr as $item) {    
    if(!$item){
        continue;
    }
    $arr[]=explode("|",$item);
}                     
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <table border="1">
    <thead>
        <th>Id</th>
        <th>Name</th>
        <th>Age</th>
        <th>Email</th>
        <th>Address</th>
  </thead>
  <tbody>
    <?php foreach ($arr as $line):?>
    <tr>
        <?php foreach ($line as $row):?>
        <?php $row=trim($row)?>
            <?php if(strpos($row,'http://')===0):?>
            <td>
                <a href="<?php echo strtolower($row);?>">
                <?php echo suubstr($row,7);?>
                </a>
            </td>
            <?php else:?>
            <td><?php echo trim($row)?></td>
            <?php endif?>
            <?php endforeach ?>
    </tr>
    <?php endforeach ?>
  </tbody>
    </table>
</body>
</html>