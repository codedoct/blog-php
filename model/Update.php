<?php
    $user_id  = $_GET["user_id"];
	$_id	  = $_POST["id"];
	$_simpan  = $_POST["simpan"];
	$_name	  = $_POST["name"];
	$_email   = $_POST["email"];
	$_address = $_POST["address"];

	if ($_simpan) {
		if ($_id) {
			$sql="UPDATE crud SET
			name = '$_name',
			email = '$_email',
			address = '$_address',
			updated_at = NOW()
	        WHERE id = '$_id'";
	    	mysql_query($sql,$db);
		}
    	header("Location: http://localhost/blog/webcoboy/");
		die();
	}

	$sql="SELECT * FROM crud WHERE id='$user_id'";
	$hsl=mysql_query($sql,$db);
	list($name,$email,$address,$created_at,$updated_at,$id)=mysql_fetch_array($hsl);
?>