<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Livewire\Component;
use Livewire\WithPagination;

class Catalog extends Component
{
    use WithPagination;

    public $products;
    protected $paginationTheme = 'bootstrap';
    public $filter = [];

    public function render()
    {
        $query = Product::query();
        if (!empty($this->filter)) {
            $query->whereIn('type', $this->filter);
        }
        $paginator = $query->paginate(16);
        $this->products = $paginator->items();
        return view('livewire.catalog', ['paginator' => $paginator]);
    }
}
