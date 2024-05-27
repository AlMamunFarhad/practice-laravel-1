<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class ModelComponent extends Component
{
    /**
     * Create a new component instance.
     */






//    public $modalContent = null,

//    public $color = null,
    public function __construct(

       public $modalType = null,
       public $buttonColor = null,
       public $modalColor = null,
       public $modalTextColor = null,
       public $modalTitle = null,
       public $modalBtnColor = null,


    ){}

//public function __construct(
//    public $color1 = null,
//    public $color2 = null,
//    public $color3 = null,
//    public $colo4 = null,
//    public $colo5 = null
//){}
    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
//        return view('components.model-component');

      return function (array $data){
          dd($data);
      };
    }
}
