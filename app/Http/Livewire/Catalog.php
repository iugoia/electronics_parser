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
    public $shop = [];

    public function render()
    {
        $query = Product::query();
        if (!empty($this->shop)) {
            $query->whereHas('shop', function ($query) {
                $query->whereIn('id', $this->shop);
            });
        }
        if (!empty($this->filter)) {
            if (is_array($this->filter)) {
                if (in_array('mobile', $this->filter)) {
                    $this->filter[] = 'apple_iphone';
                    $this->filter[] = 'smartfony_1';
                } else {
                    $this->filter = array_diff($this->filter, ['apple_iphone', 'smartfony_1']);
                }

// ...

                if (in_array('accessories', $this->filter)) {
                    $this->filter[] = 'aksessuary_dlya_telefonov_planshetov_i_giroskuterov';
                } else {
                    $this->filter = array_diff($this->filter, ['aksessuary_dlya_telefonov_planshetov_i_giroskuterov']);
                }

// ...

                if (in_array('second_hand_smartphones', $this->filter)) {
                    $this->filter[] = 'sotovye_telefony_knopochnye';
                } else {
                    $this->filter = array_diff($this->filter, ['sotovye_telefony_knopochnye']);
                }

// ...

                if (in_array('portativnaya_akustika_1', $this->filter)) {
                    $this->filter[] = 'naushniki';
                } else {
                    $this->filter = array_diff($this->filter, ['naushniki']);
                }

// ...

                if (in_array('telephones', $this->filter)) {
                    $this->filter[] = 'sotovye_telefony_knopochnye';
                } else {
                    $this->filter = array_diff($this->filter, ['sotovye_telefony_knopochnye']);
                }

// Обновление значения массива filter после удаления значений
                $this->filter = array_values(array_unique($this->filter));
                $query->whereIn('type', $this->filter);
            }

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

    public function clearAllFilters(): void
    {
        $this->filter = [];
        $this->shop = [];
    }
}
