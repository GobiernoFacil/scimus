<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ReportAnswerInfo extends Model
{
    //
    public $table ="report_answer_info";

    protected $fillable = [
      'report_info_id' ,'user_id', 'contact_name', 'contact_phone','contact_email','state','city','town'
    ];

    function answers(){
      return $this->hasMany("App\Models\ReportAnswer",'report_answer_info_id');
    }
}
