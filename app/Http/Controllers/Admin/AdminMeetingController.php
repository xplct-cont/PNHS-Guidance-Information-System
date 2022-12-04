<?php

namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Meeting;
use DB;

class AdminMeetingController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function store(Request $request) {
        $request->validate([
  
        'title_of_the_meeting' => 'required|string',
        'location_of_the_meeting' => 'required|string',
        'meeting_date_time' => 'required',
       
        ]);
  
        $meeting = Meeting::create([
                   
            'user_id' => auth()->user()->id,
            'title_of_the_meeting' => $request->title_of_the_meeting,
            'location_of_the_meeting' => $request->location_of_the_meeting,
            'meeting_date_time' => $request->meeting_date_time,
           
        ]);
        return redirect()->back()->with('status','Added New Scheduled Meeting!');
    }
  
         
}