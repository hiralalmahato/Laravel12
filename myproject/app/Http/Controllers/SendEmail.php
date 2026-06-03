<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SendEmail extends Controller
{
    //
    public function send(){
        $body = "This is a test mail sent from Laravel.";
        Mail::raw($body,function($message){
            $message->to('mahatoh360@gmail.com')
                    ->subject('Test Email');
        });
        return "Email Sent";
    }
}
