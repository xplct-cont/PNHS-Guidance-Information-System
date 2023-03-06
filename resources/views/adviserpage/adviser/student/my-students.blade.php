@extends('adviserpage.app')

@section('content')
    @if ($message = Session::get('status'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <button type="button" class="close" data-dismiss="alert" style="color:black;">×</button>
            <strong>{{ $message }}</strong>
        </div>
    @endif

    <a class="btn btn-secondary mt-3 ml-3" style="" href="{{ route('export_myStudents_pdf') }}"><span
            class="fas fa-file-pdf text-danger"></span> PDF</a>
    <a href="/export_myStudents_excel" class=" mt-3 ml-3 btn btn-secondary"><span
            class="fas fa-file-excel text-success"></span> Excel</a>

    <div class="card col-md-12 d-flex justify-content-between bg-dark mt-2">
        <div class="card-header text-secondary">
            <h4 class="d-none d-md-table-cell d-lg-table-cell d-xl-table-cell"
                style="position: absolute; left:40%; color:whitesmoke; margin:auto; font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; font-size: 20px;">
                {{ Auth::user()->advisory }} Students</h4>

            <a href="{{ url('/students/create') }}" class="btn btn-primary"><span class="fas fa-user-graduate mr-1"></span>
                Add New Student
            </a>

        </div>

        <div class="card-body bg-light">

            <div class="search" style="position:relative; top: -10px;">
                <div class="mx-auto" style="width:300px;">
                    <form action="{{ route('advisory-list-students') }}" method="GET" role="search">

                        <div class="input-group">
                            <span class="input-group-btn mr-2 mt-0">
                                <button class="btn btn-info" type="submit" title="Search Full Name">
                                    <span class="fas fa-search"></span>
                                </button>
                            </span>
                            <input type="text" class="form-control mr-2" name="student" placeholder="Search"
                                id="student">
                            <a href="{{ route('advisory-list-students') }}" class=" mt-0">
                                <span class="input-group-btn">
                                    <button class="btn btn-danger" type="button" title="Refresh page">
                                        <span class="fas fa-sync-alt"></span>
                                    </button>
                                </span>
                            </a>
                        </div>
                    </form>
                </div>

                <div class="d-flex justify-content-end text-dark">
                    <p class="text-dark">Number of {{ Auth::user()->advisory }} Students : &nbsp;
                    <p class="text-dark" style="font-weight: bold;">{{ $countmyStudents }}</p>
                    </p>
                </div>


                <table class="table table-sm text-center elevation-3 table-hover mt-2">
                    <thead class="bg-info">
                        <tr>

                            <th scope="col">View Records</th>
                            <th scope="col" class="d-none d-md-table-cell d-lg-table-cell d-xl-table-cell"
                                style="text-align: center">Student ID</th>
                            <th scope="col">Last Name</th>
                            <th scope="col" class="d-none d-md-table-cell d-lg-table-cell d-xl-table-cell"
                                style="text-align: center">First Name</th>
                            <th scope="col" class="d-none d-md-table-cell d-lg-table-cell d-xl-table-cell"
                                style="text-align: center">Middle Name</th>
                            <th scope="col" class="d-none d-md-table-cell d-lg-table-cell d-xl-table-cell"
                                style="text-align: center">Year/Section</th>
                            <th scope="col" class="d-none d-md-table-cell d-lg-table-cell d-xl-table-cell"
                                style="text-align: center">Gender</th>
                            <th scope="col" class="d-none d-md-table-cell d-lg-table-cell d-xl-table-cell"
                                style="text-align: center">Email</th>
                            <th scope="col" class="d-none d-md-table-cell d-lg-table-cell d-xl-table-cell"
                                style="text-align: center">Parent/s Phone No.</th>
                            <th scope="col" class="d-none d-md-table-cell d-lg-table-cell d-xl-table-cell"
                                style="text-align: center">Address</th>
                            <th scope="col" class="d-none d-md-table-cell d-lg-table-cell d-xl-table-cell"
                                style="text-align: center">School Year</th>
                            <th scope="col">Edit</th>
                            <th scope="col">Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($myStudents as $student)
                            <tr class="text-center">

                                <td><a href="{{ url('show-my-student/' . $student->id) }}"
                                        class="btn btn-success btn-sm "><span class="fas fa-mail-bulk"></span></a></td>
                                <td class="d-none d-md-table-cell d-lg-table-cell d-xl-table-cell"
                                    style="text-align: center">{{ $student->school_id }}</td>
                                <td>{{ $student->lastname }}</td>
                                <td class="d-none d-md-table-cell d-lg-table-cell d-xl-table-cell"
                                    style="text-align: center">{{ $student->firstname }}</td>
                                <td class="d-none d-md-table-cell d-lg-table-cell d-xl-table-cell"
                                    style="text-align: center">{{ $student->middlename }}</td>
                                <td class="d-none d-md-table-cell d-lg-table-cell d-xl-table-cell"
                                    style="text-align: center">{{ $student->year_section }}</td>
                                <td class="d-none d-md-table-cell d-lg-table-cell d-xl-table-cell"
                                    style="text-align: center">{{ $student->gender }}</td>
                                <td class="d-none d-md-table-cell d-lg-table-cell d-xl-table-cell"
                                    style="text-align: center">{{ $student->email }}</td>
                                <td class="d-none d-md-table-cell d-lg-table-cell d-xl-table-cell"
                                    style="text-align: center">{{ $student->parent_num }}</td>
                                <td class="d-none d-md-table-cell d-lg-table-cell d-xl-table-cell"
                                    style="text-align: center">{{ $student->address }}</td>
                                <td class="d-none d-md-table-cell d-lg-table-cell d-xl-table-cell"
                                    style="text-align: center">{{ $student->school_year }}</td>
                                <td><a href="{{ url('/students/edit/' . $student->id) }}"
                                        class="btn btn-warning btn-xs "><i class="fas fa-user-edit text-dark"></i></a>
                                </td>

                                <td><a href="#" data-toggle="modal" id="student_delete_link"
                                        class="btn btn-danger btn-sm"
                                        data-target="#delete_student_id{{ $student->id }}"><span
                                            class="text-light fas fa-trash-alt"></span></a></td>

                                <div class="modal fade" id="delete_student_id{{ $student->id }}" tabindex="-1"
                                    role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog " role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel"><span
                                                        class="fas fa-exclamation-circle text-danger"
                                                        style="font-size: 30px;"></span> </h5>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">

                                                <form action="{{ url('delete-student/' . $student->id) }}" method="GET"
                                                    enctype="multipart/form-data">
                                                    @csrf
                                                    @method('GET')

                                                    <div class="container mx-auto">
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
                            </tr>

                        @empty
                            <tr>
                                <td colspan="8" class="text-dark"><span
                                        class="fas fa-exclamation-circle text-danger"></span> No
                                    {{ Auth::user()->advisory }} Students Found!</td>
                            </tr>
                        @endforelse

                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div class="div d-flex justify-content-center" style="position: relative; top:-58px;">
        {{ $myStudents->onEachSide(1)->links() }}
    </div>
    <script>
        setTimeout(function() {
            $(' .alert-dismissible').fadeOut('slow');
        }, 1000);
    </script>
@endsection
