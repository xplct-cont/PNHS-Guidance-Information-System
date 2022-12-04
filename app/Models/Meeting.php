<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Meeting extends Model
{
    use HasFactory, Notifiable;

    protected $fillable = [
        'user_id', 'title_of_the_meeting', 'location_of_the_meeting', 'meeting_date_time'
    ];


    protected $table = "meetings";


    protected $casts = [
        'created_at' => 'datetime',
        'meeting_date_time' => 'date:hh:mm',
        
    ];


    public function user() {
        return $this->belongsTo('App\Models\User');

    }
}
