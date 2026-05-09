<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Layout extends Component
{
    public string $title;

    public function __construct(string $title = "") //ditambah isi $title(diambil dari layout blade)
    {
        $this->title = $title;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.layout',
        [
            'title' => $this->title
        ]);
    }
}
