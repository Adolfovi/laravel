<?php 
namespace App\Http\Controllers\Front;
use Illuminate\Support\Facades\View;
use App\Http\Controllers\Controller;
use App\Models\Cart;
use App\Models\Client;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Debugbar;

class CartController extends Controller
{
    protected $cart;
    protected $client;

    public function __construct(Cart $cart, Client $client)
    {
        $this->cart = $cart;
        $this->client = $client;
    }

    public function index()
    {
        $view = View::make('front.pages.cart.index');
        return $view;
    }

    public function store(Request $request)
    { 

        // GENERA UN STRING ALFANUMERICO TOTALMENTE ALEATORIO
        $chars = '0123456789qwertyuiopasdfghjklzxcvbnm';
        $randomstring = substr(str_shuffle($chars), 0, 10);        
        
        
        session_start();
        Debugbar::info(session_id());
        
        
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
        ->where('client_id', NULL)
        ->where('fingerprint', $cart->fingerprint)
        ->get();

        $totals = $this->cart
        ->where('carts.fingerprint', $cart->fingerprint)
        ->where('carts.active', 1)
        ->where('carts.venta_id', null)
        ->join('prices', 'prices.id', '=', 'carts.price_id')
        ->join('taxes', 'taxes.id', '=', 'prices.tax_id')
        ->select(DB::raw('sum(prices.base_price) as base_total'), DB::raw('sum(prices.base_price * taxes.multiplicator) as total') )
        ->first();
        
        $view = View::make('front.pages.cart.index')
        ->with('carts', $carts)
        ->with('base_total', $totals->base_total)
        ->with('tax_total', ($totals->total - $totals->base_total))
        ->with('total', $totals->total)
        ->with('fingerprint', $cart->fingerprint)        
        ->renderSections();

        return response()->json(
            ['content' => $view['content']]
        );
    }

    public function plus($fingerprint, $price_id)
    {
        $cart = $this->cart->create([
            'price_id' => $price_id,
            'fingerprint' => $fingerprint,
            'active' => 1,
        ]);

        $total_base = 0;
        $total_tax = 0;

        $carts = $this->cart->select(DB::raw('count(price_id) as quantity'),'price_id')
        ->groupByRaw('price_id')
        ->where('active', 1)
        ->where('fingerprint',  $fingerprint)
        ->where('sell_id', null)
        ->orderBy('price_id', 'desc')
        ->get();

        $totals = $this->cart
        ->where('carts.fingerprint', $fingerprint)
        ->where('carts.active', 1)
        ->where('carts.sell_id', null)
        ->join('prices', 'prices.id', '=', 'carts.price_id')
        ->join('taxes', 'taxes.id', '=', 'prices.tax_id')
        ->select(DB::raw('sum(prices.base_price) as base_total'), DB::raw('round(sum(prices.base_price * taxes.multiplicator),2) as total') )
        ->first();

        $view = View::make('front.pages.carrito.index')
        ->with('carts', $carts)
        ->with('fingerprint', $fingerprint)
        ->with('base_total', $totals->base_total)
        ->with('tax_total', ($totals->total - $totals->base_total))
        ->with('total', $totals->total)
        ->renderSections();

        return response()->json([
            'content' => $view['content'],
        ]);
    }

    public function minus($fingerprint, $price_id)
    {
        $resume = $this->cart
        ->where('active', 1)
        ->where('fingerprint', $fingerprint)
        ->where('price_id', $price_id)
        ->first();

        $resume->active = 0;
        $resume->save();

        $carts = $this->cart->select(DB::raw('count(price_id) as quantity'),'price_id')
        ->groupByRaw('price_id')
        ->where('active', 1)
        ->where('fingerprint',  $fingerprint)
        ->where('sell_id', null)
        ->orderBy('price_id', 'desc')
        ->get();

        $totals = $this->cart
        ->where('carts.fingerprint', $fingerprint)
        ->where('carts.active', 1)
        ->where('carts.sell_id', null)
        ->join('prices', 'prices.id', '=', 'carts.price_id')
        ->join('taxes', 'taxes.id', '=', 'prices.tax_id')
        ->select(DB::raw('sum(prices.base_price) as base_total'), DB::raw('round(sum(prices.base_price * taxes.multiplicator),2) as total') )
        ->first();

        $view = View::make('front.pages.carrito.index')
        ->with('carts', $carts)
        ->with('fingerprint', $fingerprint)
        ->with('base_total', $totals->base_total)
        ->with('tax_total', ($totals->total - $totals->base_total))
        ->with('total', $totals->total)
        ->renderSections();

        return response()->json([
            'content' => $view['content'],
        ]);
    }
}
