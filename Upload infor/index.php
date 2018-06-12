<?php
  $contents = file_get_contents('./name.txt');

  $lines = explode("\n",$contents);

  foreach ($lines as $item) {
    if(!$item) {
      continue;
    } 
    $arr[] = explode("|", $item);
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Document</title>
</head>
<body>
     <table border="1">
       <thead>
         <th>ID</th>
         <th>编号</th>
         <th>姓名</th>
         <th>年龄</th>
         <th>邮箱</th>
       </thead>
       <tbody>
         <?php foreach ($arr as $line): ?>
         <tr>
           <?php foreach ($line as $row) :?>
           <?php $row = trim($row)?>
                
                 <?php if(strpos($row,'http://') === 0) : ?>
                  <td>
                      <a href="<?php echo strtolower($row); ?>">
                      <?php echo substr($row,7); ?>
                    </a>
                  </td>
                 <?php else: ?>
                  <td> <?php echo trim($row) ?></td>
                 <?php endif?>
           <?php endforeach ?>
         </tr>
        <?php endforeach ?>
       </tbody>
     </table>
</body>
</html> 
