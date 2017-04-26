<!-- custom css -->
<link rel="stylesheet" href="styles/style.css">
<!--  -->
<!-- model -->
<?php include_once "model/Read.php" ?>
<!--  -->
<!-- content -->
<?php include_once "view/master/header.php" ?>
<div class="content">
  <div class="fill">
  	<table border="1px";>
	<tr>
		<th>No</th>
		<th>Name</th>
		<th>Email</th>
		<th>Address</th>
		<th>Created At</th>
		<th>Updated At</th>
		<th>Action</th>
	</tr>
	<?php
		$sql="SELECT * FROM crud";
		$hsl=mysql_query($sql,$db);
		$no=0;
		while(list($id,$name,$email,$address,$created_at,$updated_at)=mysql_fetch_array($hsl)){
			$no++;
			?>
	  		<tr>
	  			<td><?=$no?></td>
	  			<td><?=$name?></td>
	  			<td><?=$email?></td>
	  			<td><?=$address?></td>
	  			<td><?=$created_at?></td>
	  			<td><?=$updated_at?></td>
	  			<td>
	  				<a href="view/crud/update.php?user_id=<?=$id?>">Edit</a> ||
	  				<a href="view/crud/delete.php?user_id=<?=$id?>">Delete</a>
	  			</td>
	  		</tr>
		    <?php
		}
	?>
	</table>
	<br>
	<button class="button_def" onclick='window.location="view/crud/create.php"'>Create</button>
  </div>
</div>
<?php include_once "view/master/footer.php" ?>