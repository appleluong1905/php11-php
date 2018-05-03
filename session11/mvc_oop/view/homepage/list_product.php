<?php 
	foreach($listCategory as $category){
		$id = $category->id;
		$name = $category->name;
		echo "<a href='index.php?product_category_id=$id'>$name</a>";
		echo "<br>";
	}
?>
<?php 
$j=1;
	foreach($listProduct as $product){
		$id = $product->id;
		echo $j." ";
		echo $product->name." ";
		echo $product->description." ";
		echo $product->image." ";
		echo $product->is_hot." ";
		echo "<a href='index.php?id=$id&action=delete'>Delete</a>";
		echo "<br>";
		$j++; 
	}
?>
<p></p>
<p></p>
<p></p>
<?php 
$i=1;
	foreach($listUser as $user){
		$id = $user->id;
		echo $i." ";
		echo $user->name." ";
		echo $user->description." ";
		echo $user->image." ";
		echo $user->is_hot." ";
		echo "<a href='index.php?id=$id&action=delete'>Delete</a>";
		echo "<br>";
		$i++;
	}
?>