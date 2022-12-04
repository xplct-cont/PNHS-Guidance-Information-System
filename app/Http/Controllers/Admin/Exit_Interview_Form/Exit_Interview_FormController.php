<?php

namespace App\Http\Controllers\Admin\Exit_Interview_Form;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Exit_Interview_Form;
use DB;
use PDF;

class Exit_Interview_FormController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request){

        $exit_forms = Exit_Interview_Form::where([
            ['created_at', '!=', null],
            [function($query) use ($request){
                if(($exit_forms = $request->exit_forms)){
                    $query->orWhere('name', 'LIKE', '%'. $exit_forms . '%')
                    ->orWhere('year_section', 'LIKE', '%'. $exit_forms . '%')->get();
    
                    
                }
            }]
        ])
        ->paginate(10);
    
           return view('admin.student.exit_interview_form.index' ,['exit_forms'=>$exit_forms])
           ->with('i',(request()->input('page',1)-1)*5);

    }

    public function store(Request $request){
  
        $exit_forms = new Exit_Interview_Form;
        $exit_forms->user_id = $request->input('user_id');
        $exit_forms->name = $request->input('name');
        $exit_forms->date = $request->input('date');
        $exit_forms->school_year = $request->input('school_year');
        $exit_forms->year_section = $request->input('year_section');
        $exit_forms->reasons_for_leaving = $request->input('reasons_for_leaving');
        $exit_forms->others = $request->input('others');
        $exit_forms->reasons_for_transfer = $request->input('reasons_for_transfer');
        $exit_forms->date_2 = $request->input('date_2');
        $exit_forms->save();

        return redirect()->back()->with('status', 'Created new form successfully!');

    }

  

    public function update(Request $request, $id){
  
        $exit_forms = Exit_Interview_Form::find($id);
        $exit_forms->user_id = $request->input('user_id');
        $exit_forms->name = $request->input('name');
        $exit_forms->date = $request->input('date');
        $exit_forms->school_year = $request->input('school_year');
        $exit_forms->year_section = $request->input('year_section');
        $exit_forms->reasons_for_leaving = $request->input('reasons_for_leaving');
        $exit_forms->others = $request->input('others');
        $exit_forms->reasons_for_transfer = $request->input('reasons_for_transfer');
        $exit_forms->date_2 = $request->input('date_2');

        $exit_forms->update();

        return redirect()->back()->with('status', 'Form updated successfully!');

    }


    public function destroy($id){
        $removeForms = Exit_Interview_Form::findOrFail($id);
        $removeForms -> delete();
        return redirect()->back()->with('status', 'Form Deleted Successfully!');   
      }

     

        public function downloadForm(Request $request, $id){
        $forms = Exit_Interview_Form::findOrFail($id);
        $pdf = PDF::loadVIew('pdf.exit_interview_forms', [
            'exit_interview_forms' => $forms
        ]);
        return $pdf->download('PNHS Student Exit Interview Form.pdf');
    }

}