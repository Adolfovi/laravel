<?php 
namespace App\Http\Controllers\Front;
use Illuminate\Support\Facades\View;
use App\Http\Controllers\Controller;
use App\Models\Cart;
use App\Models\Product;
use Illuminate\Http\Request;

class CartController extends Controller
{
    protected $cart;
    protected $product;

    public function __construct(Cart $cart, Product $product)
    {
        $this->cart = $cart;
        $this->product = $product;
    }

    public function index()
    {
        $view = View::make('front.pages.cart.index');
        return $view;
    }

    public function store(Request $request)
    {
        for($i = 0; $i < request('amount'); $i++) {
            $cart = $this->cart->create([
                'price_id' => request('price_id'),
                'fingerprint' => '1',
                'active' => 1,
            ]);
        }

        $view = View::make('front.pages.cart.index')->with('carts', $this->cart->where('active', 1)->get())->renderSections();
        return response()->json(['content' => $view['content'], ]);
        
    }
    
    public function show(Cart $cart)
    {
        $view = View::make('front.pages.cart.index')
        ->with('carts', $cart);
        
        if(request()->ajax()){
            $sections = $view->renderSections();
            return response()->json([
                'content' => $sections['content'], ]);
        }

        
        return $view;
    }


}
