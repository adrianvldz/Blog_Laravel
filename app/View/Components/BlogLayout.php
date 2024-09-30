<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class BlogLayout extends Component
{
    public function __construct(
        public $metaTitle = 'Default Title', 
        public $metaDescription = 'Default Description')
     {}

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('layouts.blog-layout');
    }
}
