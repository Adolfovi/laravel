<?php

namespace App\Http\Controllers\Front;
use Illuminate\Support\Facades\View;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Cart;
use App\Models\Tax;
use App\Models\Client;
use App\Models\Venta;
use Illuminate\Support\Facades\DB;

class CheckingController extends Controller
{
    protected $cart;
    protected $tax;
    protected $client;
    protected $venta;

    public function __construct(Cart $cart, Tax $tax, Client $client, Venta $venta)
    {
        $this->cart = $cart;
        $this->tax = $tax;
        $this->client = $client;
        $this->venta = $venta;
    }

    public function index($fingerprint)
    {

        $totals = $this->cart
        ->where('carts.fingerprint', $fingerprint)
        ->where('carts.active', 1)
        ->where('carts.venta_id', null)
        ->join('prices', 'prices.id', '=', 'carts.price_id')
        ->join('taxes', 'taxes.id', '=', 'prices.tax_id')
        ->select(DB::raw('sum(prices.base_price) as base_total'), DB::raw('sum(prices.base_price * taxes.multiplicator) as total') )
        ->first();
        
        $view = View::make('front.pages.checkout.index')
        ->with('base_total', $totals->base_total)
        ->with('tax_total', ($totals->total - $totals->base_total))
        ->with('total', $totals->total)
        ->with('fingerprint', $fingerprint)        
        ->renderSections();

        return response()->json(
            ['content' => $view['content']]
        );

    }

    public function store(){
        date_default_timezone_set("Europe/Madrid");

        $totals = $this->cart
        ->where('carts.active', 1)
        ->where('carts.venta_id', null)
        ->join('prices', 'prices.id', '=', 'carts.price_id')
        ->join('taxes', 'taxes.id', '=', 'prices.tax_id')
        ->select(DB::raw('sum(prices.base_price) as base_total'), DB::raw('sum(prices.base_price * taxes.multiplicator) as total') )
        ->first();


        $client = $this->client->create([
            'name' => request('name'),
            'surname' => request('surname'),
            'email' => request('email'),
            'telephone' => request('telephone'),
            'address' => request('address'),
            'postal_code' => request('postal_code'),
            'city' => request('city'),
            'country' => request('country'),
            'visible' => 1,
            'active' => 1,
        ]);

        $venta = $this->venta->create([
            'ticket_number' => 'asas',
            'date_emision' => date('Y-m-d'),
            'time_emision' => date('H:i:s'),
            'payment_method_id' => '1',
            'total_base_price' => $totals->base_total,
            'total_tax_price' => $totals->total - $totals->base_total,
            'total_price' => '1',
            'client_id' => $client->id,
            'active' => 1,
        ]);

        // A CONTINUACIÓN ESCRIBIREMOS EL CÓDIGO QUE SE ENCARGARÁ DE ACTUALIZAR
        // LOS CAMPOS VACÍOS (CLIENT_ID Y VENTA_ID) DE LA TABLA CART E INSERTAREMOS LA ID DEL CLIENTE 
        // Y LA ID DE LA VENTA GENERADA CUYA CONDICIÓN DE AMBOS CAMPOS SEA IGUAL A NULL
        // Y MODIFICAR LA PÁGINA DE CARRITO PARA QUE SOLO MUESTRE LOS PRODUCTOS 
        // CUYOS CAMPOS CLIENT_ID Y VENTA_ID SEA IGUAL A NULL





        return View::make('front.pages.salemade.index')->renderSections();
    }
}