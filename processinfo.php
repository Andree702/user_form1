<?php
require "db_connect.php";
//if the session admin is not set, no permision is given to this file

$name=$_REQUEST["name"];
$height=$_REQUEST["height"];
$marital=$_REQUEST["status"];
$birth=$_REQUEST["birth"];
$gh_no=$_REQUEST["id"];

$avatar = 'img';
$img = $_FILES[$avatar];
$dir = 'users_img/';//folder for image
$type = $img['type'];

if($type == 'image/gif' || $type == 'image/png' || $type == 'image/jpg' || $type == 'image/jpeg'){
	$now = time();
	while(file_exists($uploaded = $dir.$now.$img['name'])){
		$now++;
	}
	@move_uploaded_file($img['tmp_name'],$uploaded);
	
	}else{
		//tell them it is not the right file
	}
	if($name){
		//Query for saving new event
		$query = sprintf("INSERT INTO users(full_name,height,marital,gh_no,img,birth) VALUES('%s',%d,'%s','%s','%s','%s');",
		mysqli_real_escape_string($conn,$name),mysqli_real_escape_string($conn,$height),
		mysqli_real_escape_string($conn,$marital),mysqli_real_escape_string($conn,$gh_no),
		mysqli_real_escape_string($conn,$uploaded),mysqli_real_escape_string($conn,$birth));
	
		$result = mysqli_query($conn,$query);
	}

	?>