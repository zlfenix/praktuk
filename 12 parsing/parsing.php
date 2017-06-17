<?php 

$i = 0; 

// завантажуємо сторінку в змінну $buf 
$buf=implode("",file("http://megogo.net/")); 

// отримуємо масив посилань
preg_match_all 
("/<[Aa][ \r\n\t]{1}[^>]*[Hh][Rr][Ee][Ff][^=]*=[ '\"\n\r\t]*([^ \"'>\r\n\t#]+)[^>]*>/", 
$buf,$url); 

// виводим масив на экран 
echo "<div>Посилання</div><pre>"; 
while($i<count($url[1])) { echo @$url[1][$i++]."\n"; } 
echo "</pre>"; 

$i = 0; 
// отримуємо масив зображень
preg_match_all("/<[Ii][Mm][Gg][ \r\n\t]{1}[^>]*[Ss][Rr][Cc][^=]*=[ '\"\n\r\t]*([^ \"'>\r\n\t#]+)[^>]*>/", 
$buf,$images); 

// виводим масив на экран 
echo "<div>Зображення</div><pre>"; 
while($i<count($images[1])) { echo @$images[1][$i++]."\n"; } 
echo "</pre>"; 
?>