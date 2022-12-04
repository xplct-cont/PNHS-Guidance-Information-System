@extends('layouts.layoutsidebar')

@section('content')
<a href="{{url('/advisory-list/'.$advisoryStud->user->id)}}"><span class="fas fa-arrow-left" style="font-size: 20px;"></span> </a>
    <div class="row d-flex justify-content-center text-dark">
        <div class="col-md-8 p-2 rounded bg-light">
            @if ($message = Session::get('status'))
            <div class="alert alert-success alert-block">
                <button type="button" class="close" data-dismiss="alert" style="color:black;">×</button>
                <strong>{{ $message }}</strong>
            </div>
            @endif

            <div class="card-header elevation-1">
                <h1
                    style="text-align:center; color:whitesmoke; margin:auto; font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; font-size: 20px; color:dimgray;">
                    Name: {{ $advisoryStud->firstname }} {{ $advisoryStud->lastname }}</h1>
                
            </div>
            <form action="{{ url('update-student/' . $advisoryStud->id) }}" method="POST" accept-charset="UTF-8">
                @csrf
                @method('PUT')

                <div class="input-group mb-3 mt-4">
                    <label for="" style="color:dimgray;"><span class=" input-group-text bg-secondary"
                            style="width: 43px;">ID</span></label>
                    <input type="text" name="school_id" class="form-control" value="{{ $advisoryStud->school_id }}"
                        required>
                </div>

                <div class="input-group mb-3 ">
                    <label for="" style="color:dimgray;"><span class=" input-group-text bg-secondary"
                            style="width: 43px;">Ln</span></label>
                    <input type="text" name="lastname" class="form-control" value="{{ $advisoryStud->lastname }}"
                        required>
                </div>

                <div class="input-group mb-3">
                    <label for="" style="color:dimgray;"><span class="input-group-text bg-secondary"
                            style="width: 43px;">Fn</span></label>
                    <input type="text" name="firstname" class="form-control" value="{{ $advisoryStud->firstname }}"
                        required>
                </div>

                <div class="input-group mb-3">
                    <label for="" style="color:dimgray;"><span class="input-group-text bg-secondary"
                            style="width: 43px;">Mn</span></label>
                    <input type="text" name="middlename" class="form-control" value="{{ $advisoryStud->middlename }}"
                        required>
                </div>


                <div class="input-group mb-3">
                    <label for="" style="color:dimgray;"><span class="input-group-text bg-secondary"
                            style="width: 43px;">Y/S</span></label>
                    <input type="text" name="year_section" class="form-control"
                        value="{{ $advisoryStud->year_section }}" readonly>
                </div>

                <div class="input-group mb-3">
                    <label for="" style="color:dimgray;"><span class="input-group-text bg-secondary"
                            style="width: 43px;">AG</span></label>
                    <input type="text" name="age" class="form-control" value="{{ $advisoryStud->age }}" required>
                </div>

                <div class="input-group mb-3">
                    <label for="" style="color:dimgray;"><span class="fas fa-envelope input-group-text bg-secondary"
                            style="width: 43px;"></span></label>
                    <input type="email" name="email" class="form-control" value="{{ $advisoryStud->email }}" required>
                </div>

                <div class="input-group mb-3">
                    <label for="" style="color:dimgray;"><span class=" input-group-text bg-secondary"
                            style="width: 43px;">Pn</span></label>
                    <input type="text" name="parent_name" class="form-control"
                        value="{{ $advisoryStud->parent_name }}" required>
                </div>

                <div class="input-group mb-3">
                    <label for="" style="color:dimgray;"><span class="fas fa-envelope input-group-text bg-secondary"
                            style="width: 43px;"></span></label>
                    <input type="email" name="parent_email" class="form-control"
                        value="{{ $advisoryStud->parent_email }}">
                </div>

                <div class="input-group mb-3">
                    <label for="" style="color:dimgray;"><span class="input-group-text bg-secondary"
                            style="width: 43px;">No.</span></label>
                    <input type="text" name="parent_num" class="form-control"
                        value="{{ $advisoryStud->parent_num }}">
                </div>

                <div class="input-group mb-3">
                    <label for="" style="color:dimgray;"><span class=" input-group-text bg-secondary"
                            style="width: 43px;">Ad</span></label>
                    <input type="text" name="address" class="form-control" value="{{ $advisoryStud->address }}"
                        required>
                </div>
                <div class="input-group mb-3">
                    <label for="" style="color:dimgray;"><span class=" input-group-text bg-secondary"
                            style="width: 43px;">SY</span></label>
                    <input type="text" name="school_year" class="form-control" value="{{ $advisoryStud->school_year }}"
                        required>
                </div>
               
                <div class="form-group text-dark d-flex justify-content-center">
                    <div class="maxl">
                        <label class="radio inline mr-5">
                            <input type="radio" name="gender" value="Male" {{ ($advisoryStud->gender == 'Male' ? ' checked' : 'Unchecked') }}>
                            <span>Male</span>
                        </label>
                        <label class="radio inline">
                            <input type="radio" name="gender" value="Female"  {{ ($advisoryStud->gender == 'Female' ? ' checked' : 'Unchecked') }}>
                            <span>Female</span>
                        </label>
                    </div>
                </div>

              
                <div class="form-group text-center mt-5" style="width: 80px;">
                    <label for="" style="color:dimgray;">Adviser ID</label>
                    <input type="text" name="user_id" class="form-control text-center"
                        value="{{ $advisoryStud->user->id }}" readonly>
                </div>
            
            

                <div class="form-group mb-3 d-flex justify-content-end">
                    <button type="submit" class="btn btn-success"><span class="fas fa-save"></span> Save
                        Changes</button>

                </div>
            </form>
        </div>
    </div>
@endsection
