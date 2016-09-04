<?php 
	$_simpan  = $_POST["simpan"];
	$_name	  = $_POST["name"];
	$_email   = $_POST["email"];
	$_address = $_POST["address"];
	if ($_simpan) {
		$sql="INSERT INTO crud (name,email,address,created_at,updated_at) VALUES ";
        $sql.="('$_name','$_email','$_address',NOW(),NOW())";
    	mysql_query($sql,$db);
	}
?>
