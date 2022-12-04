<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Exit_Interview_Form extends Model
{
    use HasFactory;

    protected $primaryKey = 'id';
    protected $fillable =
    [
        'user_id',
        'name',
        'date',
        'school_year',
        'year_section',
        'reasons_for_leaving',
        'others',
        'reasons_for_transfer',
        'date_2',
    ];

    protected $table = "exit_forms";


    protected $casts = [
        'created_at' => 'datetime',
        'date' => 'date',
        'date_2' => 'date',
     
        
    ];


    public function student() {
        return $this->belongsTo('App\Models\Student');

    }
    
}
