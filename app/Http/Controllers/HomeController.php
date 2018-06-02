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
		return view('home.login');
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
			//return view('menu2',$data);
			return Redirect::to('/home');
		} else {
			//return view('login');
			return Redirect::back();
		}
		
	}
	public function home(){
		$data['user'] = Auth::user();
		return view('home.menu',$data);
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
		return view('home.login');
	}
	public function Register(Request $request) {

		$username = $request->input('username');
		$email = $request->input('email');
		//return Redirect::to('/')->with('status',$username);
		//$ada=DB::table('users')->where('username','=',$request->input('username'))->get();
		$ada=DB::table('users')->where('username','=',$username)->get();
		//var_dump($ada);
		if(sizeof($ada)>0)
		{
			return Redirect::to('/')->with('status','username yang anda isi sudah terpakai, mohon gunakan username lain');
		}
		else{
			$user=User::create([
				'name'=>$request->input('username'),
				'password'=>bcrypt('1234'),
				'username'=>$username,
				'email'=>$email,
			]);
			Auth::loginUsingId($user->id);
			return Redirect::to('/home')->with('status', 'anda berhasil mendaftar, anda terdaftar dengan username: '.$username.', dan password: 1234');
		}
		

		
		/*$user_name = $request->input('name');
		$dbq = User::where('username', $user_name)->count();
		if ($dbq > 0) {
			return response()->json(['success' => '0']);
		}
		return response()->json(['success' => '1']);*/
	}
	public function adminLogin(Request $authreq)
	{
		$user = $authreq->input('user');
		$pw = $authreq->input('password');
		$sql = User::where('username',$user)->first();
		$query = User::where('username', $user)->first();
		$hashedpassword = $query->password;
		$userid= $query->id;
		if (Hash::check($password, $hashedpassword)) {
			$state = 0; //trueLogin
			$role = $query->role;
		}
		else{
			$state = 1;
			$role = 0;
		}
		return response()->json(['state' => $state,'role' =>$role]);
	}
}
