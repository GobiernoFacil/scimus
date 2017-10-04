<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ReportQuestion extends Model
{
    //
    public $table ="report_questions";

    protected $fillable = [
        'report_info_id', 'question', 'type','observation'
    ];

    function report(){
      return $this->belongsTo("App\Models\ReportInfo");
    }
}
