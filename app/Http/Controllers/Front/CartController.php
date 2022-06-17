<?php 
namespace App\Http\Controllers\Front;
use Illuminate\Support\Facades\View;
use App\Http\Controllers\Controller;
use App\Models\Cart;
use Illuminate\Http\Request;

class CartController extends Controller
{
    protected $cart;

    public function __construct(Cart $cart)
    {
        $this->cart = $cart;
    }

    public function index()
    {
        $view = View::make('front.pages.cart.index');
        return $view;
    }

    public function store(Request $request)
    {
        $cart = $this->cart->create([
            'price_id' => request('price_id'),
            'fingerprint' => '1',
            'active' => 1,
        ]);

        $view = View::make('front.pages.cart.index')->renderSections();
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
