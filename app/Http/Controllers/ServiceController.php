<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Redirect;
use Illuminate\Support\Facades\Input;
use Validator;
use Illuminate\Support\Facades\Auth;
use App\Subjek;
use App\Analisa;
use App\Kondisi;
use App\SmartMessage;
class ServiceController extends Controller
{
 public function show_view()
 {
 	$query=Subjek::all();
		$data= ['query' => $query];
		$data['user'] = Auth::user();
 	return view('service2',$data);
 }   
 public function listAnalisaKesehatan()
 {
	 $query=Analisa::all();
	 for ($i=0; $i < sizeof($query) ; $i++) { 
		$subjek_1=Subjek::where('id','=',$query[$i]->subjek_1)->get();
		$subjek_2=Subjek::where('id','=',$query[$i]->subjek_2)->get();
		$subjek_3=Subjek::where('id','=',$query[$i]->subjek_3)->get();
		$kondisi=Kondisi::where('id','=',$query[$i]->id_kondisi)->get();
		$pesan=SmartMessage::where('id','=',$query[$i]->kode_pesan)->get();

		$query[$i]->subjek_1_isi=$subjek_1[0]->Name;
		$query[$i]->subjek_2_isi=$subjek_2[0]->Name;
		$query[$i]->subjek_3_isi=$subjek_3[0]->Name;
		$query[$i]->kondisi_isi=$kondisi[0]->deskripsi;
		$query[$i]->pesan_isi=$pesan[0]->message;
	 }
	 return $query;
 }
}
