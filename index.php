<?php
require_once __DIR__ . './classes/product.php';
require_once __DIR__ . './classes/toy.php';
require_once __DIR__ . './classes/food.php';
require_once __DIR__ . './classes/kennel.php';

$printInpageArray = [];

$luxuryKennel1 = new Kennel('https://i.dailymail.co.uk/i/pix/2017/06/13/01/415FE8B200000578-0-image-a-20_1497313143550.jpg', 'deluxe kennel for rich dogs', '$6000', '1.5 M X 1.5 M', 'kevlar', true, 'dogs', '2kg');
$goodForPoop = new Food('https://pyxis.nymag.com/v1/imgs/f55/980/f57a2f1d6de4cbf768e5f97fb39f69caa7-dog-food-106-final.rsquare.w700.jpg', 'goodForPoop', '$50', null, 'avena, cereal, meat', true, 'cat', 'fish', '22/09/1991');
$bestBone = new Toy('https://www.dailypaws.com/thmb/oInCMqDQljHb1ay1d5dNb3vXdYA=/1500x0/filters:no_upscale():max_bytes(150000):strip_icc()/willie-bones-dog-chewing-toy-646e71a6edc54eda90b90c72250ff111.jpg', 'bestBone', '$15', '5cm X 20cm', 'plastic', false, 'dog', 'light grey');
$printInpageArray[] = $bestBone;
$printInpageArray[] = $goodForPoop;
$printInpageArray[] =  $luxuryKennel1;
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- link to css -->
    <link rel="stylesheet" href="./CSS/style.css">

    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Template php</title>
</head>

<body>
    <header>
        <h1 class="text-center">Pets shop</h1>
    </header>

    <main>
        <div class="container-fluid">
            <div class="row">
                <div class="col d-flex justify-content-center ">
                    <?php
                    foreach ($printInpageArray as $value) {
                    ?>
                        <div class="product-card text-center">
                            <h3 class="m-1">Product Name: <?php echo $value->name ?></h3>
                            <div class="img-box m-3 ">
                                <img src="<?php echo $value->imgUrl ?>" alt="">
                            </div>
                            <h4 class="m-1">Categoria: <?php echo $value->category ?></h4>
                            <h4 class="m-1">Prezzo: <?php echo $value->price ?></h4>
                            <h4 class="m-1">Disponibile: <?php
                                if ($value-> avaiable == true) {
                                    echo 'Si';
                                } else {
                                    echo 'No';
                                }
                                ?>
                            </h4>
                        </div>
                    <?php
                    }
                    ?>
                </div>
            </div>
        </div>
    </main>

</body>

</html>