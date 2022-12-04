<?php

namespace App\Http\Controllers\Admin\Case_Report;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Case_Report;
use DB;
use PDF;

class Case_ReportController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){


        $case_reports = DB::table('case_reports')->where('user_id', auth()->user()->id)->get();
        return view('admin.student.case_report.index', compact('case_reports'));

    }

    public function store(Request $request){
  
        $reports = new Case_Report;
        $reports->user_id = $request->input('user_id');
        $reports->victim_name = $request->input('victim_name');
        $reports->grade_section = $request->input('grade_section');
        $reports->sex = $request->input('sex');
        $reports->date_reported = $request->input('date_reported');
        $reports->resp_name = $request->input('resp_name');
        $reports->resp_grade_section = $request->input('resp_grade_section');
        $reports->resp_sex = $request->input('resp_sex');
        $reports->nature_of_complaint = $request->input('nature_of_complaint');
        $reports->actions_taken = $request->input('actions_taken');
        $reports->recommendations = $request->input('recommendations');
        $reports->save();

        return redirect()->back()->with('status', 'New Case created successfully!');

    }

    public function show($id){

        $student_case = Case_Report::find($id);
        if (empty($student_case)) {
  
          abort(404);
      }

        return view('admin.student.case_report.show', compact( 'student_case'));
    }


    public function update(Request $request, $id){
  
        $reports = Case_Report::find($id);
        $reports->user_id = $request->input('user_id');
        $reports->victim_name = $request->input('victim_name');
        $reports->grade_section = $request->input('grade_section');
        $reports->sex = $request->input('sex');
        $reports->resp_name = $request->input('resp_name');
        $reports->resp_grade_section = $request->input('resp_grade_section');
        $reports->resp_sex = $request->input('resp_sex');
        $reports->nature_of_complaint = $request->input('nature_of_complaint');
        $reports->actions_taken = $request->input('actions_taken');
        $reports->recommendations = $request->input('recommendations');

        $reports->update();

        return redirect()->back()->with('status', 'New Case updated successfully!');

    }


    public function destroy($id){
        $removeCase = Case_Report::findOrFail($id);
        $removeCase -> delete();
        return redirect()->back()->with('status', 'Case Deleted Successfully!');   
      }

      public function export_allCases_pdf(){
        $allCases = Case_Report::orderBy('victim_name', 'asc')->get();
        $pdf = PDF::loadVIew('pdf.all_case_reports', [
            'case_reports' => $allCases
        ]);
        return $pdf->download('PNHS Student Case Reports.pdf');
    }

        public function export_one_case_pdf(Request $request, $id){
        $case = Case_Report::findOrFail($id);
        $pdf = PDF::loadVIew('pdf.one_case_report', [
            'one_case_report' => $case
        ]);
        return $pdf->download('PNHS Student Case Report.pdf');
    }

}