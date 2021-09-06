<html>
<?php
$size=600;
$size_2= 200;
$type = "jpg";
$bg = 0000;
$text = "Fuck azeez";
   $output= <<< HERE
   <img src="image.php?size=  
500x250&type=gif&bg=0000&color=ffffff&text=Test image">
<br>
   <img src="image.php?size=  
80×200&type=jpg&bg=white&color=green&text=TBlue"><br>
<br>
   <img src="image.php?size=  
80×80&type=jpg&bg=blue&color=green&text=TRead"><br><p>
  <img src="image.php?size=  
$size x $size_2&type=$type&bg=$bg&color=ffffff&text=$text"></p>
HERE;
echo $output."</html>";
?>