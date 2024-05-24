<?php
require_once 'src/Services/CategoryDisplayService.php';
require_once 'src/Models/CategoryModel.php';
require_once 'src/Factory/FurnitureDatabaseConnector.php';
require_once 'src/Entities/CategoryEntity.php';

$db = FurnitureDatabaseConnector::connect();
$categories = CategoryModel::getCategories($db);

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
            <h1 class="text-5xl">Furniture Categories</h1>
            <p>We have a wide range of products in the below categories, start by selecting the kind of product you are looking for</p>
        </header>
        <section class="container mx-auto md:w-2/3 grid md:grid-cols-4 gap-5 mt-10">
           <?php
                foreach ($categories as $category) {
                   echo CategoryDisplayService::displayCategory($category);
                }
           ?>
        </section>
        <footer class="container mx-auto md:w-2/3 border-t mt-10 pt-5">
            <p>© Copyright iO Academy 2022</p>
        </footer>
    </body>
</html>
