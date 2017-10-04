<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ReportAnswer extends Model
{
    //
      public $table ="report_answers";

      protected $fillable = [
        'report_answer_info_id' ,'report_question_id','user_id', 'answer',
      ];

      function report(){
        return $this->belongsTo("App\Models\ReportAnswerInfo");
      }

}
