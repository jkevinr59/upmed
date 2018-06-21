<?php
namespace App\Classes;

use App\Rekor_medis;
use App\Relasi_Subjek;
use App\Analisa;
use App\SmartMessage;
use App\Kondisi;

class AnalyzerClass{
    public function __construct() {
		
    }
    public function doAnalyze($user,$subject){
        $medicRecord = Rekor_medis::where('user',$user)->get();
        $conditionList = Analisa::where('subjek_1',$subject)->get();
        foreach($conditionList as $rule){
            $condition = $rule->id_kondisi;
            switch($condition){
                case 0:
                    $this->getMessage($rule->kode_pesan);

                default:
                    continue;
            }

        }
        return $conditionList;
         
    }
    public function getMessage($messageCode){
        $query = SmartMessage::where('kode_pesan',$messageCode)->first();
        return $query;
    }
    public function isFollowedBy($subject1,$subject2){

    }
    public function isMoreThan($subjectId,$value){

    }
    public function isLessThan($subjectId,$value){

    }
    public function isLossWeight(){

    }
    public function isFrequent($subject1){

    }
    public function isConsuming($name){

    }
    public function isWithout($subject1,$subject2){

    }
    public function isWithin($subject1,$subject2){

    }
    public function isBefore($subject,$datestring){

    }
    public function isAfter($subject,$datestring){

    }
}
?>