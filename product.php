<?php
require_once 'src/Services/ProductsDisplayService.php';
require_once 'src/Models/ProductModel.php';
require_once 'src/Factory/furnitureDatabaseConnector.php';
require_once 'src/Entities/ProductEntity.php';

$db = furnitureDatabaseConnector::connect();
$product = false;
$similarProduct = false;

if (!empty($_GET['id']) && is_numeric($_GET['id'])) {
    $id = $_GET["id"];
    $product = ProductModel::getIndividualProduct($db, $id);
}
if ($product) {
    $related_id = $product->getRelated();
    $similarProduct = ProductModel::getSimilarProduct($db, $related_id);
}

$units = "";
if (!empty($_GET['units'])) {
    $units = $_GET['units'];
}

echo '<br>';
var_dump($product);

$cmQuery = ['id' => $product->getId(), 'units' => 'cm'];
var_dump(http_build_query($cmQuery));

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Furniture Store</title>
        <script src="https://cdn.tailwindcss.com"></script>
    </head>
    <body>
        <nav class="bg-slate-800 py-2 px-5 flex justify-between items-center">
            <span class="text-4xl text-white">Furniture Store</span>

           <form class="text-yellow-300 border border-yellow-300 rounded">
                <button class="border-r border-yellow-300 hover:bg-yellow-300 hover:text-slate-800 px-1 py-1" name="units" value="mm">mm</button><!--
            --><button class="border-r border-yellow-300 hover:bg-yellow-300 hover:text-slate-800 px-1 py-1" name="units" value="cm">cm</button><!--
            --><button class="border-r border-yellow-300 hover:bg-yellow-300 hover:text-slate-800 px-1 py-1" name="units" value="in">in</button><!--
            --><button class="px-1 py-1 hover:bg-yellow-300 hover:text-slate-800" name="units" value="ft">ft</button>
            </form>
        </nav>
        <header class="container mx-auto md:w-2/3 md:mt-10 py-16 px-8 bg-slate-200 rounded">
            <?php
            if ($product){
                echo '<p>If this is not the right product for you, use the back button below to see our wide selection of other products.</p>';
            } else {
                echo '<h1 class="text-5xl mb-2"> Oops, something went wrong </h1>';
            }
            ?>
        </header>
            <div class="container mx-auto md:w-2/3 mt-5">
                <a href="index.php" class="text-blue-500">Back</a>
            </div>
           <?php
                if ($product) {
                    echo ProductsDisplayService::displayIndividualProduct($product);
                }

                if ($similarProduct) {
                    echo ProductsDisplayService::displaySimilarProduct($similarProduct);
                }
            ?>
        <footer class="container mx-auto md:w-2/3 border-t mt-10 pt-5">
            <p>© Copyright iO Academy 2022</p>
        </footer>
    </body>
</html>
