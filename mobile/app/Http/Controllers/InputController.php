<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Redirect;
use Illuminate\Support\Facades\Input;
use Validator;
use Illuminate\Support\Facades\Auth;
use App\Subjek;

class InputController extends Controller
{
	public function show_view(){
		$query=Subjek::all();
		$data= ['query' => $query];
		$data['user'] = Auth::user();
		return view("input", $data);
	}
	public function add_rekor_medis2(Request $req) {
	  if($req->isMethod('post'))
        {
            $data = Input::all();
            $rules = array(
            'title'=>'required',
            'description_input'=>'required',
            
            'inputdate'=>'required',
            
            );
            $validation = Validator::make(Input::all(), $rules);
            if ($validation->fails())
            {
                //alert()->error('Semua data harap diisi, password dan ketik ulang password juga harus sama isinya');
                return Redirect::back()->withErrors($validation)->withInput();
            }
            
            else
            {   

                $data = Input::all();
                $input = $req->all();
				$user = Auth::user();
				$subject=$req->Subject;
				//$subject = $authreq->;
				$description_value=$req->description_input;
				$datetime=$req->inputdate;
				$title=$req->title;
				
				$table= new \App\Rekor_medis;
				$table->User=$user->id;
				$table->Description_value=$description_value;
				$table->Datetime=$datetime;
				$table->Subject=$subject;
				$table->Title=$title;

				$table->save();
                $query=Subjek::all();
	        	return view("home", ['query' => $query]);
			}
		}
	}
}
