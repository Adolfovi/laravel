<?php 
namespace App\Http\Controllers\Front;
use Illuminate\Support\Facades\View;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use Debugbar;

class ProductFilterbyController extends Controller
{
    
    protected $product;    

    public function __construct(Product $product)
    {
        $this->product = $product;
    }

    public function show($order)
    {

        $view = View::make('front.pages.merchandising.index')
        ->with('products', $this->product->where('visible', 1)->orderby('price', $order)->get());    
        if(request()->ajax()) {

            $sections = $view->renderSections(); 
    
            return response()->json([
                'content' => $sections['content'],
            ]); 
        }


        return $view;
    }






}
