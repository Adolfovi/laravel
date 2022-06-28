<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Facades\View;
use App\Http\Controllers\Controller;
use App\Models\User;
use App\Http\Requests\Admin\UserRequest;
use Debugbar;



class VentaController extends Controller {



public function __construct(){

}








public function index(){
    return view('admin.pages.ventas.index');
}

public function show(){}

public function create(){}

public function edit(){}

public function destroy(){}

public function store(){}



}