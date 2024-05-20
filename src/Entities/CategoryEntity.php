<?php



class CategoryEntity
{
    private string $name;

    private int $stockTotal;

    private int $id;

    public function displayCategory()
    {
        return '<div class="bg-slate-100 p-5">
        <div class="flex justify-between items-center">
            <h3 class="text-2xl">' . $this->name . '</h3>
            <span class="bg-teal-500 text-2xl px-2 py-1 rounded">' . $this->stockTotal . '</span>
        </div>
        <a href="products.php" class="inline-block bg-blue-600 px-3 py-2 rounded text-white">More >></a>
    </div>';
    }
}