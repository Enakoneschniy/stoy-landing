<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;
use App\Http\Requests;

class ServicesController extends Controller
{
    public function getServices(Service $service)
    {
        $this->data['services'] = $service->getActiveServices();
        return view('services.services', $this->data);
    }
}
