<?php

namespace App\Http\Controllers\Front;

// Los use equivalen a los import de javascript, es una forma de traer
// otros archivos que contienen código a este archivo
use Illuminate\Support\Facades\View;
use App\Http\Controllers\Controller;
use App\Models\Contact;
use App\Http\Requests\Front\ContactRequest;
use Debugbar;
// Podemos identificar que estamos ante un objeto por la palabra "class"
// el nombre objeto es "ContactController", el nombre del objeto tiene que
// coincidir con el nombre del archivo.

// extends lo que está afirmando es que el objeto "ContactController" está
// heredando todas las propiedades (variables) y métodos del objeto "Controller"
class ContactController extends Controller
{
    // Un objeto puede tener propiedades o/y métodos. 

    // La siguiente es una propiedad del objeto, una propiedad es equivalente
    // a una variable. En este caso estamos declarando la propiedad $user la cual
    // podrá ser usada si escribimos $this->contact, donde "this" significa el propio
    // objeto. Protected en este caso significa que esta propiedad sólo puede ser 
    // usada desde dentro de una función. 

    protected $contact;

    /*
    Las siguientes líneas son métodos. Un método se identifica porque
    escribimos "public function". Public en este caso significa que esta función
    puede ser llamada por otro archivo para que se ejecute el código que hay dentro de 
    la función. 
    Cuando llamamos a un método antes de nada se ejecutara el método 
    __construct (constructor). El constructor se utiliza normalmente para
    dar un valor a las propiedades. 
    En este caso estamos construyendo el objeto del modelo Contact y asignándolo
    a la propiedad $this->contact para poder tener disponible el modelo dentro de
    cada método. Existen tres formas de construir (instanciar) un objeto, instanciar un objeto
    significa que hacemos disponible su código para poder ser usado. 
    1ª Forma (clásica):
    $contact = new Contact; 
    En esta forma estamos creando una variable que se llama contact, y que tiene como valor el objeto Contact. Si vemos
    la palabra "new" significa que se está instanciando el objeto. 
    2ª Forma (inyección de dependencias, la más óptima):
    __construct(Contact $contact)
    En esta forma lo que hacemos es poner entre los paréntesis de un método (en este ejemplo en el método __construct) el nombre
    del objeto y una variable que tendrá como valor el objeto ya instanciado. El nombre de la variable puede ser el que queramos, 
    pero normalmente solemos poner como nombre de la variable el mismo nombre del objeto. 
    3ª Forma (uso de métodos estáticos, la menos óptima)
    View::make('admin.pages.contacts.index')
    En esta forma lo que hacemos es usar un método de un objeto sin necesidad de instanciarlo. En este caso estamos usando el método
    make del objeto View. 
    Finalmente, una vez instanciado un objeto (por ejemplo, el objeto Contact) podemos acceder a sus propiedades escribiendo:
    $contact = new Contact;
    $contact->name;
    En este caso estamos accediendo a la propiedad "name" del objeto "contact";
    Si queremos acceder al método de un objeto tenemos que escribir:
    $contact->get();
    
    */

    public function __construct(Contact $contact)
    {
        $this->contact = $contact;
        
    }
    
    public function index()
    {

        /* 
            En este momento estamos usando el objeto View para crear una vista, a la cual le estamos pasando dos variables
            (contact y contacts). La primera variable tiene como valor los campos de la tabla contacts vacios, y la segunda variable
            tiene como valor todos los registros de la tabla contacts. Para pedir todos los datos hemos escrito: $this->contact->get();
        */

        $view = View::make('front.pages.contact.index');

        return $view;
    }
     
    public function store(ContactRequest $request)
    {            

        $contact = $this->contact->updateOrCreate([
                'id' => request('id')],[
                'name' => request('name'),
                'surname' => request('surname'),
                'email' => request('email'),
                'telephone' => request('telephone'),
                'message' => request('message'),
                'visible' => 1,
                'active' => 1,
        ]);
            
        $view = View::make('front.pages.contact.index')->renderSections();    

        return response()->json([
            'content' => $view['content'],
        ]);
    }
}