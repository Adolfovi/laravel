<?php

namespace App\Http\Controllers\Admin;

// Los use equivalen a los import de javascript, es una forma de traer
// otros archivos que contienen código a este archivo
use Illuminate\Support\Facades\View;
use App\Http\Controllers\Controller;
use App\Models\Cart;
use App\Http\Requests\Admin\CartRequest;
use Debugbar;
// Podemos identificar que estamos ante un objeto por la palabra "class"
// el nombre objeto es "CartController", el nombre del objeto tiene que
// coincidir con el nombre del archivo.

// extends lo que está afirmando es que el objeto "CartController" está
// heredando todas las propiedades (variables) y métodos del objeto "Controller"
class CartController extends Controller
{
    // Un objeto puede tener propiedades o/y métodos. 

    // La siguiente es una propiedad del objeto, una propiedad es equivalente
    // a una variable. En este caso estamos declarando la propiedad $user la cual
    // podrá ser usada si escribimos $this->cart, donde "this" significa el propio
    // objeto. Protected en este caso significa que esta propiedad sólo puede ser 
    // usada desde dentro de una función. 

    protected $cart;

    /*
    Las siguientes líneas son métodos. Un método se identifica porque
    escribimos "public function". Public en este caso significa que esta función
    puede ser llamada por otro archivo para que se ejecute el código que hay dentro de 
    la función. 
    Cuando llamamos a un método antes de nada se ejecutara el método 
    __construct (constructor). El constructor se utiliza normalmente para
    dar un valor a las propiedades. 
    En este caso estamos construyendo el objeto del modelo Cart y asignándolo
    a la propiedad $this->cart para poder tener disponible el modelo dentro de
    cada método. Existen tres formas de construir (instanciar) un objeto, instanciar un objeto
    significa que hacemos disponible su código para poder ser usado. 
    1ª Forma (clásica):
    $cart = new Cart; 
    En esta forma estamos creando una variable que se llama cart, y que tiene como valor el objeto Cart. Si vemos
    la palabra "new" significa que se está instanciando el objeto. 
    2ª Forma (inyección de dependencias, la más óptima):
    __construct(Cart $cart)
    En esta forma lo que hacemos es poner entre los paréntesis de un método (en este ejemplo en el método __construct) el nombre
    del objeto y una variable que tendrá como valor el objeto ya instanciado. El nombre de la variable puede ser el que queramos, 
    pero normalmente solemos poner como nombre de la variable el mismo nombre del objeto. 
    3ª Forma (uso de métodos estáticos, la menos óptima)
    View::make('admin.pages.carts.index')
    En esta forma lo que hacemos es usar un método de un objeto sin necesidad de instanciarlo. En este caso estamos usando el método
    make del objeto View. 
    Finalmente, una vez instanciado un objeto (por ejemplo, el objeto Cart) podemos acceder a sus propiedades escribiendo:
    $cart = new Cart;
    $cart->name;
    En este caso estamos accediendo a la propiedad "name" del objeto "cart";
    Si queremos acceder al método de un objeto tenemos que escribir:
    $cart->get();
    
    */

    public function __construct(Cart $cart)
    {
        $this->cart = $cart;
        
    }
    
    public function index()
    {

        /* 
            En este momento estamos usando el objeto View para crear una vista, a la cual le estamos pasando dos variables
            (cart y carts). La primera variable tiene como valor los campos de la tabla carts vacios, y la segunda variable
            tiene como valor todos los registros de la tabla carts. Para pedir todos los datos hemos escrito: $this->cart->get();
        */

        $view = View::make('admin.pages.carts.index')
                ->with('cart', $this->cart)
                ->with('carts', $this->cart->where('active', 1)->get());

        if(request()->ajax()) {
            
            $sections = $view->renderSections(); 
    
            return response()->json([
                'table' => $sections['table'],
                'form' => $sections['form'],
            ]); 
        }

        return $view;
    }

            public function create()
            {
        /*
            En la siguientes líneas estamos creando una variable que se llama view, y que tiene como valor el objeto View.
            El objeto View medienta un método estático está creando la vista 'admin.pages.usuarios.create' que es la que se
            mostrará en pantalla. Con 'with' le estamos diciendo que le pase la variable 'user' y que su valor sea el objeto
            modelo User, que como no estamos haciendo ninguna llamada a la base de datos nos devolverá los campos vacíos de la tabla.
            Por último, renderSections() lo que está haciendo es recargar las sections que tiene la vista (en este caso 'form' y 'table')
            con los datos procesados. 
        */

       $view = View::make('admin.pages.carts.index')
        ->with('cart', $this->cart)
        ->renderSections();

        Debugbar::info( $view['form']);

        /*
            En la siguiente línea estamos devolviendo una respuesta a la petición AJAX, una petición AJAX hará que una parte de la página
            se actualice sin necesidad de recargar toda la página. En este caso, la parte que se actualizará es la parte del formulario. Para
            ello estamos diciendo que la palabra "form" será equivalente a $view['form'], la cual contiene el html del formulario ya actualizado.
        */

        return response()->json([
            'form' => $view['form']
        ]);
    }

    public function store(CartRequest $request)
    {            
        

        $cart = $this->cart->updateOrCreate([
            'price_id' => request('price_id'),
            'fingerprint' => '1',
            'active' => 1,
        ]);
            
        $view = View::make('admin.pages.carts.index')
        ->with('carts', $this->cart->where('active', 1)->get())
        ->with('cart', $cart)
        ->renderSections();    

        return response()->json([
            'table' => $view['table'],
            'form' => $view['form'],
            'id' => $cart->id,
        ]);
    }

    public function edit(Cart $cart)
    {
        $view = View::make('admin.pages.carts.index')
        ->with('cart', $cart)
        ->with('carts', $this->cart->where('active', 1)->get());  
        
        if(request()->ajax()) {

            $sections = $view->renderSections(); 
    
            return response()->json([
                'form' => $sections['form'],
            ]); 
        }
                
        return $view;
    }

    public function show(Cart $cart){

    }

    public function destroy(Cart $cart)
    {
        $cart->active = 0;
        $cart->save();

        $view = View::make('admin.pages.carts.index')
            ->with('cart', $this->cart)
            ->with('carts', $this->cart->where('active', 1)->get())
            ->renderSections();
        
        return response()->json([
            'table' => $view['table'],
            'form' => $view['form']
        ]);
    }
}