<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ErrorController extends Controller
{
	public function index(){
		return view('error');
	}

    public function pilih($nama){
		if($nama == "codeigniter"){
			return abort(403,'Anda tidak punya akses karena anda beda framework');
		}elseif($nama == "bugs"){
			return abort(500);
		}else{
			return abort(404);
        }
    }
}
