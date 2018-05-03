<?php 
$productDescription = "<ul><li>Toàn bộ phân xưởng số 4 rộng 8.500 m2 của</li> <li>Công ty TNHH khoa học kỹ thuật Texhong Ngân Long </li><li>bị thiêu rụi. Hàng trăm người cùng nhiều phương </li><li>tiện như máy xúc, máy gạt, xe tải được nhà chức trách huy động đến dọn dẹp đống đổ nát.</li></ul>";
echo $productDescription;
$newDes = substr($productDescription, 0, 150);
echo "<br>";
echo $newDes."...";
$n = 5.6;
echo "<br>";
echo ceil($n);
echo "<br>";
echo floor($n);
?>
<select name = "category_id">
	<option value = "1"> category_name</option>
	<option value = "2"> category_name</option>
	<option value = "3"> category_name</option>
</select>