<?php 
include __DIR__ . '/Product.php';
include __DIR__ . '/Dog.php';

class Product {
    public $name;
    public $price;
    public $code;
    public $image;
    public $genre;

    public function __construct($name, $price, $code, $image, $genre) {
        $this->name = $name;
        $this->price = $price;
        $this->code = $code;
        $this->image = $image;
        $this->genre = $genre;
    }
};

$products = [$prodotto1, $prodotto2, $prodotto3, $prodotto4, $prodotto5, $prodotto6, $prodotto7, $prodotto8];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zootropolis</title>

    <!--Bootstrap--> 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!--CSS-->
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">    
        <header> 
            <h1 class="text-center my-5">Zootropolis</h1>
        </header>

        <main>
            <div class="container">
                <div class="row ">
                    <?php foreach($products as $product) : ?>
                        <div class="col mb-5 flex-grow-0">
                            <div class="card" style="width: 18rem;">
                                <img class="product-img" src="<?= $product->image ?>" alt="<?= $product->name ?>">
                                <div class="separator"></div>
                                <div class="card-body">
                                    <!--Dopo risolvi questo color inline-->
                                    <h5 class="card-title text-center"><?= $product->name ?></h5>
                                    <ul>
                                        <li>Prezzo: <?= $product->price ?>€</li>
                                        <li>Codice prodotto: #<?= $product->code ?></li> 
                                    </ul>
                                </div>
                            </div>
                        </div>
                    <?php endforeach?>
                </div>
            </div>
        </main>
    </div>
</body>
</html>