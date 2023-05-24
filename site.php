<?php
session_start();

if (!isset($_SESSION['username'])) {
    header("Location: index.php");
    exit();
}

$username = $_SESSION['username'];
?>

<!DOCTYPE hmtl>
<html> 
<head> 

    <title>WebHello</title>

</head> 

<body> 
             
    <table width=100% height="50" border="1" > 
        <tr> 
            <td height="150" colspan="2" bgcolor="#F08080" position="center"> <h1>HELLO KITTY WEBSITE<h1>  
            </td> 
        </tr> 
    </table> 

<img src="https://i0.wp.com/ideawallpapers.com/wp-content/uploads/2022/08/hello-kitty-wallpaper-7.jpg?resize=770%2C397&ssl=1" width=100% height="100%">

</body> 
</html> 