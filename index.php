<?php
require_once __DIR__ . '/product.php';
require_once __DIR__ . '/toy.php';
require_once __DIR__ . '/food.php';
require_once __DIR__ . '/kennel.php';

$printInpageArray = [];

$luxuryKennel1 = new Kennel('deluxe kennel for rich dogs', '$6000', '50cm X 50cm', 'kevlar', true, 'dogs', '2kg');
$goodForPoop = new food('goodForPoop','$50',null,'avena, cereal,meat',true,'cat','fish','22/09/1991');


?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- link to css -->
    <link rel="stylesheet" href="./css/style.css">

    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Template php</title>
</head>

<body>
    <header class="row justify-content-center align-items-center ">
        <h1>Compra cose per gli animali dai</h1>
    </header>

    <main>
        main
    </main>

</body>

</html>