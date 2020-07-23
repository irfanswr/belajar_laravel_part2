<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Mail\MailtrapEmail;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function index(){
 
		Mail::to("member@laravelku.com")->send(new MailtrapEmail());
 
		return "Email telah dikirim ke mailtrap.io";
 
	}
}
