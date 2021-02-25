<!-- Sukurkite du puslapius pink.php ir rose.php. Nuspalvinkite juos atitinkamo spalvom. Į pink.php puslapį įdėkite formą su POST metodu ir mygtuku “GO TO ROSE”. Formą nukreipkite, kad ji atsidarinėtų rose.php puslapyje. Padarykite taip, kad surinkus naršyklėje tiesiogiai adresą į rose.php puslapį, naršyklė būtų peradresuojama į pink.php puslapį.  -->

<?php
// if (!isset($_POST['rose'])){
//     header("Location: http://localhost/bit/ndWEB7/astuntas/pink.php");
//     die;
//   }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style="background-color: pink">
    <h1>Labas</h1>
    <form action="http://localhost/bit/ndWEB7/astuntas/rose.php" method="post">

<input type="text" name="rose">

<button type="submit">go to rose</button>
</form>
</body>
</html>