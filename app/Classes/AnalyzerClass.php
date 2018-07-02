<?php
/*

    Class: Analyzer
    Description : To Analyze Medical Record with the given Rule
    Note: Please Refer on condition to Analisa_Kesehatan table on database
    Parameter: 
    @user = user id - Integer
    @subject = subject id - Integer
    @date = to set the date where the class should analyze, default set is the current date
*/

namespace App\Classes;

use App\Rekor_medis;
use App\Relasi_Subjek;
use App\Analisa;
use App\SmartMessage;
use App\Kondisi;

class AnalyzerClass{
    public function __construct() {
		
    }
    public function doAnalyze($user,$subject,$date = null ){
        if ($date == null)
        $date = date("Y-m-d");
        else
        $date = date("Y-m-d",strtotime($date));
        $medicRecord = Rekor_medis::where('user',$user)->get();
        $conditionList = Analisa::where('subjek_1',$subject)->get();
        $arrayMessage = array();
        foreach($conditionList as $rule){
            $condition = $rule->id_kondisi;
            switch($condition){
                case 0:
                    $message = $this->getMessage($rule->kode_pesan);
                    array_push($arrayMessage,$message);
                    break;
                case 1:
                    $dateOccured = $this->isFollowedBy($rule->subjek_1,$rule->subjek_2,$date);
                    array_push($arrayMessage,$dateOccured);
                    break;
                default:
                    continue;
            }

        }
        return $arrayMessage;
         
    }
    public function getMessage($messageCode){
        $query = SmartMessage::where('kode_pesan',$messageCode)->first();
        return $query->message;
    }
    public function isFollowedBy($subject1,$subject2,$date){
        $query = Rekor_medis::select('subject','datetime')->where('subject',$subject1)->get();
        foreach($query as $row)
        {
            $s1Date = $row->datetime;
            $subject2Count = Rekor_medis::where('subject',$subject2)->where('datetime','>=',$s1Date)->count();
            if($subject2Count != 0){
                return $date;
            }
            
        }
        return null;
    }
    public function isMoreThan($subjectId,$value,$date){

    }
    public function isLessThan($subjectId,$value,$date){

    }
    public function isLossWeight($date){

    }
    public function isFrequent($subject1,$date){

    }
    public function isConsuming($name,$date){

    }
    public function isWithout($subject1,$subject2,$date){

    }
    public function isWithin($subject1,$subject2,$date){

    }
    public function isBefore($subject,$date){

    }
    public function isAfter($subject,$date){

    }
}
?>