<?php

namespace App\Http\ViewComposers\Admin;

use Illuminate\View\View;
use App\Models\Tax;

class Taxes
{
    static $composed;

    public function __construct(Tax $taxes)
    {
        $this->taxes = $taxes;
    }

    public function compose(View $view)
    {

        if(static::$composed)
        {
            return $view->with('taxes', static::$composed);
        }

        static::$composed = $this->taxes->where('active', 1)->where('valid', 1)->orderBy('type', 'asc')->get();

        $view->with('taxes', static::$composed);

    }
}
