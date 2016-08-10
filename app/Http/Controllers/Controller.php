<?php

namespace App\Http\Controllers;

use App\Models\Menu;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesResources;

class Controller extends BaseController
{
    use AuthorizesRequests, AuthorizesResources, DispatchesJobs, ValidatesRequests;

    protected $data = [];
    public function __construct(Menu $menu){
        $contact = file_get_contents(storage_path() . '/administrator_settings/contact.json');
        $data = file_get_contents(storage_path() . '/administrator_settings/images.json');
        $resContact = json_decode($contact);
        $this->data['contact'] = $resContact;
        $this->data['data'] = json_decode($data);
        $this->data['menu'] = $menu->getMenu();
    }
        
}
