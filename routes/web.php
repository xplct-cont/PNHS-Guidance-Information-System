<?php

use Carbon\Carbon;
use App\Notifications\EmailNotification;
use App\Mail\EmailNotif;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
// use App\Http\Controllers\Admin\AdviserController;
use App\Http\Controllers\Admin\AdminProfileController;
use App\Http\Controllers\Admin\AdminMeetingController;
use App\Http\Controllers\Admin\Student\AdvisoryStudentController;
use App\Http\Controllers\Admin\Student_Information_Sheet\Advisory_Student_Information_SheetController;
use App\Http\Controllers\Admin\Anecdotal_Record\Advisory_Anecdotal_RecordController;
use App\Http\Controllers\Admin\Counseling_Anecdotal_Record\Advisory_Counseling_Anecdotal_RecordController;
use App\Http\Controllers\Admin\Parent_Conference_Record\Advisory_Parent_Conference_RecordController;
use App\Http\Controllers\Admin\Career_Interest_Test_Result\Advisory_Career_Interest_Test_ResultController;
use App\Http\Controllers\Admin\Personality_Test_Result\Advisory_Personality_Test_ResultController;
use App\Http\Controllers\Admin\Parent\ParentController;
use App\Http\Controllers\Admin\Parent\ParentEmailController;
use App\Models\User;
use App\Models\Student;

use App\Http\Controllers\Admin\Case_Report\Case_ReportController;
use App\Http\Controllers\Admin\Exit_Interview_Form\Exit_Interview_FormController;

use App\Http\Controllers\AdviserHomePageController;
use App\Http\Controllers\Adviser\AdviserProfileController;
use App\Http\Controllers\Adviser\StudentListController;
use App\Http\Controllers\Adviser\ParentListController;
use App\Http\Controllers\Adviser\MyStudent_Anecdotal_RecordController;
use App\Http\Controllers\Adviser\Parent_EmailController;
use App\Http\Controllers\Adviser\MyStudent_Student_Information_SheetController;




/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Auth::routes();

Route::get('/', function () {
    return view('/auth/login');
});


