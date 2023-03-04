<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Student;
use App\Models\Meeting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Mail;
use App\Http\Controllers\Notifications;
use App\Notifications\EmailNotification;
use Notification;
use DB;
use PDF;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\AdvisersExport;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware(['auth', 'verified']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {     
        $meetings = DB::table('meetings')->get();
        $user = DB::table('users')->whereNotNull('approved_at')->count();   
        $admin = DB::table('users')->where('admin', '1')->count();
        $student11 = DB::table('students')->where('year_section' ,'LIKE', '%Grade 11%')->count();
        $student12 = DB::table('students')->where('year_section' ,'LIKE', '%Grade 12%')->count();
        $case_reports = DB::table('case_reports')->count();
        $exit_forms = DB::table('exit_forms')->count();



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

        return view('home', compact('meetings', 'admin', 'student11', 'user', 'adviser', 'student12', 'case_reports', 'exit_forms'),
        ['adviser' => $adviser])->with('i',(request()->input('page',1)-1)*5);
    }

    public function approval()
    {
    return view('approval');
    }


     public function destroy($id){

        $meetings = Meeting::find($id);
        $meetings->delete();
        return redirect()->back()->with('status', 'Scheduled Meeting Removed Successfully!');
     }

     public function edit($id){
        $adviser = User::find($id);
        return view('admin.adviser.edit', compact('adviser'));
    }


    public function update(Request $request, $id){

        $adviser = User::find($id);
        $adviser->contact_no = $request->input('contact_no');
        $adviser->name = $request->input('name');
        $adviser->adviser_id = $request->input('adviser_id');
        $adviser->advisory = $request->input('advisory');
        $adviser->email = $request->input('email');
        $adviser->admin = $request->input('admin');
     
       
        if($request->hasFile('avatar')){
    
          $destination = 'images/avatars/'.$adviser->avatar;
          $file = $request->file('avatar');
          $extention = $file->getClientOriginalExtension();
          $filename = time().'.'. $extention;
          $file->move('images/avatars/', $filename);
          $adviser->avatar = $filename;
        
        }
    
        $adviser->update();
        return redirect()->back()->with('status', 'Adviser Updated Successfully!');
      
     }

     public function delete($id){
        $adviser = User::find($id);
        $destination = 'images/avatars/'.$adviser->avatar;
        $adviser->delete();
        return redirect()->back()->with('status', 'Adviser Removed Successfully!');
    
        }

        public function export_advisers_pdf(){
            $adviser = User::whereNotNull('approved_at')->get();
            $pdf = PDF::loadVIew('pdf.users', [
                'users' => $adviser
            ]);
            return $pdf->download('PNHS SHS Advisers.pdf');
        }
        
        public function export_advisers_excel(){
             $adviser = User::whereNotNull('approved_at')->get();
             return Excel::download(new AdvisersExport($adviser),'PNHS SHS Advisers.xlsx');
        }
    
}
   

