<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Redirect;
use Illuminate\Support\Facades\Input;
use Validator;
use Illuminate\Support\Facades\Auth;
use App\Subjek;
class ServiceController extends Controller
{
 public function show_view()
 {
 	$query=Subjek::all();
		$data= ['query' => $query];
		$data['user'] = Auth::user();
 	return view('service2',$data);
 }   
}
