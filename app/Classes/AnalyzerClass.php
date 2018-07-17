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
use Carbon\Carbon;

class AnalyzerClass{
    private $user;
    private $subject;
    private $date;
    public $message;
    private $dateRange = 20;

    public function __construct($user,$subject,$date) {
        $this->user = $user;
        $this->subject = $subject;
        $this->date = $date;
        $message = array();
    }
    public function doAnalyze(){
        $date = (is_null($this->date))? Carbon::now():new Carbon($this->date);
        $conditionList = Analisa::where('subjek_1',$this->subject)->get();
        foreach($conditionList as $rule){
            $condition = $rule->id_kondisi;
            switch($condition){
                case 0:
                    $message = $this->getMessage($rule->kode_pesan);
                    array_push($this->message,$message);
                    break;
                case 1:
                    $dateOccured = $this->isFollowedBy($rule->subjek_1,$rule->subjek_2);
                    $message = (isset($dateOccured))?$this->getMessage($rule->kode_pesan):null;
                    array_push($this->message,$dateOccured);
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
    public function isFollowedBy($subject1,$subject2){
        $query = Rekor_medis::select('subject','datetime')->where('subject',$subject1)->get();
        $date = new Carbon($this->date);
        $dateUpper = $date->addDays($this->dateRange)->toDateString();
        $dateLower = $date->subDays($this->dateRange*2)->toDateString();

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