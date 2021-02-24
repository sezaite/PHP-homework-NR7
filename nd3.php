<?php
if (isset($_GET['color'])){
  $color = $_GET['color'];
} else {
    echo 'lalalalalalla';
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
<body style='background-color: #<?=  $color?>;'>
<a href="nd2.php">Index</a> 
<form action="" method="get">

<input type="text" name="color">


<button type="submit">SPAUSTI</button>
</form>
<a href="http://localhost/bit/ndWEB7/nd3.php">Index</a>

</body>
</html>

