<!-- custom css -->
<link rel="stylesheet" href="../../styles/style.css">
<!--  -->
<!-- header -->
<?php include_once "../../_header.php" ?>
<?php include_once "../master/header.php" ?>
<!--  -->
<!-- content -->
<div class="content">
  <div class="fill">
  	<?php include_once "../../model/Delete.php" ?>
  	<form method="POST" action="">
		<table>
			<tr>
				<input type="hidden" name="id" id="id" value="<?=$id?>" required></td>
			</tr>
			<tr>
				<td>Name</td><td>:</td><td><input type="text" name="name" id="name" value="<?=$name?>" required></td>
			</tr>
			<tr>
				<td>Email</td><td>:</td><td><input type="text" name="email" id="email" value="<?=$email?>" required></td>
			</tr>
			<tr>
				<td>Address</td><td>:</td><td><textarea style="width:100%" type="text" name="address" id="address" value="<?=$address?>" required><?=$address?></textarea></td>
			</tr>
			<tr><td></td><td></td><td><input type="submit" value="Delete" name="dell" id="dell"></td></tr>
		</table>
	</form>
  </div>
</div>
<!--  -->
<!-- footer -->
<?php include_once "../master/footer.php" ?>
<?php include_once "../../_footer.php" ?>
<!--  -->