<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Case_Report extends Model
{
    use HasFactory;

    protected $primaryKey = 'id';
    protected $fillable =
    [
        'user_id',
        'victim_name',
        'grade_section',
        'sex',
        'date_reported',
        //respondent
        'resp_name',
        'resp_grade_section',
        'resp_sex',
        'nature_of_complaint',
        'actions_taken',
        'recommendations'


    ];

    protected $table = "case_reports";


    protected $casts = [
        'created_at' => 'datetime',
        'date_reported' => 'date:hh:mm',
        
    ];


    public function student() {
        return $this->belongsTo('App\Models\Student');

    }
    
}
