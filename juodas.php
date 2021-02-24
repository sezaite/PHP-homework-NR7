<!-- Padarykite juodą puslapį, kuriame būtų POST forma, mygtukas ir atsitiktinis kiekis (3-10) checkbox su raidėm A,B,C… Padarykite taip, kad paspaudus mygtuką, fono spalva pasikeistų į baltą, forma išnyktų ir atsirastų skaičius, rodantis kiek buvo pažymėta checkboksų (ne kurie, o kiek).  -->

<?php
$color = 'black';
$visability = 'visible';
if(!empty($_GET)){
    $color = 'white';
    $visability = 'none';
    echo "<h3>". count($_GET) . "</h3>";
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
<form style="display: <?= $visability?>;">

<?php
$checkboxuKiekis = rand(3, 10);
$checkboxHTML = '';
for($i = 0; $i < $checkboxuKiekis; $i++){
$checkboxHTML.= "<input type='checkbox' id='". chr(65 + $i) ."' name='". chr(65 + $i) ."' value='Bike'>
<label for='". chr(65 + $i) ."' style = 'color: white;'>" . chr(65 + $i) . "</label><br>";
}
echo "<form action='' method='post'>" . $checkboxHTML . "<button type='submit'>Skaiciuoti</button></form>";
?>

</form>
</body>
</html>