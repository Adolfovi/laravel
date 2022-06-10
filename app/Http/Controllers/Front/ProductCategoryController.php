<?php 
namespace App\Http\Controllers\Front;
use Illuminate\Support\Facades\View;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;

class ProductCategoryController extends Controller
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

    public function show($product)
    {
        $view = View::make('front.pages.merchandising.index')
        ->with('products', $this->product->where('category_name', $product)->get());

        if(request()->ajax()) {

            $sections = $view->renderSections(); 
    
            return response()->json([
                'content' => $sections['content'],
            ]); 
        }


        return $view;
    }






}
