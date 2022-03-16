<?php
//db selection goes here
require "db_connect.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        .style{
            text-align:center;
            /* padding: 0%; */
    /* margin: 0%; */
	background: url(pexels-ron-lach-10646406.jpg);
	background-size: cover;
    background-position: center;
    /* background-repeat: no-repeat; */
    height:100vh;
    
    
            
            font-size:20px;
            /* position:absolute;
            top:20px; */
        }
        /* .p1{
            position:absolute;
            top:20%;
            left:40%;
        } */
        .p1{
            position: relative;
    width: 400px;
    background: rgba(199, 199, 199, 0.7);
   padding: top 60px;
    border: 1px solid black;
    border-top-left-radius: 20px;
    border-bottom-right-radius: 20px;
    padding: 40px;
    margin-left:180px;
    margin-top: 100px;
    margin: 0 auto;s
    box-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
    position:absolute;
            top:20%;
            left:40%;
            Height: 280px;


        }
    </style>
</head>
<body>
<?php
//select from database the user and display their data here;
//this is where the javascript redirect to
$query = sprintf("SELECT * FROM users;");
$result = mysqli_query($conn,$query);
if($result){
    while($row = mysqli_fetch_array($result)){
        $name = $row['full_name'];
        $height=$row['height'];
        $marital=$row['marital'];
        $birth=$row['birth'];
        $gh_no=$row['gh_no'];
        $img=$row['img'];
        //other data goes here
        echo "<div class='style'>
    
        <div class='p1'><p>Name:$name</p>
        <p>Height:$height</p>
        
        <p>Marital:$marital</p>
        <p>Birth:$birth</p>
        <p>GhanaCard Number:$gh_no</p></div>
        <img  src='$img' style='width:120px;position:absolute;
        top:21%;left:63%;'>
        
        
        </div>";
    }
}
?>
</body>
</html>