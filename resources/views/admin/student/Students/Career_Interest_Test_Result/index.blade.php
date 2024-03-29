@extends('layouts.layoutsidebar')

@section('content')
    <div class="p-1">
        <a class="fas fa-arrow-left" style="font-size:20px; color:blue;"
            href="{{ url('advisory-list/' . $student_wis->user->id . '/show-student/' . $student_wis->id) }}"></a>
    </div>
    <h1 class="text-dark p-3"
        style="font-weight:normal; font-size: 25px; font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; ">
        Career Interest Test Result of {{ $student_wis->lastname }}, {{ $student_wis->firstname }} from
        {{ $student_wis->year_section }}</h1>
    <hr>

    @if ($message = Session::get('status'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <button type="button" class="close" data-dismiss="alert" style="color:black;">×</button>
            <strong>{{ $message }}</strong>
        </div>
    @endif

    <div class="container" style="">
        <div class="">
            <div class="">
                <h1 class="text-dark "
                    style="font-weight:normal; font-size: 25px; font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; ">
                </h1>

                <div class="d-flex justify-content-end">
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                        <span class="fas fa-upload"></span> Upload Record
                    </button>

                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header bg-info">
                                    <h5 class="modal-title text-light" style="font-weight:400" id="exampleModalLabel">Upload
                                        here...</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body text-secondary text-center">

                                    <form action="{{ url('/upload_career_interest_result') }}" method="POST"
                                        enctype="multipart/form-data">
                                        @csrf

                                        <div class="">
                                            <label for=""></label>
                                            <input type="file" name="interest_result">
                                        </div>
                                        <div class="form-group">
                                            <label for="" class="d-flex justify-content-start"
                                                style="color:dimgray">User ID</label>
                                            <input type="text" style="width:50px;" name="student_id"
                                                class="form-control text-center" value="{{ $student_wis->id }}" readonly>
                                        </div>
                                        <button type="submit" class="btn btn-primary "><span class="fas fa-save"></span>
                                            Submit</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <hr>

                @forelse ($career_interest_test_result_wisdom as $car_inter_wis)
                    <a href="#" data-toggle="modal" id="car_inter_wis_delete_link" class="btn btn-danger btn-sm"
                        data-target="#car_inter_wis_id{{ $car_inter_wis->id }}"><span
                            class=" fas fa-trash-alt text-light"></span></a>

                    <div class="modal fade" id="car_inter_wis_id{{ $car_inter_wis->id }}" tabindex="-1" role="dialog"
                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog " role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel"><span
                                            class="fas fa-exclamation-circle text-danger" style="font-size: 30px;"></span>
                                    </h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">

                                    <form action="{{ url('delete_career_interest_test_result/' . $car_inter_wis->id) }}"
                                        method="GET" enctype="multipart/form-data">
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

                    <a href="{{ url('download_career_interest_test_result', $car_inter_wis->id) }}"
                        class="btn btn-sm btn-primary mb-1"><i class="text-light fas fa-download"></i> Download </a>
                    <img src="{{ asset('storage/career_interest_test_result/' . $car_inter_wis->interest_result) }} "
                        alt="Image" style="height: 100%; width: 100%;" class="elevation-4 mb-5">


                @empty
                    <tr>
                        <p colspan="5" class="text-dark"><span class="fas fa-exclamation-circle text-danger"></span>
                            Empty Career Interest Result!</p>
                    </tr>
                @endforelse
            </div>
        </div>
    </div>

    <script>
        setTimeout(function() {
            $(' .alert-dismissible').fadeOut('slow');
        }, 1000);
    </script>

    <style scoped>
        td {
            border: solid 1px #5bc0de;
            border-style: none solid solid none;
            padding: 5px;
        }
    </style>
@endsection
