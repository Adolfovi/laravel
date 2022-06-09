<?php 
namespace App\Http\Controllers\Front;
use Illuminate\Support\Facades\View;
use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;
use Debugbar;

class CategoryController extends Controller
{
    protected $product;

    public function __construct(Product $product)
    {
        $this->product = $product;
    }

    public function index()
    {
        $view = View::make('front.pages.merchandising.index')
        ->with('products', $this->product->where('active', 1)->get());
        return $view;
    }

    
}