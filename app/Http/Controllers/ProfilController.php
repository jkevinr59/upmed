<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests;
use Redirect;
use Hash;
use Input;
use Validator;
use DB;


class ProfilController extends Controller
{
    public function reset_password(Request $request){
		if ($request->isMethod('get')){
			$data['user'] = Auth::user();
			return view("reset", $data);
		}
		else{
			
			// $rules = array(
			// 	'oldpassword' => 'required',
	  //           'newpassword' => 'required|string|min:3|confirmed',
	  //          // 'confirmpassword'=>'required|same:newpassword'
			// );
			// $validation = Validator::make(Input::all(), $rules);
   //          if ($validation->fails()){
   //              return Redirect::back()->withErrors($validation)->withInput();
   //          }
   //          else{
            	if (!(Hash::check($request->get('oldpassword'), Auth::user()->password))) {
                //Alert::error('Password anda salah!','Salah')->persistent('tutup');
	            return redirect()->back()->with('status','Password anda salah!');
	        	}
	        	else{
	        		if(strcmp($request->get('oldpassword'),$request->get('newpassword'))== 0){
	                    //Alert::error('Password Baru tidak boleh sama dengan password Lama!','Salah')->persistent('tutup');
	            	return redirect()->back()->with('status','Password Baru tidak boleh sama dengan password Lama!');
	        		}
	        		else{
				        echo $request->oldpassword."<br/>";
						echo $request->newpassword."<br/>";
						echo $request->confirmpassword."<br/>";
				        
				         DB::table('users')->where('id', '=', Auth::user()->id)
				        ->update(array('password' => bcrypt($request->get('newpassword'))));
				       //  // $user = Auth::user();
				       //  // $user->password = bcrypt($request->get('newpassword'));
				       //  // $user->save();
				       //  //Alert::success('Password telah diganti!','Sukses')->persistent('tutup');
				       // // return redirect()->back();
				         return Redirect::back()->with('status', 'anda berhasil mengubah password');
	    			}

	        	}

            //}
			
	        
	        
		}


	

		
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
