@extends('layouts.layoutsidebar')

@section('content')
    <a href="{{ url('/advisory-list/' . $advisoryStud->user->id) }}"><span class="fas fa-arrow-left"
            style="font-size: 20px;"></span> </a>

    <div class="row d-flex justify-content-center text-dark">

        <div class="mx-auto text-center mb-3">
            <img src="/images/image17.png" class="user-image img-circle elevation-2 mt-3" alt="User Image"
                style="width: 200px; height:200px; border-radius: 50%; background-color: #5bc0de; padding-left: 2px; padding-right:2px; padding-bottom:2px; padding-top: 2px;">

            <h1 class="mb-3 mt-3"
                style="color:whitesmoke; margin:auto; font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; font-size: 25px; color:dimgray;">
                Name: {{ $advisoryStud->firstname }} {{ $advisoryStud->lastname }}</h1>
        </div>

        <div class="col-md-8 p-3 mt-3 rounded bg-light">
            @if ($message = Session::get('status'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <button type="button" class="close" data-dismiss="alert" style="color:black;">×</button>
                    <strong>{{ $message }}</strong>
                </div>
            @endif

            <div class="container">
                <form action="{{ url('update-student/' . $advisoryStud->id) }}" method="POST" accept-charset="UTF-8">
                    @csrf
                    @method('PUT')

                    <div class="row">
                        <div class="col-md-6">
                            <div class="input-group mb-3 mt-3">
                                <label for="" style="color:dimgray;"><span class=" input-group-text bg-secondary"
                                        style="width: 45px; font-size: 15px;">ID</span></label>
                                <input type="text" name="school_id" class="form-control"
                                    value="{{ $advisoryStud->school_id }}" required>
                            </div>

                            <div class="input-group mb-3 ">
                                <label for="" style="color:dimgray;"><span class=" input-group-text bg-secondary"
                                        style="width: 45px; font-size: 15px;">Ln</span></label>
                                <input type="text" name="lastname" class="form-control"
                                    value="{{ $advisoryStud->lastname }}" required>
                            </div>

                            <div class="input-group mb-3">
                                <label for="" style="color:dimgray;"><span class="input-group-text bg-secondary"
                                        style="width: 45px; font-size: 15px;">Fn</span></label>
                                <input type="text" name="firstname" class="form-control"
                                    value="{{ $advisoryStud->firstname }}" required>
                            </div>

                            <div class="input-group mb-3">
                                <label for="" style="color:dimgray;"><span class="input-group-text bg-secondary"
                                        style="width: 45px; font-size: 15px;">Mi</span></label>
                                <input type="text" name="middlename" class="form-control"
                                    value="{{ $advisoryStud->middlename }}" required>
                            </div>

                            <div class="input-group mb-3">
                                <label for="" style="color:dimgray;"><span class="input-group-text bg-secondary"
                                        style="width: 45px; font-size: 15px;">Y/S</span></label>
                                <input type="text" name="year_section" class="form-control"
                                    value="{{ $advisoryStud->year_section }}" readonly>
                            </div>

                            <div class="input-group mb-3">
                                <label for="" style="color:dimgray;"><span class="input-group-text bg-secondary"
                                        style="width: 45px; font-size: 15px;">Ag</span></label>
                                <input type="text" name="age" class="form-control" value="{{ $advisoryStud->age }}"
                                    required>
                            </div>

                            <div class="input-group mb-3">
                                <label for="" style="color:dimgray;"><span
                                        class="input-group-text bg-secondary fas fa-envelope"
                                        style="width: 45px; font-size: 15px;"></span></label>
                                <input type="email" name="email" class="form-control"
                                    value="{{ $advisoryStud->email }}" required>
                            </div>

                        </div>

                        <div class="col-md-6 mt-3">
                            <div class="input-group mb-3">
                                <label for="" style="color:dimgray;"><span class=" input-group-text bg-secondary"
                                        style="width: 45px; font-size: 15px;">P.N</span></label>
                                <input type="text" name="parent_name" class="form-control"
                                    value="{{ $advisoryStud->parent_name }}" required>
                            </div>

                            <div class="input-group mb-3">
                                <label for="" style="color:dimgray;"><span class="input-group-text bg-secondary"
                                        style="width: 45px; font-size: 15px;">P.E</span></label>
                                <input type="email" name="parent_email" class="form-control"
                                    value="{{ $advisoryStud->parent_email }}">
                            </div>

                            <div class="input-group mb-3">
                                <label for="" style="color:dimgray;"><span class="input-group-text bg-secondary"
                                        style="width: 45px; font-size: 15px;">P.#</span></label>
                                <input type="text" name="parent_num" class="form-control"
                                    value="{{ $advisoryStud->parent_num }}">
                            </div>

                            <div class="input-group mb-3">
                                <label for="" style="color:dimgray;"><span class=" input-group-text bg-secondary"
                                        style="width: 45px; font-size: 15px;">Ad</span></label>
                                <input type="text" name="address" class="form-control"
                                    value="{{ $advisoryStud->address }}" required>
                            </div>
                            <div class="input-group mb-3">
                                <label for="" style="color:dimgray;"><span class=" input-group-text bg-secondary"
                                        style="width: 45px; font-size: 15px;">SY</span></label>
                                <input type="text" name="school_year" class="form-control"
                                    value="{{ $advisoryStud->school_year }}" required>
                            </div>

                            <div class="form-group text-dark d-flex justify-content-center">
                                <div class="maxl">
                                    <label class="radio inline mr-5">
                                        <input type="radio" name="gender" value="Male"
                                            {{ $advisoryStud->gender == 'Male' ? ' checked' : 'Unchecked' }}>
                                        <span>Male</span>
                                    </label>
                                    <label class="radio inline">
                                        <input type="radio" name="gender" value="Female"
                                            {{ $advisoryStud->gender == 'Female' ? ' checked' : 'Unchecked' }}>
                                        <span>Female</span>
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group text-center mt-5 ml-1" style="width: 80px;">
                            <label for="" style="color:dimgray;">Adviser ID</label>
                            <input type="text" name="user_id" class="form-control text-center"
                                value="{{ $advisoryStud->user->id }}" readonly>
                        </div>

                    </div>
                    <div class="form-group mb-3 d-flex justify-content-end">
                        <button type="submit" class="btn btn-success"><span class="fas fa-save"></span> Save
                            Changes</button>

                    </div>

                </form>
            </div>
        </div>
        <script>
            setTimeout(function() {
                $(' .alert-dismissible').fadeOut('slow');
            }, 1000);
        </script>
    @endsection
