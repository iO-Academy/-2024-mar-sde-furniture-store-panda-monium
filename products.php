<?php
require_once 'src/Factory/furnitureDatabaseConnector.php';
require_once 'src/Models/ProductModel.php';

$db = furnitureDatabaseConnector::connect();
define('NUM_OF_CATEGORIES', 11);
$id = $_GET["id"];
if (!is_numeric($id) || $id > NUM_OF_CATEGORIES || $id < 1) {
    echo '<h1>Invalid id number</h1>
            <a href="index.php"><button>Home</button></a>';
    return;
} else {
    $id = intval($id);
}
    $products = ProductModel::getProducts($db, $id);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Furniture Store</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>

<nav class="bg-slate-800 py-2 px-5">
    <span class="text-4xl text-white">Furniture Store</span>
</nav>

<header class="container mx-auto md:w-2/3 md:mt-10 py-16 px-8 bg-slate-200 rounded">
    <h1 class="text-5xl mb-2">Category: Chair</h1>
    <p>For more information about any of the below products, click on the more button.</p>
</header>


<div class="container mx-auto md:w-2/3 mt-5">
    <a href="index.php" class="text-blue-500">Back</a>
</div>

<section class="container mx-auto md:w-2/3 grid md:grid-cols-4 gap-5 mt-5">
    <div class="bg-slate-100 p-5">
        <div class="flex justify-between items-center">
            <h3 class="text-2xl">Price: £27.62</h3>
            <span class="bg-teal-500 text-2xl px-2 py-1 rounded">54</span>
        </div>
        <p>Color: Yellow</p>
    </div>

</section>

<footer class="container mx-auto md:w-2/3 border-t mt-10 pt-5">
    <p>© Copyright iO Academy 2022</p>
</footer>

</body>
</html>
