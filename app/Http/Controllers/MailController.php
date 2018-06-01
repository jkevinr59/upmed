<?php

namespace App\Http\Controllers;



use App\User;
use App\Pesan;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Hash;
use Redirect;


class MailController extends Controller
{
    public function newMail()
    {
    	$data['user'] = Auth::user();
    	return view("newmail",$data);
    }

    public function saveMail(Request $request)
    {
    	
    		$user = Auth::user();

    		$mail = new Pesan;
    		$mail->Title = $request->title;
    		$mail->Message = nl2br($request->Content);
    		$mail->User = '50';
    		$mail->Recipient = '0';
    		$mail->Status = '0';
    		$mail->save();

    	

    	$data['user'] = Auth::user();
		return view('newmail',$data);
    }

    public function inbox()
    {
		$data['user'] = Auth::user();
		$userId = $data['user']['id']; 
		$data['mail'] = Pesan::where('recipient',$userId)->get();
        return view("inbox",$data);
    }
}
