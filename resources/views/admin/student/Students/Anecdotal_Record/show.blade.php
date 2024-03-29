@extends('layouts.layoutsidebar')

@section('content')
    <div class="p-1">
        <a class="fas fa-arrow-left" style="font-size:20px; color:blue;"
            href="{{ url('show-student/' . $student_wisd->student->id . '/anecdotal_record') }}"></a>
    </div>
           
  @if ($message = Session::get('status'))
  <div class="alert alert-success alert-dismissible fade show" role="alert">
      <button type="button" class="close" data-dismiss="alert" style="color:black;">×</button>
      <strong>{{ $message }}</strong>
  </div>
@endif


    <div class="row d-flex justify-content-center text-dark">
        <div class="col-md-9 elevation-4 p-3 rounded  mt-3 bg-light mb-3">

            <div class="d-flex justify-content-end">

                <a class="btn btn-danger mt-2 ml-2 mr-2" style=""
                    href="{{ url('export_advStudents_anecdotal_pdf', $student_wisd->id) }}"><span class="fas fa-file-pdf"
                        style="font-size: 15px;"></span> Generate PDF</a>

            </div>

            <div class="d-flex justify-content-center">
                <img src="/images/image17.png" class="user-image" alt="User Image"
                    style="width: 185px; height:150px; padding-left: 2px; padding-right:2px; padding-bottom:2px; padding-top: 2px;">
            </div>

            <div class="container mx-auto">

                <form action="{{ url('update_anecdotal_record/' . $student_wisd->id) }}" method="POST"
                    accept-charset="UTF-8">
                    @csrf
                    @method('PUT')

                    <h1 class="text-center mt-4"
                        style=" color:whitesmoke; margin:auto; font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; font-size: 22px; color:rgba(60, 58, 58, 0.904);">
                        Pangangan National High School </h1>
                    <p class="text-center" style="font-weight:bold; font-size: 20px; color:rgba(60, 58, 58, 0.904);">
                        Guidance
                        Office</p>
                    <p class="text-center text-dark" style="position: relative; top: -15px;">Talisay, Calape, Bohol</p>


                    <p class="text-center text-dark"
                        style="font-size: 18px; font-weight: 500; color:rgba(60, 58, 58, 0.904); ">
                        Anecdotal Record</p>
                    <hr>
                    <div class="row">
                        <div class="col-md-6">

                            <div class="form-group">
                                <label for="" style="color:dimgray">Observation Date and Time: </label>
                                <input type="text" class="form-control"
                                    value="{{ $student_wisd->observation_date_time->format('F d,  Y - g:i A') }}" readonly>
                            </div>

                            <div class="form-group">
                                <label for="" style="color:dimgray">Student Name: </label>
                                <input type="text" class="form-control"
                                    value="{{ $student_wisd->student->firstname }} {{ $student_wisd->student->middlename }} {{ $student_wisd->student->lastname }}"
                                    readonly>

                            </div>

                        </div>

                        <div class="col-md-6">

                            <div class="form-group">
                                <label for="" style="color:dimgray">Observer/Class Adviser: </label>
                                <input type="text" class="form-control" value="{{ $student_wisd->student->user->name }}"
                                    readonly>
                            </div>
                            <div class="form-group">
                                <label for="" style="color:dimgray">Year/Section: </label>
                                <input type="text" class="form-control"
                                    value="{{ $student_wisd->student->year_section }}" readonly>
                            </div>

                        </div>

                        <div class="col-md-12 mb-3 mt-2">
                            <div class=" p-2 bg-light" style="border: 1px solid dimgray;">

                                <label for="" style="color:dimgray;">Description of Incident</label>
                                <textarea style="border: solid 1px dimgray; height: 150px;" id="" type="text" class="form-control"
                                    placeholder="" title="" name="description_of_incident">{{ $student_wisd->description_of_incident }}</textarea>
                                <br>
                                <label for="" style="color:dimgray;">Description of Location/Setting</label>
                                <textarea style="border: solid 1px dimgray; height: 150px;" id="" type="text" class="form-control"
                                    placeholder="" title="" name="location_of_incidents">{{ $student_wisd->location_of_incidents }}</textarea>
                                <br>
                                <label for="" style="color:dimgray;">Action Taken</label>
                                <textarea style="border: solid 1px dimgray; height: 150px;" id="" type="text" class="form-control"
                                    placeholder="" title="" name="actions_taken">{{ $student_wisd->actions_taken }}</textarea>
                                <br>
                                <label for="" style="color:dimgray;">Recommendation</label>
                                <textarea style="border: solid 1px dimgray; height: 150px;" id="" type="text" class="form-control"
                                    placeholder="" title="" name="recommendations">{{ $student_wisd->recommendations }}</textarea>
                                <p class="text-dark mt-2">Note: <i class="text-dark">Information revealed is held strictly
                                        CONFIDENTIAL.</i></p>
                                <div class="form-group">
                                    <label for="" style="color:dimgray">Student ID: </label>
                                    <input type="text" class="form-control text-center" style="width: 45px;"
                                        name="student_id" value="{{ $student_wisd->student->id }}" readonly>
                                </div>
                                <br>
                                <p class="text-dark d-flex justify-content-end">_________________________________________
                                </p>
                                <p class="text-dark d-flex justify-content-end" style=" margin-top: -20px;">
                                    Designated Guidance Counselor's Name and Signature</p>
                            </div>
                        </div>
                    </div>
            </div>
            <button class="btn-primary btn btn-sm"><span class="fas fa-save"></span> Submit Changes</button>
            </form>
        </div>
    </div>
    </div>
    <script>
        setTimeout(function() {
            $(' .alert-dismissible').fadeOut('slow');
        }, 1000);
    </script>

@endsection
