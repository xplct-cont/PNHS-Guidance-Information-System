<?php

namespace App\Http\Controllers\Admin\Student;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Student;
use App\Models\Anecdotal_Record;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;
use App\Rules\MatchOldPassword;
use Flash;
use Response;
use PDF;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\AdvStudentExport;
use DB;
use Illuminate\Support\Facades\Mail;

class AdvisoryStudentController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request, $id){

    // $wisdomStudents = Student::where('year_section', 'Grade 11 - Wisdom')->get();
    $advstudent = Student::with(['user'])->where('user_id', '=', $id)->count();
    $adviser = User::find($id);
    $advStudents = Student::with(['user'])->where([
        ['user_id', '=', $id],
        [function($query) use ($request){
            if(($adv = $request->adv)){
                $query->orWhere('lastname', 'LIKE', '%'. $adv . '%')
                ->orWhere('firstname', 'LIKE', '%'. $adv . '%')
                ->orWhere('middlename', 'LIKE', '%'. $adv . '%')
                ->orWhere('school_id', 'LIKE', '%'. $adv . '%')->get();

                
            }
        }]
    ])

    ->orderBy("lastname","asc")
    ->paginate(15);


       return view('admin.student.Students.index',compact('advStudents', 'advstudent','adviser'),['advStudents'=>$advStudents])
       ->with('i',(request()->input('page',1)-1)*5);
    }


    public function edit(User $id,$student){
        $advisoryStud = Student::find($student);
        return view('admin.student.Students.edit', compact('advisoryStud'));
    }

    public function create($id) {
        
        $adviser = User::find($id);
        $Adviser = DB::table('users')->where('id','=', $id)->get();
        return view('admin.student.Students.create', compact('Adviser','adviser'));
       
    }

    public function store(Request $request) {
        $request->validate([
            'user_id' => 'required',
            'school_id' => 'required',
            'firstname' => 'string|required',
            'lastname' => 'string|required',
            'middlename' => 'string|required',
            'gender' => 'string|required',
            'age' => 'string|required',
            'year_section' => 'string|required',
            'email' => 'email|required',
            'parent_name' => 'string|required',
            'parent_email' => 'nullable|email',
            'parent_num' => 'required|digits:11',
            'address' => 'string|required',
            'school_year' => 'string|required',
        ]);

        $wisdomStudents = Student::create([
            'user_id' => $request->user_id,
            'school_id' => $request->school_id,
            'firstname' => $request->firstname,
            'lastname' => $request->lastname,
            'middlename' => $request->middlename,
            'gender' => $request->gender,
            'age' => $request->age,
            'year_section' => $request->year_section,
            'email' => $request->email,
            'parent_name' => $request->parent_name,
            'parent_email' => $request->parent_email,
            'parent_num' => $request->parent_num,
            'address' => $request->address,
            'school_year' => $request->school_year,
        ]);

        return redirect()->back()->with('status','Added New Student!');
    }


    public function update(Request $request, $id){
        $wisdomStudents = Student::find($id);
        $wisdomStudents->user_id = $request->input('user_id');
        $wisdomStudents->school_id = $request->input('school_id');
        $wisdomStudents->lastname = $request->input('lastname');
        $wisdomStudents->firstname = $request->input('firstname');
        $wisdomStudents->middlename = $request->input('middlename');
        $wisdomStudents->year_section = $request->input('year_section');
        $wisdomStudents->gender = $request->input('gender');
        $wisdomStudents->age = $request->input('age');
        $wisdomStudents->email = $request->input('email');
        $wisdomStudents->address = $request->input('address');
        $wisdomStudents->parent_name = $request->input('parent_name');
        $wisdomStudents->parent_email = $request->input('parent_email');
        $wisdomStudents->parent_num = $request->input('parent_num');
        $wisdomStudents->school_year = $request->input('school_year');

    
        $wisdomStudents->update();
        return redirect()->back()->with('status', 'Student Updated Successfully!');
    }
    

    public function export_advStudents_pdf($id){
        $advStudents = Student::with(['user'])->where('user_id', '=', $id)->orderBy('lastname', 'asc')->get();
        $pdf = PDF::loadVIew('pdf.adv-students', [
            'students' => $advStudents
        ]);
        return $pdf->download('List of Students.pdf');
    }
    
    public function export_advStudents_excel($id){
         $advStudents = Student::with(['user'])->where('user_id', '=', $id)->orderBy('lastname', 'asc')->get();
         return Excel::download(new AdvStudentExport($advStudents),'List of Students.xlsx');
    }

    public function multipleDelete(Request $request) 
    {

        $ids = $request->ids;
        Student::whereIn('id', $ids)->delete();
        return redirect()->back()->with('status', 'Students Deleted Successfully!');
    }

    public function showStudentRecord(User $id, $student){
        $wisdomStud = Student::find($student);

       if (empty($wisdomStud)) {
           Flash::error('Student not found');

           return redirect()->back();
       }

       return view('admin.student.Students.show')->with('wisdomStud', $wisdomStud);
    }


    public function sendEmailStudent(Request $request){
        $request->validate([
            'email' => 'required|email',
            'subject' => 'required|string',
            'content' => 'required|string'
        ]);


            Mail::send('admin.student.Students.Email.email', ['content' => $request->content, 'subject' => $request->subject], function($mails) use($request){
                $mails->to($request->email);
                $mails->subject($request->subject);
          
        });
        return redirect()->back()->with('status', 'Email sent successfully!');
}

}