Route::middleware(['auth', ])->group(function () {
    Route::get('/approval', 'HomeController@approval')->name('approval');
  

    Route::middleware(['approved'])->group(function () {
        Route::middleware(['admin'])->group(function(){
            Route::get('/home', 'HomeController@index')->name('home');
        });   
       
    });

    Route::middleware(['admin', ])->group(function () {
        Route::get('/users', 'UserController@index')->name('users');
        Route::get('/users/{user_id}/approve', 'UserController@approve')->name('admin.users.approve');
        Route::get('/users/{user_id}/destroy', 'UserController@destroy')->name('admin.users.destroy');


        // Route::get('/advisers', [
        //     AdviserController::class, 'index'
        // ])->name('advisers');
        // Route::get('/show-adviser/{id}', [
        //     AdviserController::class, 'show']);
        Route::get('/delete-adviser/{id}', [
            HomeController::class, 'delete']);
        Route::get('/edit-adviser/{id}', [
            HomeController::class, 'edit']);
        Route::put('/update-adviser/{id}', [
            HomeController::class, 'update']);
        Route::put('/update-adviser-pass/{id}', [
            HomeController::class, 'update_adviser_pass']);


            //for PDF and Excel Advisers
        Route::get('export_advisers_pdf', [HomeController::class, 'export_advisers_pdf'])->name('export_advisers_pdf');
        Route::get('export_advisers_excel', [HomeController::class, 'export_advisers_excel'])->name('export_advisers_excel');
          

        //for edit admin profile
        Route::get('/adminprofile', [
                AdminProfileController::class, 'index'
            ])->name('adminprofile');
            
            
        Route::post('/adminprofile', [AdminProfileController::class, 'update_avatar']);     
        Route::get('/edit-info/{id}', [AdminProfileController::class, 'edit']);
        Route::put('/update-info/{id}', [AdminProfileController::class, 'update']);

        Route::get('/admin-change-password/{id}', [
            AdminProfileController::class, 'passwordIndex'
        ])->name('admin-change-password');

        Route::post('/admin-change-password', [AdminProfileController::class, 'passwordChange'])->name('admin-save-password');   



        //Advisory All Students //Admin Panel
       Route::post('/send_email_student', [AdvisoryStudentController::class, 'sendEmailStudent']);


       Route::get('/advisory-list/{id}', [AdvisoryStudentController::class, 'index'])->name('advisory-list');
       Route::get('advisory-list/{id}/edit/{student}', [AdvisoryStudentController::class, 'edit']);
       Route::get('/advisory-list/{id}/add-new-student/',[AdvisoryStudentController::class, 'create']);
       Route::post('/add-new-student', [AdvisoryStudentController::class, 'store']);
       Route::post('/multiple-delete', [AdvisoryStudentController::class, 'multipleDelete']);
       Route::put('/update-student/{id}', [AdvisoryStudentController::class, 'update'])->name('update-student');
       Route::get('/advisory-list/{id}/show-student/{student}', [AdvisoryStudentController::class, 'showStudentRecord']);
    
       
       Route::get('export_advStudents_pdf/{id}', [AdvisoryStudentController::class, 'export_advStudents_pdf']);
       Route::get('export_advStudents_excel/{id}', [AdvisoryStudentController::class, 'export_advStudents_excel']);

       Route::get('/show-student/{id}/student_information_sheet/', [Advisory_Student_Information_SheetController::class, 'index']);
       Route::post('/upload_student_information', [Advisory_Student_Information_SheetController::class, 'store']);   
       Route::get('/delete_student_information_sheet/{id}', [Advisory_Student_Information_SheetController::class, 'destroy']);
       Route::put('/update_student_information_sheet/{id}', [Advisory_Student_Information_SheetController::class, 'updateInfo']);

       Route::get('export_advStudents_student_information_sheet_pdf/{id}', [Advisory_Student_Information_SheetController::class, 'downloadInfo'])->name('export_advStudents_student_information_sheet_pdf');

       Route::get('/show-student/{id}/anecdotal_record/', [Advisory_Anecdotal_RecordController::class, 'index']);
       Route::get('/show-student/{id}/anecdotal_record/create',[Advisory_Anecdotal_RecordController::class, 'create']);
       Route::get('/show-student/{id}/anecdotal_record/{student}', [Advisory_Anecdotal_RecordController::class, 'show']);
       Route::post('/add_anecdotal_record',[Advisory_Anecdotal_RecordController::class, 'store']);
       Route::put('/update_anecdotal_record/{id}', [Advisory_Anecdotal_RecordController::class, 'update']);
       Route::get('/delete_anecdotal_record/{id}', [Advisory_Anecdotal_RecordController::class, 'destroy']);

       Route::get('export_advStudents_anecdotal_pdf/{id}', [Advisory_Anecdotal_RecordController::class, 'export_advStudents_Anecdotal_ID_pdf']);


       Route::get('/show-student/{id}/counseling_anecdotal_record/', [Advisory_Counseling_Anecdotal_RecordController::class, 'index']);
       Route::get('/show-student/{id}/counseling_anecdotal_record/create',[Advisory_Counseling_Anecdotal_RecordController::class, 'create']);
       Route::get('/show-student/{id}/counseling_anecdotal_record/{student}', [Advisory_Counseling_Anecdotal_RecordController::class, 'show']);
       Route::post('/add_counseling_anecdotal_record', [Advisory_Counseling_Anecdotal_RecordController::class, 'store']);
       Route::put('/update_counseling_anecdotal_record/{id}', [Advisory_Counseling_Anecdotal_RecordController::class, 'update']);
       Route::get('/delete_counseling_anecdotal_record/{id}', [Advisory_Counseling_Anecdotal_RecordController::class, 'destroy']);

       Route::get('export_advStudents_counseling_anecdotal_pdf/{id}', [Advisory_Counseling_Anecdotal_RecordController::class, 'export_advStudents_Counseling_Anecdotal_ID_pdf']);


       Route::get('/show-student/{id}/parent_conference_record/', [Advisory_Parent_Conference_RecordController::class, 'index']);
       Route::get('/show-student/{id}/parent_conference_record/create',[Advisory_Parent_Conference_RecordController::class, 'create']);
       Route::get('/show-student/{id}/parent_conference_record/{student}', [Advisory_Parent_Conference_RecordController::class, 'show']);
       Route::post('/add_parent_conference_record', [Advisory_Parent_Conference_RecordController::class, 'store']);
       Route::put('/update_parent_conference_record/{id}', [Advisory_Parent_Conference_RecordController::class, 'update']);
       Route::get('/delete_parent_conference_record/{id}', [Advisory_Parent_Conference_RecordController::class, 'destroy']);

       Route::get('export_advStudents_parent_conference_record_pdf/{id}', [Advisory_Parent_Conference_RecordController::class, 'export_advStudents_Parent_Conference_Record_ID_pdf']);


       Route::get('/show-student/{id}/career_interest_test_result/', [Advisory_Career_Interest_Test_ResultController::class, 'index']);
       Route::post('/upload_career_interest_result', [Advisory_Career_Interest_Test_ResultController::class, 'store']);   
       Route::get('/delete_career_interest_test_result/{id}', [Advisory_Career_Interest_Test_ResultController::class, 'destroy']);
       Route::get('/download_career_interest_test_result/{id}',[Advisory_Career_Interest_Test_ResultController::class, 'downloadFile']);


       Route::get('/show-student/{id}/personality_test_result/', [Advisory_Personality_Test_ResultController::class, 'index']);
       Route::post('/upload_personality_result', [Advisory_Personality_Test_ResultController::class, 'store']);   
       Route::get('/delete_personality_test_result/{id}', [Advisory_Personality_Test_ResultController::class, 'destroy']);
       Route::get('/download_personality_test_result/{id}',[Advisory_Personality_Test_ResultController::class, 'downloadFile']);


       //for Case Reports
       Route::get('/case-reports', [Case_ReportController::class, 'index'])->name('case-reports');
       Route::post('/create_case_report', [Case_ReportController::class, 'store']);
       Route::get('/show_case_report/{id}', [Case_ReportController::class, 'show']);
       Route::put('/update_case_report/{id}', [Case_ReportController::class, 'update']);
       Route::get('/delete_case_report/{id}', [Case_ReportController::class, 'destroy']);
       Route::get('/export_allCases_pdf', [Case_ReportController::class, 'export_allCases_pdf'])->name('export_allCases_pdf');
       Route::get('export_one_case_pdf/{id}', [Case_ReportController::class, 'export_one_case_pdf'])->name('export_one_case_pdf');

       //for exit interview forms
       Route::get('/exit_interview_forms', [Exit_Interview_FormController::class, 'index'])->name('exit_interview_forms');
       Route::post('/create_exit_interview_form', [Exit_Interview_FormController::class, 'store']);
       Route::put('/update_student_exit_form/{id}', [Exit_Interview_FormController::class, 'update']);
       Route::get('/delete_student_exit_form/{id}', [Exit_Interview_FormController::class, 'destroy']);
       Route::get('/download_student_exit_form/{id}', [Exit_Interview_FormController::class, 'downloadForm'])->name('download_student_exit_form');

       //for SHS Parents
       Route::get('shs-parents', [ParentController::class, 'index'])->name('shs-parents');
       Route::get('/email_to_parent/{id}', [ParentController::class, 'emailToParent']);
       Route::post('/send_email_parent_admin', [ParentEmailController::class, 'sendEmail']);

        //for calendar admin panel
        // Route::get('fullcalender', [AdminCalendarController::class, 'index'])->name('calendar');
        // Route::post('fullcalenderAjax', [AdminCalendarController::class, 'ajax']);

    
       //for meetings admin

       Route::post('/add_new_meeting', [AdminMeetingController::class, 'store']);

       Route::get('/meeting-delete/{id}', [HomeController::class, 'destroy']);
       Route::post('/send-meeting', function(){
           $user = User::all();
        //    $student->notify(new EmailNotification());
        Notification::send($user, new EmailNotification());
        return redirect()->back();
        });
      
     });
    });

    //////For Advisers//////////////////////////////////////////
    Auth::routes(['verify' => true]);
    Route::middleware(['auth'])->group(function () {
        Route::get('/approval', 'AdviserHomePageController@approval')->name('approval');
    
        
    Route::middleware(['approved', 'auth', 'is_admin'])->group(function () {
        Route::get('/homepage', 'AdviserHomePageController@index')->name('homepage');


        Route::get('/adviserprofile', [
            AdviserProfileController::class, 'index'
        ])->name('adviserprofile');
        
        
    Route::post('/adviserprofile', [AdviserProfileController::class, 'update_avatar']);     
    Route::put('/update-adviser-info/{id}', [AdviserProfileController::class, 'update']);
    
    Route::get('/adviser-change-password/{id}', [
        AdviserProfileController::class, 'passwordIndex'
    ])->name('adviser-change-password');

    Route::post('/adviser-change-password', [AdviserProfileController::class, 'passwordChange'])->name('adviser-save-password');   





        Route::get('/advisory-list-students', [
            StudentListController::class, 'myStudents'
        ])->name('advisory-list-students');
        Route::get('/students/create',[StudentListController::class, 'create']);
        Route::post('/students', [StudentListController::class, 'store']);
        Route::get('/students/edit/{student}', [StudentListController::class, 'edit'])->middleware('can-edit');
        // Route::put('/update-mystudent/{id}',[StudentListController::class, 'update']);
        Route::put('/update-my-student/{student}', [StudentListController::class, 'update'])->middleware('can-edit');
        Route::get('/delete-student/{student}', [StudentListController::class, 'destroy']);
        Route::get('/show-my-student/{id}', [StudentListController::class, 'showStudentRecord']);


        Route::get('/show-my-student/{id}/anecdotal_record_myStudent/', [MyStudent_Anecdotal_RecordController::class, 'index'])->name('myStudent-anecdotal');
        Route::get('/delete_anecdotal_record_myStudent/{id}', [MyStudent_Anecdotal_RecordController::class, 'destroy']);
        Route::get('/show-my-student/{id}/anecdotal_record_myStudent/create',[MyStudent_Anecdotal_RecordController::class, 'create']);
        Route::post('/add_anecdotal_record_myStudent',[MyStudent_Anecdotal_RecordController::class, 'store']);
        Route::put('/update_anecdotal_record_myStudent/{id}', [MyStudent_Anecdotal_RecordController::class, 'update']);
        Route::get('/show-my-student/{id}/anecdotal_record_myStudent/{student}', [MyStudent_Anecdotal_RecordController::class, 'show']);


        Route::post('/send_email_myStudent', [StudentListController::class, 'sendEmailMyStudent']);

        //for PDF and Excel My Students Only
        Route::get('export_myStudents_pdf', [StudentListController::class, 'export_myStudents_pdf'])->name('export_myStudents_pdf');
        Route::get('export_myStudents_excel', [StudentListController::class, 'export_myStudents_excel'])->name('export_myStudents_excel'); 
          
        Route::get('export_myStudents_anecdotal_pdf/{id}', [MyStudent_Anecdotal_RecordController::class, 'export_myStudents_Anecdotal_ID_pdf'])->name('export_myStudents_anecdotal_pdf');

        //for Parents on my Advisory
        Route::get('parent-lists', [ParentListController::class, 'index'])->name('parent-lists');
        Route::get('/email_parent/{id}', [ParentListController::class, 'emailParent']);
        Route::post('/send_email_advisory_parent', [Parent_EmailController::class, 'sendEmail']);
        

        Route::get('/show-my-student/{id}/student_information_sheet_myStudent/', [MyStudent_Student_Information_SheetController::class, 'index'])->name('myStudent-student_information_sheet');
        Route::post('/upload_student_information_myStudent', [MyStudent_Student_Information_SheetController::class, 'store']);   
        Route::get('/delete_student_information_sheet_myStudent/{id}', [MyStudent_Student_Information_SheetController::class, 'destroy']);
        Route::put('/update_student_information_sheet_myStudent/{id}', [MyStudent_Student_Information_SheetController::class, 'updateInfo']);

        Route::get('export_myStudents_student_information_sheet_pdf/{id}', [MyStudent_Student_Information_SheetController::class, 'downloadInfo'])->name('export_myStudents_student_information_sheet_pdf');
        });
    });

  
  
    



      
    

    
   
