<?php

namespace App\Http\Controllers;

use App\Models\Callback;
use Illuminate\Http\Request;

use App\Http\Requests;

class CallbackController extends Controller
{

    public function addCallback(Requests\CallbackRegisterRequest $request) {
        $callback = new Callback();
        if($request->name && $request->phone)
        {
            $callback->name = $request->name;
            $callback->phone = $request->phone;
            $callback->save();
            return 'Add callback';
        } else {
            return 'Error!';
        }
    }
}
