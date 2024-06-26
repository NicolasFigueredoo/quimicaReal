<?php

namespace App\View\Components;

use App\Models\Contacto;
use App\Models\Logo;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Navbar extends Component
{
    /**
     * Create a new component instance.
     */


    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        $logo = Logo::all();
        return view('components.navbar', ['logo' => $logo]);
    }
}
