<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Mail\Message;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    //
    public function send(Request $request) {

    	$name = $request->input('name');
    	$phone = $request->input('phone');
    	$email = $request->input('email');
    	$subject = $request->input('subject');
    	$msg = $request->input('message');
 


    	Mail::send('email.welcome', ['name' => $name, 'email' => $email, 'msg' => $msg, 'phone' => $phone, 'subject' => $subject], 
    		function (Message $message) use ($name, $email, $subject) {
		$message->to(config('config.email'), config('config.email'))
				->from($email, $name)
				->subject($subject);
	});


    	return (config('config.url'));
    }
}
