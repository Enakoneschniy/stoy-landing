<?php

namespace App\Http\Controllers;

<<<<<<< HEAD
=======
use App\Models\Menu;
>>>>>>> 94f819ea38708615d86a2352363e3dd08d41bc7d
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesResources;

class Controller extends BaseController
{
    use AuthorizesRequests, AuthorizesResources, DispatchesJobs, ValidatesRequests;
<<<<<<< HEAD
=======
    protected $data = [];
    public function __construct(Menu $menu){
        $this->data['menu'] = $menu->getMenu();
    }

>>>>>>> 94f819ea38708615d86a2352363e3dd08d41bc7d
}
