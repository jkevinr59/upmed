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
			$recipient = User::where('name',$request->recipient)->first();
    		$mail = new Pesan;
    		$mail->Title = $request->title;
    		$mail->Message = nl2br($request->Content);
    		$mail->User = $user['id'];
    		$mail->Recipient = $recipient['id'];
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
		$count=1;
		foreach($data['mail'] as $mail){
			$from = User::where('id',$mail->user)->first();
			$mail['from_name'] = $from->name;
			$mail['#'] = $count;
			$count++;
		} 
        return view("inbox",$data);
    }
}
