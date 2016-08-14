<?php

namespace App\Http\Controllers;

use App\Models\Callback;
use Illuminate\Support\Facades\Mail;
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
            $callback->active = 1;
            $callback->status = 'Активный';
            $callback->save();
            $arrCallback = $callback->toArray();
            Mail::send('emails.callback', $arrCallback, function($message) use ($arrCallback)
            {
                $message->from(env('MAIL_USERNAME'), 'Profteplostroy')
                    ->subject('Добавление новой заявки')
                    ->to(env('MAIL_USERNAME'));
            });
            return 'Add callback';
        } else {
            return 'Error!';
        }
    }
}
