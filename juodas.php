<!-- Pakartokite 9 uždavinį. Padarykite taip, kad atsirastų du skaičiai. Vienas rodytų kiek buvo pažymėta, o kitas kiek iš vis buvo jų sugeneruota. -->
<?php
$color = 'black';
$visability = 'inline';
if(!empty($_POST)){
    $color = 'white';
    $visability = 'none';
    echo "<h3>". (count($_POST) - 1) . "</h3><br>";
    echo '<h2>' . $_POST['deziu-kiekis'] . '</h2>';
    die;
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
<body style="background-color: <?=  $color?>;">
<form action='' method='post' style="display: <?=  $visability?>;">
<?php
$checkboxuKiekis = rand(3, 10);
$checkboxHTML = '';
for($i = 0; $i < $checkboxuKiekis; $i++){
$checkboxHTML.= "<input type='checkbox' id='". chr(65 + $i) ."' name='". chr(65 + $i) ."' value='Bike'>
<label for='". chr(65 + $i) ."' style = 'color: white;'>" . chr(65 + $i) . "</label><br>";
}
echo  $checkboxHTML . "<input type='hidden' name='deziu-kiekis' value='" .$checkboxuKiekis. "' />";

?>
<button type='submit'>Skaiciuoti</button>
</form>
</body>
</html>