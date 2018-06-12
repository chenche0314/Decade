<?php 
$content=file_get_contents("./name.txt");
$arr=explode("\n",$content);
if($arr){
   echo "<table>";
   foreach($arr  as  $lie){
       list($id,$name,$age)=explode(",",$lie);
       echo  "<tr><td>{$id}</td><td>{$name}</td><td>{$age}</td></tr>";
   }
   echo "</table>";
}
?>