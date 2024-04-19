<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Illuminate\Http\Request;
use Livewire\Component;
use Livewire\WithPagination;

class Catalog extends Component
{
    use WithPagination;

    public $products;
    protected $paginationTheme = 'bootstrap';
    public $filter = [];
    public $search;
    public $sortBy;

    public function render()
    {
        $query = Product::query();
        if (!empty($this->filter)) {
            $query->whereIn('type', $this->filter);
        }
        if ($this->search) {
            $searchTerms = explode(' ', $this->search);
            foreach ($searchTerms as $term) {
                $query->where('name', 'like', '%' . $term . '%');
            }
        }
        switch ($this->sortBy) {
            case 'name_asc':
                $query->orderBy('name');
                break;
            case 'name_desc':
                $query->orderByDesc('name');
                break;
            case 'price_asc':
                $query->orderBy('actual_price');
                break;
            case 'price_desc':
                $query->orderByDesc('actual_price');
                break;
            default:
                break;
        }
        $paginator = $query->paginate(16);
        $this->products = $paginator->items();
        return view('livewire.catalog', ['paginator' => $paginator]);
    }

    public function mount(Request $request): void
    {
        $this->search = $request->query('search', '');
        $this->filter = $request->query('filter', []);
        $this->sortBy = $request->query('sortBy', 'default');
    }
}
