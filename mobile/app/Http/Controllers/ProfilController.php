<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests;


class ProfilController extends Controller
{
    public function reset_password(){
		$data['user'] = Auth::user();
		return view("reset", $data);
	}

	public function show_view(){
		$data['user'] = Auth::user();
		return view("profil", $data);
	}
	public function edit_show_view(){
		$data['user'] = Auth::user();
		return view("editprof", $data);
	}
}
