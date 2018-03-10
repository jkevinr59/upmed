<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Hash;

class HomeController extends Controller {

	public function __construct() {
		//$this->middleware('auth');
	}

	public function index() {
		Auth::logout();
		return view('login');
	}
	public function login(Request $authreq){
		$user = $authreq->input('username');
		$password = $authreq->input('password');
		$query = User::where('username', $user)->first();
		$hashedpassword = $query->password;
		$userid= $query->id;
		if (Hash::check($password, $hashedpassword)) {
			Auth::loginUsingId($userid,true);
			$data['user'] = Auth::user();
			return view('menu2',$data);
		} else {
			return view('login');
		}
		
	}
	public function home(){
		$data['user'] = Auth::user();
		return view('menu2',$data);
	}
	public function authenticate(Request $authreq) {
		$user = $authreq->input('user');
		$password = $authreq->input('password');
		$query = User::where('username', $user)->first();
		$hashedpassword = $query->password;
		$userid= $query->id;
		if (Hash::check($password, $hashedpassword)) {
			Auth::loginUsingId($userid,true);
			return response()->json(['success' => '0']);
		} else {
			return response()->json(['success' => '1']);
		}
	}
	public function validate_user(Request $request) {

		$user_name = $request->input('name');
		$dbq = User::where('username', $user_name)->count();
		if ($dbq > 0) {
			return response()->json(['success' => '0']);
		}
		return response()->json(['success' => '1']);
	}
	public function logout(){
		Auth::logout();
		return view('login');
	}
}
