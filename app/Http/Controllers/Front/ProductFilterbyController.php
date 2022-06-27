<?php 
namespace App\Http\Controllers\Front;
use Illuminate\Support\Facades\View;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Price;
use Debugbar;

class ProductFilterbyController extends Controller
{
    
    protected $product;
    protected $price;    

    public function __construct(Product $product, Price $price)
    {
        $this->product = $product;
        $this->price = $price;
    }

    public function show($order)
    {
        $view = View::make('front.pages.merchandising.index')
        ->with('products', $this->product->where('visible', 1)
        ->join('prices', 'products.id','=','prices.product_id')->orderby('base_price', $order)->get());    
        if(request()->ajax()) {
            $sections = $view->renderSections(); 
            return response()->json([
                'content' => $sections['content'],
            ]); 
        }
        return $view;
    }

}