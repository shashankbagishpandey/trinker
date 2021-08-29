<?php
 $conn=$conn=mysqli_connect('localhost','root','','ecom');
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
<table  border="2px solid black" width="25%">

 	<tr>
		<th>id</th>
		<th>category</th>
		<th>__images__</th>
		<th>name</th>
		<th>price</th>
		<th>description</th>
		<th colspan="2" align="center">operation</th>

	</tr>

<tbody>
     <?php
 	 $query="select * from add_product";
     $sql=mysqli_query($conn,$query);
     while($row=mysqli_fetch_array($sql)){
?> 
     <tr>
		<td><?php echo $row['id'];?></td>
		<td><?php echo $row['categories'];?></td>
		<td><img src="<?php echo $row['image'];?>" width="100%" height="150"></td>
		<td><?php echo $row['name'];?></td>
		<td><?php echo $row['price'];?></td>
		<td><?php echo $row['prod_details'];?></td>
		 <td><a href="<?php echo"update_product.php?id=$row[id] & image=$row[image] & name=$row[name] & price=$row[price] ";?>">update</a> </td> 
		 <td><a href="<?php echo"delete_product.php?id=$row[id]";?>">delete</a> </td> 
	</tr>
	<?php } ?>
</tbody>
</table>
</body>
</html>
