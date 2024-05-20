<?php

namespace App\View\Components\Customers;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Update extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public $customer,
        public $packets
    )
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.customers.update');
    }
}
