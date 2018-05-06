<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Input;
use Validator;
use Illuminate\Support\Facades\Auth;
use App\Subjek;
use App\Rekor_medis;
use App\Relasi_Subjek;

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
	public function initialTrack(){
		$user = Auth::user();
		$subject = Subjek::all();
		$data['user'] = $user;

		$upperDate = strtotime('next month');
		$lowerDate = strtotime('last month');
		$selectedSubjectRange=array();
		$numericRange = array();
		$recordPrev = Rekor_medis::where('user',$user['id'])->whereMonth('Datetime','=',date('m',$lowerDate))->whereYear('Datetime','=',date('Y',$lowerDate))->orderBy('Datetime')->get();
		$recordCurrent = Rekor_medis::where('user',$user['id'])->whereMonth('Datetime','=',date('m'))->whereYear('Datetime','=',date('Y'))->orderBy('Datetime')->get();
		$recordNext = Rekor_medis::where('user',$user['id'])->whereMonth('Datetime','=',date('m',$upperDate))->whereYear('Datetime','=',date('Y',$upperDate))->orderBy('Datetime')->get();
		$data['recordCurrent'] = $recordCurrent;
		$data['recordNext'] = $recordNext;
		$data['recordPrev'] = $recordPrev;
		$data['date'] = date('"Y-m-d"');
		$data['selectedSubjectID'] = 0;
		$data['subject'] = $subject;
		$data['lastMonth'] = date('m',$lowerDate);
		$data['currentMonth'] = date('m');
		$data['nextMonth'] = date('m',$upperDate);
		$data['timelineTitle'] = "Timeline";
		return view("trackview", $data);
	}
	public function filterTrack(Request $filter)
	{
		$user = Auth::user();
		$subject = Subjek::all();
		$filterDate = $filter->input('tanggal');
		$filterSubject = $filter->input('keluhan');
		$data['user'] = $user;
		$data['selectedSubjectID'] = $filterSubject;
		$rawFilterDate = strtotime($filterDate);
		$upperDate = strtotime('next month',$rawFilterDate);
		$lowerDate = strtotime('last month',$rawFilterDate);
		if($filterSubject != 0)
		{
			$sql=Relasi_Subjek::select('id_relasi')->where('id_subjek',$filterSubject)->get();
			$relasi=array();
			for($i=0;$i<sizeof($sql);$i++){
				$relasi[$i] = $sql[$i]->id_relasi;
			}
			$relasi[sizeof($sql)]=$filterSubject;
		
			$recordPrev = Rekor_medis::where('user',$user['id'])->whereIn('Subject',$relasi)->whereMonth('Datetime','=',date('m',$lowerDate))->whereYear('Datetime','=',date('Y',$lowerDate))->orderBy('Datetime')->get();
			$recordCurrent = Rekor_medis::where('user',$user['id'])->whereIn('Subject',$relasi)->whereMonth('Datetime','=',date('m',$rawFilterDate))->whereYear('Datetime','=',date('Y',$rawFilterDate))->orderBy('Datetime')->get();
			$recordNext = Rekor_medis::where('user',$user['id'])->whereIn('Subject',$relasi)->whereMonth('Datetime','=',date('m',$upperDate))->whereYear('Datetime','=',date('Y',$upperDate))->orderBy('Datetime')->get();
		}
		else
		{
			$recordPrev = Rekor_medis::where('user',$user['id'])->whereMonth('Datetime','=',date('m',$lowerDate))->whereYear('Datetime','=',date('Y',$lowerDate))->orderBy('Datetime')->get();
			$recordCurrent = Rekor_medis::where('user',$user['id'])->whereMonth('Datetime','=',date('m',$rawFilterDate))->whereYear('Datetime','=',date('Y',$rawFilterDate))->orderBy('Datetime')->get();
			$recordNext = Rekor_medis::where('user',$user['id'])->whereMonth('Datetime','=',date('m',$upperDate))->whereYear('Datetime','=',date('Y',$upperDate))->orderBy('Datetime')->get();
		}
		$data['recordCurrent'] = $recordCurrent;
		$data['recordNext'] = $recordNext;
		$data['recordPrev'] = $recordPrev;
		$data['subject'] = $subject;
		$data['date'] = $filterDate;
		$data['lastMonth'] = date('m',$lowerDate);
		$data['currentMonth'] = date('m',$rawFilterDate);
		$data['nextMonth'] = date('m',$upperDate);
		$data['timelineTitle'] = "Timeline tanggal ".date('d F Y',$rawFilterDate);
		return view("trackview", $data);
	}
	public function getDetail(Request $req)
	{
		$selectID = $req ->input('id');
		$sql = Rekor_medis::where('record_id',$selectID)->first();
		$data['description'] =  $sql['Description_value'];
		$data['title'] = $sql['Title'];
		$rawDate=strtotime($sql['Datetime']);
		$data['day'] = date('d',$rawDate);
		$data['month'] = strtoupper(date('M',$rawDate));
		$subjectID = $sql['Subject'];
		$sql2 = Subjek::select('Name')->where('id',$subjectID)->first();
		$data['subject'] = $sql2['Name'];
		return response()->json($data);
	}
	public function getRecommendation(Request $req)
	{
		$selectID = $req ->input('id');
	}
}