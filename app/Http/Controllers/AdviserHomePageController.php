<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use App\Models\User;

class AdviserHomePageController extends Controller
{
    public function index(Request $request)
    {

        $user = DB::table('users')->whereNotNull('approved_at')->count();   
        $admin = DB::table('users')->where('admin', '1')->count();

        $student11 = DB::table('students')->where('year_section' ,'LIKE', '%Grade 11%')->count();
        $student12 = DB::table('students')->where('year_section' ,'LIKE', '%Grade 12%')->count();

        $adviser = User::whereNotNull('approved_at')->get()->sortBy('advisory');  
        $adviser = User::where([
                ['approved_at', '!=', Null],
                [function($query) use ($request){
                    if(($adviser = $request->adviser)){
                        $query->orWhere('name', 'LIKE', '%'. $adviser . '%')
                        ->orWhere('advisory', 'LIKE', '%'. $adviser . '%')->get();
                    }
                }]
            ])
        
            ->orderBy("advisory","asc")
            ->paginate(6);  

        return view('adviserpage.adviser.homepage', compact('user', 'admin', 'student11', 'student12'),
        ['adviser' => $adviser])->with('i',(request()->input('page',1)-1)*5);


    }

    public function __construct()
    {
        $this->middleware(['auth', 'verified']);
    }

    public function approval()
{
    return view('approval');
}

}