<?php

$breakLine = "<br>";
$HR = "<hr>";
include "functions.php";

?>

<html>
    <head>
    <title>Add-Product</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    </head>
    <body>
        <div class="container my-5">
          <h1 class="text-center">Add - Product</h1>
            <?php if (isset($_GET['result'])) { 
                $erros = json_decode($_GET['result']);
                if (isset($_GET['price'])) {
                    $price = $_GET['price'];
                }
            ?>
                <div class="alert alert-primary" role="alert">
                    <ul>
                        <?php foreach($erros as $error) { ?>
                        <li><?php echo $error; ?></li>
                        <?php } ?>
                    </ul>
                    <h1><?php if (isset($price)) { echo "Price wit Discount : " . getPriceWithDiscount($price); }?></h1>
                </div>
            <?php } ?>
            <div class="row">
                <form method="GET" action="handle-add-product.php">
                    <div class="mb-3">
                        <label class="form-label">Name</label>
                        <input type="text" class="form-control" name="name" placeholder="Enter Product Name">
                    </div>

                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Description</label>
                        <textarea class="form-control" name="description" placeholder="Description..."></textarea>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Price</label>
                        <input type="text" class="form-control" name="price" placeholder="Enter Product Price">
                    </div>

                    <button type="submit" name="submit" class="btn btn-primary">Add</button>
                </form>
            </div>
        
        </div>

        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
    </body>
</html>