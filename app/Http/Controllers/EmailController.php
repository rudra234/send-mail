<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use App\Mail\SendEmail;
class EmailController extends Controller
{
    public function email(){
      Mail::to(['bibektimalsina099@gmail.com'])->send(new SendEmail);
     }

}
