<?php

	session_start();
	include("../inc/conn.php");

	//echo $_FILES["pic"]["tmp_name"];
	//echo $_FILES["pic"]["name"];

	$tmpFname = explode(".", $_FILES["pic"]["name"]);

	//$tmpFname[0]. " " . $tmpFname[1];	

	$sql = "INSERT INTO image 
				(img_name, img_extension, img_type, img_district, img_date) 
				VALUES 
				('".$tmpFname[0]."', '".$tmpFname[1]."', '".$_REQUEST['cateId']."', '".$_REQUEST['distID']."', NOW())";

	$rs = $conn->query($sql);

	$imgID = $conn->insert_id;//get last insert id

	move_uploaded_file ( $_FILES["pic"]["tmp_name"] , "../image/upload/" . sprintf("%08d.%s",$imgID,$tmpFname[1]) );

?>
<script>
	window.location = 'index.php';
</script>