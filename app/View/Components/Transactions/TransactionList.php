<?php

namespace App\View\Components\Transactions;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class TransactionList extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public $transactions,
    )
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components..customers.list');
    }
}
