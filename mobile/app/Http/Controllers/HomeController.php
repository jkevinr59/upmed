<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Hash;
use DB;
use Redirect;
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
	public function Register(Request $request) {

		$username = $request->input('username')."_".date("Ymd");
		//return Redirect::to('/')->with('status',$username);
		//$ada=DB::table('users')->where('username','=',$request->input('username'))->get();
		$ada=DB::table('users')->where('username','=',$username)->get();
		//var_dump($ada);
		if(sizeof($ada)>0)
		{
			return Redirect::to('/')->with('status','username yang anda isi sudah terpakai, mohon gunakan username lain');
		}
		else{
			User::create([
				'name'=>$request->input('username'),
				'password'=>bcrypt('1234'),
				'username'=>$username,
			]);
			return Redirect::to('/')->with('status', 'anda berhasil mendaftar, anda terdaftar dengan username: '.$username.', dan password: 1234');
		}
		

		
		/*$user_name = $request->input('name');
		$dbq = User::where('username', $user_name)->count();
		if ($dbq > 0) {
			return response()->json(['success' => '0']);
		}
		return response()->json(['success' => '1']);*/
	}
	/*public function to_time()
	{
		echo date("Ymd");

	}*/
}