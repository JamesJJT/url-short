<?php

namespace App\View\Components;

use Illuminate\View\Component;
use Illuminate\View\View;

/** @codeCoverageIgnore */
class GuestLayout extends Component
{
    /**
     * Get the view / contents that represents the component.
     */
    public function render(): View
    {
        /** @phpstan-ignore return.type*/
        return view('layouts.guest');
    }
}
