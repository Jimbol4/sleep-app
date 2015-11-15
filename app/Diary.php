<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Diary extends Model
{
    
    protected $fillable = [
        'date', 'time_to_bed', 'time_asleep', 'time_awake',
        'times_awake', 'awake_duration', 'sleep_length', 'medication',
        'well_rested', 'quality'
    ];
    
    protected $table = 'diary';
    protected $dates = ['date'];
    
    public function setDateAttribute($date) {
            $this->attributes['date'] = Carbon::createFromFormat('m/d/Y', $date);
        }
        
    public function getDateAttribute($date) {
       return new Carbon($date); 
    }
}
