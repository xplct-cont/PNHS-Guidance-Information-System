@extends('layouts.layoutsidebar')

@section('content')
    <a href="{{ url('/advisory-list/' . $adviser->id) }}"><span class="fas fa-arrow-left" style="font-size: 20px;"></span> </a>

    <div class="row d-flex justify-content-center text-dark">
        <div class="mx-auto text-center mb-3 mt-3">
            <img src="/images/image17.png" class="user-image" alt="User Image"
                style="width: 300px; height:240px; padding-left: 2px; padding-right:2px; padding-bottom:2px; padding-top: 2px;">

            <h1 class="mb-3 mt-3"
                style="color:whitesmoke; margin:auto; font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; font-size: 25px; color:dimgray;">
                {{ $adviser->advisory }}</h1>
        </div>

        <div class="col-md-8 p-3 mt-3 rounded bg-light">
            @if ($message = Session::get('status'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <button type="button" class="close" data-dismiss="alert" style="color:black;">×</button>
                    <strong>{{ $message }}</strong>
                </div>
            @endif

            <div class="container ">
                <form action="{{ url('/add-new-student') }}" method="POST">
                    @csrf

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="" style="color:dimgray;">Student ID</label>
                                <input type="text" name="school_id" class="form-control" placeholder="XXXXXXX" required>

                            </div>

                            <div class="form-group">
                                <label for="" style="color:dimgray;">Lastname</label>
                                <input type="text" name="lastname" class="form-control" placeholder="Enter Last Name"
                                    required>

                            </div>
                            <div class="form-group">
                                <label for="" style="color:dimgray;">Firstname</label>
                                <input type="text" name="firstname" class="form-control" placeholder="Enter First Name"
                                    required>

                            </div>
                            <div class="form-group">
                                <label for="" style="color:dimgray;">Middlename</label>
                                <input type="text" name="middlename" class="form-control" placeholder="Enter Middle Name"
                                    required>

                            </div>

                            @foreach ($Adviser as $Adv)
                                <div class="form-group">
                                    <label for="" style="color:dimgray;">Year/Section</label>
                                    <input type="text" name="year_section" class="form-control"
                                        value="{{ $Adv->advisory }}" readonly>
                                </div>
                            @endforeach

                            <div class="form-group">
                                <label for="" style="color:dimgray;">Age</label>
                                <input type="text" name="age" class="form-control" placeholder="Enter Age" required>

                            </div>
                            <div class="form-group text-dark">
                                <div class="maxl">
                                    <label class="radio inline">
                                        <input type="radio" name="gender" value="Male" checked>
                                        <span> Male </span>
                                    </label>
                                    <label class="radio inline">
                                        <input type="radio" name="gender" value="Female">
                                        <span>Female </span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="" style="color:dimgray;">Student Email</label>
                                <input type="email" name="email" class="form-control" placeholder="Enter Student Email"
                                    required>

                            </div>
                            <div class="form-group">
                                <label for="" style="color:dimgray;">Parent/Guardian Name</label>
                                <input type="text" name="parent_name" class="form-control"
                                    placeholder="Enter Parent/Guardian Full Name" required>

                            </div>

                            <div class="form-group">
                                <label for="" style="color:dimgray;">Parent Email</label>
                                <input type="email" name="parent_email" class="form-control"
                                    placeholder="Enter Parent/Guardian Email ">

                            </div>

                            <div class="form-group">
                                <label for="" style="color:dimgray;">Parent Phone No.</label>
                                <input type="text" id="parent_num" name="parent_num"
                                    class="form-control @error('parent_num') is-invalid @enderror" name="parent_num"
                                    value="{{ old('parent_num') }}" placeholder="Enter Parent/Guardian phone number "
                                    required>

                                @error('parent_num')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="" style="color:dimgray;">Address</label>
                                <input type="text" name="address" class="form-control" placeholder="Enter Address"
                                    required>

                            </div>

                            <div class="form-group">
                                <label for="" style="color:dimgray;">School Year</label>
                                <input type="text" name="school_year" class="form-control"
                                    placeholder="Enter School Year" required required>

                            </div>

                            @foreach ($Adviser as $Adv)
                                <div class="form-group text-center mt-5" style="width: 80px;">
                                    <label for="" style="color:dimgray;">Adviser ID</label>
                                    <input type="text" name="user_id" class="form-control text-center"
                                        value="{{ $Adv->id }}" readonly>
                                </div>
                            @endforeach
                            <div class="form-group mb-3 d-flex justify-content-end">
                                <button type="submit" class="btn btn-success"><span class="fas fa-save"></span>
                                    Save</button>

                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    </div>
    <script>
        setTimeout(function() {
            $(' .alert-dismissible').fadeOut('slow');
        }, 1000);
    </script>
@endsection
