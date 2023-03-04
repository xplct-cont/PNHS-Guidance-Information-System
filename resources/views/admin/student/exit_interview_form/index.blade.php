@extends('layouts.layoutsidebar')

@section('content')
    @if ($message = Session::get('status'))
        <div class="alert alert-success alert-block">
            <button type="button" class="close" data-dismiss="alert" style="color:black;">×</button>
            <strong>{{ $message }}</strong>
        </div>
    @endif


    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
        <span class="fas fa-plus-circle"></span> New Exit Form
    </button>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-xl" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <div class="d-flex justify-content-center">
                        <img src="/images/image17.png" class="user-image img-circle elevation-2 " alt="User Image"
                            style="width: 120px; height:120px; border-radius: 50%; background-color: #5bc0de; padding-left: 2px; padding-right:2px; padding-bottom:2px; padding-top: 2px;">
                    </div>

                    <h1 class="text-center mt-4"
                        style=" color:whitesmoke; margin:auto; font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; font-size: 22px; color:rgba(60, 58, 58, 0.904);">
                        Pangangan National High School </h1>
                    <p class="text-center" style="font-weight:bold; font-size: 20px; color:rgba(60, 58, 58, 0.904);">
                        Guidance
                        Center</p>
                    <p class="text-center text-dark" style="position: relative; top: -15px;">Talisay, Calape, Bohol</p>

                    <p class="text-center text-dark"
                        style="font-size: 18px; font-weight: 500; color:rgba(60, 58, 58, 0.904); ">
                        Exit Interview Form</p>
                    <hr>
                    <p class="text-center text-dark">(Intended for students leaving in the institution)</p>
                </div>

                <form action="{{ url('/create_exit_interview_form') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="container mx-auto">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="" style="color:dimgray">Date:</label>
                                    <input type="date" class="form-control" name="date" required>
                                </div>
                                <div class="form-group">
                                    <label for="" style="color:dimgray">Student Name:</label>
                                    <input type="text" class="form-control" name="name" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="" style="color:dimgray">School Year:</label>
                                    <input type="text" class="form-control" name="school_year" required>
                                </div>
                                <div class="form-group">
                                    <label for="" style="color:dimgray">Year Level and Section:</label>
                                    <input type="text" class="form-control" name="year_section" required>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="col-md-6">
                            <p class="text-dark"> Please check on the reasons for leaving the school.</p>
                            <label class="radio inline mr-5">
                                <input class type="radio" name="reasons_for_leaving" value="Transfer to other school">
                                <span class="text-dark">Transfer to other school</span>
                            </label><br>
                            <label class="radio inline mr-5">
                                <input type="radio" name="reasons_for_leaving" value="Employment">
                                <span class="text-dark">Employment</span>
                            </label><br>
                            <div class="form-group">
                                <label for="" style="color:dimgray">Others:</label>
                                <input type="text" class="form-control" name="others" placeholder="(pls. specify)">
                            </div>
                        </div><br>
                        <hr>

                        <div class="col-md-6">
                            <p class="text-dark">Possible reasons for transfer: </p>
                            <label class="radio inline mr-5">
                                <input type="radio" name="reasons_for_transfer"
                                    value="Advised to transfer due to behavioral problem">
                                <span class="text-dark">Advised to transfer due to behavioral problem</span>
                            </label><br> <label class="radio inline mr-5">
                                <input type="radio" name="reasons_for_transfer"
                                    value="Not well adjusted with school environment">
                                <span class="text-dark">Not well adjusted with school environment</span>
                            </label><br> <label class="radio inline mr-5">
                                <input type="radio" name="reasons_for_transfer"
                                    value="Not satisfied wioth school facilities">
                                <span class="text-dark">Not satisfied with school facilities</span>
                            </label><br> <label class="radio inline mr-5">
                                <input type="radio" name="reasons_for_transfer"
                                    value="Not satisfied with teaching strategy">
                                <span class="text-dark">Not satisfied with teaching strategy</span>
                            </label><br> <label class="radio inline mr-5">
                                <input type="radio" name="reasons_for_transfer"
                                    value="Problems with academic subjects">
                                <span class="text-dark">Problems with academic subjects</span>
                            </label><br> <label class="radio inline mr-5">
                                <input type="radio" name="reasons_for_transfer"
                                    value="Teachers do not show encouragement and support">
                                <span class="text-dark">Teachers do not show encouragement and support</span>
                            </label><br> <label class="radio inline mr-5">
                                <input type="radio" name="reasons_for_transfer"
                                    value="Unable to cope with school rules and regulations">
                                <span class="text-dark">Unable to cope with school rules and regulations</span>
                            </label><br> <label class="radio inline mr-5">
                                <input type="radio" name="reasons_for_transfer"
                                    value="Had difficulty approaching teachers">
                                <span class="text-dark">Had difficulty approaching teachers</span>
                            </label>
                            </label><br> <label class="radio inline mr-5">
                                <input type="radio" name="reasons_for_transfer" value="Poor health">
                                <span class="text-dark">Poor health</span>
                            </label>
                            </label><br> <label class="radio inline mr-5">
                                <input type="radio" name="reasons_for_transfer" value="Transfer of residence">
                                <span class="text-dark">Transfer of residence</span>
                            </label>
                            </label><br> <label class="radio inline mr-5">
                                <input type="radio" name="reasons_for_transfer"
                                    value="Accumulated absence/tardiness from class">
                                <span class="text-dark">Accumulated absence/tardiness from class</span>
                            </label>
                            </label><br> <label class="radio inline mr-5">
                                <input type="radio" name="reasons_for_transfer" value="Personal/ Family problems">
                                <span class="text-dark">Personal/ Family problems</span>
                            </label><br>

                        </div>
                        <hr>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="" style="color:dimgray">Date:</label>
                                    <input type="date" class="form-control" name="date_2" required>
                                </div>

                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="" style="color:dimgray">Designated Guidance Counselor:</label>
                                    <input type="text" class="form-control" value="{{ Auth::user()->name }}" readonly>
                                </div>
                                <div class="form-group">
                                    <label for="" style="color:dimgray">Admin ID:</label>
                                    <input type="text" class="form-control text-center" name="user_id"
                                        style="width: 45px;" value="{{ Auth::user()->id }}" readonly>
                                </div>
                            </div>
                        </div>

                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary"><span class="fas fa-save"></span> Save
                                changes</button>
                        </div>
                    </div>
            </div>
        </div>
    </div>
    </form>


    <div class="search" style="position:relative; top: 10px;">
        <div class="mx-auto" style="width:340px;">
            <form action="{{ route('exit_interview_forms') }}" method="GET" role="search">

                <div class="input-group">
                    <span class="input-group-btn mr-2 mt-0">
                        <button class="btn btn-info" type="submit" title="Search Name">
                            <span class="fas fa-search"></span>
                        </button>
                    </span>
                    <input type="text" class="form-control mr-2" name="exit_forms" placeholder="Search"
                        id="exit_forms">
                    <a href="{{ route('exit_interview_forms') }}" class=" mt-0">
                        <span class="input-group-btn">
                            <button class="btn btn-danger" type="button" title="Refresh page">
                                <span class="fas fa-sync-alt"></span>
                            </button>
                        </span>
                    </a>
                </div>
            </form>
        </div>

        @forelse ($exit_forms as $forms)
            <form action="{{ url('update_student_exit_form/' . $forms->id) }}" method="POST" accept-charset="UTF-8">
                @csrf
                @method('PUT')


                <div class="row d-flex justify-content-center text-dark">

                    <div class="col-md-9 elevation-4 p-3 rounded  mt-5 bg-light mb-3">

                        {{--                         
                        <a href="{{ url('delete_student_exit_form/' . $forms->id) }}"
                            class="btn btn-sm btn-danger mb-1"><i class="text-light fas fa-trash"></i></a> --}}

                        <a href="#" data-toggle="modal" id="exit_forms_delete_link" class="btn btn-danger btn-sm"
                            data-target="#exit_forms_id{{ $forms->id }}"><span
                                class=" fas fa-trash-alt text-light"></span></a>




                        <div class="d-flex justify-content-end">
                            <a class="btn btn-danger mt-2 ml-2 mr-2" style=""
                                href="{{ route('download_student_exit_form', $forms->id) }}"><span class="fas fa-file-pdf"
                                    style="font-size: 15px;"></span> Generate PDF</a>

                        </div>
                        <div class="d-flex justify-content-center">
                            <img src="/images/image17.png" class="user-image img-circle elevation-2 " alt="User Image"
                                style="width: 120px; height:120px; border-radius: 50%; background-color: #5bc0de; padding-left: 2px; padding-right:2px; padding-bottom:2px; padding-top: 2px;">
                        </div>
                        <h1 class="text-center mt-4"
                            style=" color:whitesmoke; margin:auto; font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; font-size: 22px; color:rgba(60, 58, 58, 0.904);">
                            Pangangan National High School </h1>
                        <p class="text-center" style="font-weight:bold; font-size: 20px; color:rgba(60, 58, 58, 0.904);">
                            Guidance
                            Center</p>
                        <p class="text-center text-dark" style="position: relative; top: -15px;">Talisay, Calape, Bohol
                        </p>


                        <p class="text-center text-dark"
                            style="font-size: 18px; font-weight: 500; color:rgba(60, 58, 58, 0.904); ">
                            Exit Interview Form</p>


                        <hr>
                        <p class="text-center text-dark">(Intended for students leaving in thge institution)
                        </p>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="" style="color:dimgray">Date:</label>
                                    <input type="text" class="form-control" name="date"
                                        value="{{ $forms->date->format('Y-m-d') }}" required>
                                </div>
                                <div class="form-group">
                                    <label for="" style="color:dimgray">Student Name:</label>
                                    <input type="text" class="form-control" name="name"
                                        value="{{ $forms->name }}" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="" style="color:dimgray">School Year:</label>
                                    <input type="text" class="form-control" name="school_year"
                                        value="{{ $forms->school_year }}" required>
                                </div>
                                <div class="form-group">
                                    <label for="" style="color:dimgray">Year Level and Section:</label>
                                    <input type="text" class="form-control" name="year_section"
                                        value="{{ $forms->year_section }}" required>
                                </div>

                            </div>

                            <hr>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="" style="color:dimgray">Reason for leaving the school:</label>
                                    <input type="text" class="form-control" name="reasons_for_leaving"
                                        value="{{ $forms->reasons_for_leaving }}">
                                </div>
                                <div class="form-group">
                                    <label for="" style="color:dimgray">Other reason for leaving the
                                        school:</label>
                                    <input type="text" class="form-control" name="others"
                                        value="{{ $forms->others }}">
                                </div>
                                <div class="form-group">
                                    <label for="" style="color:dimgray">Reason for transfer:</label>
                                    <input type="text" class="form-control" name="reasons_for_transfer"
                                        value="{{ $forms->reasons_for_transfer }}">
                                </div>
                            </div>
                            <div class="col-md-12 d-flex justify-content-end">
                                <div class="form-group">
                                    <label for="" style="color:dimgray">Date:</label>
                                    <input type="text" class="form-control" name="date_2"
                                        value="{{ $forms->date_2->format('Y-m-d') }}" required>
                                </div>

                            </div>

                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="" style="color:dimgray">Designated Guidance Counselor:</label>
                                    <input type="text" class="form-control" value="{{ Auth::user()->name }}"
                                        readonly>
                                </div>
                                <div class="form-group">
                                    <label for="" style="color:dimgray">Admin ID:</label>
                                    <input type="text" class="form-control text-center" style="width: 45px;"
                                        name="user_id" value="{{ Auth::user()->id }}" readonly>
                                </div>
                            </div>
                        </div>

                        <div class="d-flex justify-content-end">
                            <button type="submit" class="btn btn-primary"><span class="fas fa-save"></span> Submit
                                Changes</button>
                        </div>
                    </div>
                </div>
            </form>

            <div class="modal fade" id="exit_forms_id{{ $forms->id }}" tabindex="-1" role="dialog"
                aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog " role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel"><span
                                    class="fas fa-exclamation-circle text-danger" style="font-size: 30px;"></span> </h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">

                            <form action="{{ url('delete_student_exit_form/' . $forms->id) }}" method="GET"
                                enctype="multipart/form-data">
                                @csrf
                                @method('GET')

                                <div class="container mx-auto text-dark">
                                    Are you sure you want to delete this permanently?
                                </div>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-danger">Delete Permanently</button>
                        </div>
                        </form>
                    </div>
                </div>
            </div>

        @empty
            <tr>
                <p colspan="5" class="text-dark"><span class="fas fa-exclamation-circle text-danger"></span>
                    Empty Exit Interview Forms!</p>
            </tr>
        @endforelse
    @endsection
