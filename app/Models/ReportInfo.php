<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ReportInfo extends Model
{
    //

    public $table ="report_info";

    protected $fillable = [
        'user_id', 'type', 'title','description'
    ];

    function questions(){
      return $this->hasMany("App\Models\ReportQuestion",'report_info_id');
    }
}
