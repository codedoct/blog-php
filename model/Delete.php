<?php
    $user_id  = $_GET["user_id"];
	$_id	  = $_POST["id"];
	$_delete  = $_POST["dell"];
	$_name	  = $_POST["name"];
	$_email   = $_POST["email"];
	$_address = $_POST["address"];

	if ($_delete) {
		if ($_id) {
			$sql="DELETE FROM crud WHERE id = '$_id'";
	    	mysql_query($sql,$db);
		}
    	header("Location: http://localhost/blog/webcoboy/");
		die();
	}

	$sql="SELECT * FROM crud WHERE id='$user_id'";
	$hsl=mysql_query($sql,$db);
	list($name,$email,$address,$created_at,$updated_at,$id)=mysql_fetch_array($hsl);
?>