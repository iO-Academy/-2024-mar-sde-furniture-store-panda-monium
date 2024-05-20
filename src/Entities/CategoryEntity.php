<?php



class CategoryEntity
{
    private string $name;

    private int $stockTotal;

    private int $id;

    public function displayCategory()
    {
        return '<div class="flex justify-between items-center bg-slate-100 p-5">
                <h3 class="text-2xl">' . $this->name . '</h3>
                <span class="bg-teal-500 text-2xl px-2 py-1 rounded">' . $this->stockTotal . '</span>
            </div>';
    }
}