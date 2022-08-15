<?php

namespace App\View\Components;

use Illuminate\View\Component;
use Illuminate\Support\Facades\DB;


class UserList extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */

    public $title ;
    public function __construct($title)
    {
       $this->title[] = [
        "name"=>"harry",
        'age'=>'21'
       ];
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        
        return view('components.user-list');
    }
}
