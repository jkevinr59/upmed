<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Input;
use Validator;
use Illuminate\Support\Facades\Auth;
use App\Subjek;
use App\Rekor_medis;

class TrackController extends Controller
{
	public function init_track(){
		$query=Subjek::all();
		return view("init_track", ['query' => $query]);
	}
	public function single_track($id,$id1,$id2){
		$tanggal=$id2."-".$id1."-"."1";
		$tanggal2=$id2."-".$id1."-"."30";
        $data['subjek']=Subjek::all();
        $subject_target = Subjek::where('id',$id)->first();
        $data['name']=$subject_target->Name;
        $data['record'] = Rekor_medis::whereBetween('Datetime', array($tanggal, $tanggal2))->where('Subject', '=', $id)->where('User', '=', Auth::user()->id)->get();
        if($subject_target->Type==0)
		return view("old/track0",$data);
		else if($subject_target->Type==1)
		return view("old/track1",$data);
		/*$query=Subjek::whereBetween('Datetime', array($tanggal, $tanggal2))->where('Subject', '=', $id)->get();
		if($query->Type==0){
		return view("track0", ['query' => $query]);
		}
		if($query->Type==1){
		return view("track1", ['query' => $query]);
		}*/
	}
	public function new_track(){
		$data['user'] = Auth::user();
		return view("trackview", $data);
	}
}