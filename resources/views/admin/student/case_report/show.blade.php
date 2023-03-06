@extends('layouts.layoutsidebar')

@section('content')
    <div class="p-1">
        <a class="fas fa-arrow-left" style="font-size:20px; color:blue;" href="{{ url('case-reports') }}"></a>
    </div>
    @if ($message = Session::get('status'))
        <div class="alert alert-success alert-block">
            <button type="button" class="close" data-dismiss="alert" style="color:black;">×</button>
            <strong>{{ $message }}</strong>
        </div>
    @endif
    <div class="container elevation-4 mx-auto mt-3">
        <div class="d-flex justify-content-end">
            <a class="btn btn-danger mt-2 ml-2 mr-2" style=""
                href="{{ route('export_one_case_pdf', $student_case->id) }}"><span class="fas fa-file-pdf"
                    style="font-size: 15px;"></span> Generate PDF</a>
        </div>

        <div class="">
            <div class="d-flex justify-content-center mt-5">
                <img src="/images/image17.png" class="user-image img-circle elevation-2 " alt="User Image"
                    style="width: 120px; height:120px; border-radius: 50%; background-color: #5bc0de; padding-left: 2px; padding-right:2px; padding-bottom:2px; padding-top: 2px;">
            </div>

            <h1 class="text-center mt-4 p-1"
                style=" color:whitesmoke; margin:auto; font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; font-size: 22px; color:rgba(60, 58, 58, 0.904);">
                Pangangan National High School </h1>
            <p class="text-center" style="font-weight:bold; font-size: 20px; color:rgba(60, 58, 58, 0.904);">Guidance
                Office</p>
            <p class="text-center text-dark" style="position: relative; top: -15px;">Talisay, Calape, Bohol</p>


            <p class="text-center text-dark" style="font-size: 15px; font-weight: 500; color:rgba(60, 58, 58, 0.904); ">
                REPORT OF CASES OF ABUSE, VIOLENCE, EXPLOITATION, DISCRIMINATION, BULLYING OR PEER ABUSE AND OTHER RELATED
                OFFENSES
            </p>
            <hr>

            <div class="container mx-auto">

                <form action="{{ url('update_case_report/' . $student_case->id) }}" method="POST" accept-charset="UTF-8">
                    @csrf
                    @method('PUT')

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="" style="color:dimgray">Victim Name:</label>
                                <input type="text" class="form-control" name="victim_name"
                                    value="{{ $student_case->victim_name }}">
                            </div>
                            <div class="form-group">
                                <label for="" style="color:dimgray">Grade & Section:</label>
                                <input type="text" class="form-control" name="grade_section"
                                    value="{{ $student_case->grade_section }}">
                            </div>
                            <div class="form-group">
                                <label for="" style="color:dimgray">Sex:</label>
                                <input type="text" class="form-control" name="sex" value="{{ $student_case->sex }}">
                            </div>
                            <div class="form-group">
                                <label for="" style="color:dimgray">Date Reported:</label>
                                <input type="text" class="form-control"
                                    value="{{ $student_case->date_reported->format('F d,  Y ') }}" readonly>
                            </div>

                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="" style="color:dimgray">Name of Respondents:</label>
                                <input type="text" class="form-control" name="resp_name"
                                    value="{{ $student_case->resp_name }}">
                            </div>
                            <div class="form-group">
                                <label for="" style="color:dimgray">Grade & Section:</label>
                                <input type="text" class="form-control" name="resp_grade_section"
                                    value="{{ $student_case->resp_grade_section }}">
                            </div>
                            <div class="form-group">
                                <label for="" style="color:dimgray">Sex:</label>
                                <input type="text" class="form-control" name="resp_sex"
                                    value="{{ $student_case->resp_sex }}">
                            </div>
                            <div class="form-group">
                                <label for="" style="color:dimgray">Nature of Complaint:</label>
                                <input type="text" class="form-control" name="nature_of_complaint"
                                    value="{{ $student_case->nature_of_complaint }}">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="" style="color:dimgray">Actions Taken</label>
                                <textarea id="" type="text" class="form-control" title="" rows="5" required
                                    name="actions_taken">{{ $student_case->actions_taken }}</textarea>
                            </div>
                            <div class="form-group">
                                <label for="" style="color:dimgray">Recommendations</label>
                                <textarea id="" type="text" class="form-control" title="" rows="5" required
                                    name="recommendations">{{ $student_case->recommendations }}</textarea>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="" style="color:dimgray">Admin ID:</label>
                                <input type="text" style="width: 45px;" class="form-control text-center"
                                    name="user_id" value="{{ Auth::user()->id }}" readonly>
                            </div>
                            <div class="d-flex justify-content-start">
                                <button class="btn-primary btn btn-sm mb-4"><span class="fas fa-save"></span> Submit
                                    Changes</button>
                            </div>

                </form>
            </div>
        </div>
    </div>
@endsection
