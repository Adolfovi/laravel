<?php 
namespace App\Http\Controllers\Front;
use Illuminate\Support\Facades\View;
use App\Http\Controllers\Controller;
use App\Models\Price;
use App\Models\Cart;


use Illuminate\Http\Request;

class CartController extends Controller
{
    protected $price;
    protected $cart;

    public function __construct(Price $price, Cart $cart)
    {
        $this->price = $price;
        $this->cart = $cart;
    }

    public function index()
    {
        return view('front.pages.cart.index');
    }

    public function store($product)
    {
        $this->cart->updateOrCreate([
            'id' => $product],[
            'price_id' => $this->price->select('id')->where('product_id', $product),
            'fingerprint_id' => 23,
            'client_id' => 2,
            'venta_id' => 1,
            'active' => 1
    ]);
            $view = View::make('front.pages.cart.index')
            ->with('carts', $this->cart->where('active', 1)->get());
    }

}
