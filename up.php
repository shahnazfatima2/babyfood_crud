<?php
include 'config.php';
	if(isset($_POST['update'])){
    $ID = $_POST['Id'];
	$NAME =$_POST['name'];
	$PRICE =$_POST['price'];
	$IMAGE =$_FILES['image'];
	print_r($_FILES['image']);
	 $img_loc = $_FILES['image']['tmp_name'];
	$img_name = $_FILES['image']['name'];
	$img_des ="uploadimage/".$img_name;
	move_uploaded_file($img_loc,'uploadimage/'.$img_name);
	$sql ="UPDATE `tblcard` SET `Name`='$NAME',`Price`='$PRICE',`Image`='$img_des'  where `Id`='$ID'";
	mysqli_query($con ,$sql);
	header("location: in.php");
	}
?> 