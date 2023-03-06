@extends('adviserpage.app')

@section('content')
    <a href="{{ url('/advisory-list-students') }}"><span class="fas fa-arrow-left" style="font-size: 20px;"></span> </a>

    <div class="row d-flex justify-content-center text-dark">
        <div class="mx-auto text-center mb-3">
            <img src="/images/image17.png" class="user-image img-circle elevation-2 mt-3" alt="User Image"
                style="width: 200px; height:200px; border-radius: 50%; background-color: #5bc0de; padding-left: 2px; padding-right:2px; padding-bottom:2px; padding-top: 2px;">

            <h1 class="mb-3 mt-3"
                style="color:whitesmoke; margin:auto; font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; font-size: 25px; color:dimgray;">
                Name: {{ $student->firstname }} {{ $student->lastname }}</h1>
        </div>

        <div class="col-md-8 p-3 mt-3 rounded bg-light">
            @if ($message = Session::get('status'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <button type="button" class="close" data-dismiss="alert" style="color:black;">×</button>
                    <strong>{{ $message }}</strong>
                </div>
            @endif

            <div class="container">

                <form action="{{ url('update-my-student/' . $student->id) }}" method="POST" accept-charset="UTF-8">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="col-md-6">
                            <div class="input-group mb-3">
                                <label for="" style="color:dimgray;"><span class="input-group-text bg-secondary"
                                        style="width: 43px;">ID</span></label>
                                <input type="text" name="school_id" value="{{ $student->school_id }}"
                                    class="form-control" required>
                            </div>

                            <div class="input-group mb-3">
                                <label for="" style="color:dimgray;"><span class="input-group-text bg-secondary"
                                        style="width: 43px;">Ln</span></label>
                                <input type="text" name="firstname" value="{{ $student->firstname }}"
                                    class="form-control" required>
                            </div>

                            <div class="input-group mb-3">
                                <label for="" style="color:dimgray;"><span class="input-group-text bg-secondary"
                                        style="width: 43px;">Fn</span></label>
                                <input type="text" name="lastname" value="{{ $student->lastname }}" class="form-control"
                                    required>
                            </div>

                            <div class="input-group mb-3">
                                <label for="" style="color:dimgray;"><span class="input-group-text bg-secondary"
                                        style="width: 43px;">Mn</span></label>
                                <input type="text" name="middlename" value="{{ $student->middlename }}"
                                    class="form-control" required>
                            </div>

                            <div class="input-group mb-3">
                                <label for="" style="color:dimgray;"><span class="input-group-text bg-secondary"
                                        style="width: 43px;">Y/S</span></label>
                                <input type="text" name="year_section" value="{{ $student->year_section }}"
                                    class="form-control" readonly>
                            </div>

                            <div class="input-group mb-3">
                                <label for="" style="color:dimgray;"><span class="input-group-text bg-secondary"
                                        style="width: 43px;">Ag</span></label>
                                <input type="text" name="age" class="form-control" value="{{ $student->age }}"
                                    required>
                            </div>

                            <div class="input-group mb-3">
                                <label for="" style="color:dimgray;"><span
                                        class="fas fa-envelope input-group-text bg-secondary"
                                        style="width: 43px;"></span></label>
                                <input type="email" name="email" value="{{ $student->email }}" class="form-control"
                                    required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="input-group mb-3">
                                <label for="" style="color:dimgray;"><span class="input-group-text bg-secondary"
                                        style="width: 43px;">P.N</span></label>
                                <input type="text" name="parent_name" value="{{ $student->parent_name }}"
                                    class="form-control" required>
                            </div>



                            <div class="input-group mb-3">
                                <label for="" style="color:dimgray;"><span class=" input-group-text bg-secondary"
                                        style="width: 43px;">P.E</span></label>
                                <input type="email" name="parent_email" value="{{ $student->parent_email }}"
                                    class="form-control">
                            </div>

                            <div class="input-group mb-3">
                                <label for="" style="color:dimgray;"><span class="input-group-text bg-secondary"
                                        style="width: 43px;">P.#</span></label>
                                <input type="text" name="parent_num" class="form-control"
                                    value="{{ $student->parent_num }}">
                            </div>

                            <div class="input-group mb-3">
                                <label for="" style="color:dimgray;"><span class="input-group-text bg-secondary"
                                        style="width: 43px;">Ad</span></label>
                                <input type="text" name="address" value="{{ $student->address }}"
                                    class="form-control" required>
                            </div>

                            <div class="input-group mb-3">
                                <label for="" style="color:dimgray;"><span class="input-group-text bg-secondary"
                                        style="width: 43px;">SY</span></label>
                                <input type="text" name="school_year" value="{{ $student->school_year }}"
                                    class="form-control" required>
                            </div>

                            <div class="form-group text-dark d-flex justify-content-center">
                                <div class="maxl">
                                    <label class="radio inline mr-5">
                                        <input type="radio" name="gender" value="Male"
                                            {{ $student->gender == 'Male' ? ' checked' : 'Unchecked' }}>
                                        <span>Male</span>
                                    </label>
                                    <label class="radio inline">
                                        <input type="radio" name="gender" value="Female"
                                            {{ $student->gender == 'Female' ? ' checked' : 'Unchecked' }}>
                                        <span>Female</span>
                                    </label>
                                </div>
                            </div>

                            <div class="mb-3">
                                <button type="submit" class="btn btn-success float-right btn-sm"><span
                                        class="fas fa-save"></span> Save
                                    Changes</button>
                            </div>
                        </div>
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
