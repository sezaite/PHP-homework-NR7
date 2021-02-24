<?php
 _d($_GET);
 if(isset($_GET['nuoroda'])){
    header('Location: http://localhost/bit/ndWEB7/blue.php');
 }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style= "background-color:blue;">
    <a href="?nuoroda=1">RED</a>
</body>
</html>