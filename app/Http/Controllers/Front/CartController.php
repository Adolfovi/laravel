<?php 
namespace App\Http\Controllers\Front;
use Illuminate\Support\Facades\View;
use App\Http\Controllers\Controller;
use App\Models\Cart;
use Illuminate\Support\Facades\DB;
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
        for($i = 0; $i < request('amount'); $i++) {
            $cart = $this->cart->create([
                'price_id' => request('price_id'),
                'fingerprint' => '1',
                'active' => 1,
            ]);
        }

        $carts = $this->cart->select(DB::raw('count(price_id) as quantity'),'price_id')
        ->groupByRaw('price_id')
        ->where('active', 1)
        ->where('fingerprint', $cart->fingerprint)
        ->get();
        
        $view = View::make('front.pages.cart.index')
        ->with('carts', $carts)
        ->with('fingerprint', $cart->fingerprint)
        ->renderSections();

        return response()->json(
            ['content' => $view['content']]
        );
    }

    public function plus($fingerprint, $price_id)
    {
       
    }

    public function minus($fingerprint, $price_id)
    {
       
    }
}
