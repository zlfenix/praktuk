<?php 

$i = 0; 

// ����������� ������� � ����� $buf 
$buf=implode("",file("http://megogo.net/")); 

// �������� ����� ��������
preg_match_all 
("/<[Aa][ \r\n\t]{1}[^>]*[Hh][Rr][Ee][Ff][^=]*=[ '\"\n\r\t]*([^ \"'>\r\n\t#]+)[^>]*>/", 
$buf,$url); 

// ������� ����� �� ����� 
echo "<div>���������</div><pre>"; 
while($i<count($url[1])) { echo @$url[1][$i++]."\n"; } 
echo "</pre>"; 

$i = 0; 
// �������� ����� ���������
preg_match_all("/<[Ii][Mm][Gg][ \r\n\t]{1}[^>]*[Ss][Rr][Cc][^=]*=[ '\"\n\r\t]*([^ \"'>\r\n\t#]+)[^>]*>/", 
$buf,$images); 

// ������� ����� �� ����� 
echo "<div>����������</div><pre>"; 
while($i<count($images[1])) { echo @$images[1][$i++]."\n"; } 
echo "</pre>"; 
?>