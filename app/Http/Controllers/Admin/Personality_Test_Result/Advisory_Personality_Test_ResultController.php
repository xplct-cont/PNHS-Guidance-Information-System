<?php

namespace App\Http\Controllers\Admin\Personality_Test_Result;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\User;
use App\Models\Anecdotal_Record;
use App\Models\Counseling_Anecdotal_Record;
use App\Models\Career_Interest_Test_Result;
use App\Models\Personality_Test_Result;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;
use App\Rules\MatchOldPassword;
use Response;
use DB;
use PDF;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\ParentExport;
use Image;
use Illuminate\Support\Facades\Storage;

class Advisory_Personality_Test_ResultController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index($id){
 
        $personality_test_result_wisdom = Personality_Test_Result::with(['student'])->where('student_id', '=', $id)->get();
        
  
        $student_wis = Student::find($id);
        return view('admin.student.Students.Personality_Test_Result.index', compact('personality_test_result_wisdom', 'student_wis'));
      }
  
      public function store(Request $request){
  
          $result = new Personality_Test_Result;
          $result->student_id = $request->input('student_id');
  
          if($request->hasFile('personality_result')){
              $file = $request->file('personality_result');
              $filename = time() . '.' . $file->getClientOriginalExtension();
              Image::make($file)->save(storage_path('/app/public/personality_test_result/' . $filename));
  
              $result->personality_result= $filename;
              $result->save();
  
          }
          return redirect()->back()->with('status', 'Added Successfully!');
  
      }
  
      public function destroy($id){
          $removeRec = Personality_Test_Result::findOrFail($id);
          $destination = 'storage/personality_test_result/'.$removeRec->personality_result;
          if(File::exists($destination)){
              File::delete($destination);
          }
          $removeRec -> delete();
          return redirect()->back()->with('status', 'Deleted Successfully!');   
        }
  
  
        public function downloadFile($id)
      {
          $advStudents_personality_test_result = Personality_Test_Result::findOrFail($id);
          $pdf = PDF::loadVIew('pdf.adv-personality_test_result', [
              'personality_test_results' => $advStudents_personality_test_result
          ]);
  
          return $pdf->download('Personality Test Result.pdf');
      }
}