@extends('layouts.layoutsidebar')

@section('content')
    @if ($message = Session::get('status'))
        <div class="alert alert-success alert-block">
            <button type="button" class="close" data-dismiss="alert" style="color:black;">×</button>
            <strong>{{ $message }}</strong>
        </div>
    @endif
    <div class="search" style="position:relative; top: 5px;">
        <div class="mx-auto" style="width:340px;">
            <form action="{{ url('advisory-list/' . $adviser->id) }}" method="GET" role="search">

                <div class="input-group">
                    <span class="input-group-btn mr-2 mt-0">
                        <button class="btn btn-info" type="submit" title="Search Name">
                            <span class="fas fa-search"></span>
                        </button>
                    </span>
                    <input type="text" class="form-control mr-2" name="adv" placeholder="Search" id="adv">
                    <a href="{{ url('advisory-list/' . $adviser->id) }}" class=" mt-0">
                        <span class="input-group-btn">
                            <button class="btn btn-danger" type="button" title="Refresh page">
                                <span class="fas fa-sync-alt"></span>
                            </button>
                        </span>
                    </a>
                </div>
            </form>
        </div>
        <a href="{{ url('/advisory-list/' . $adviser->id . '/add-new-student/') }}" class="btn btn-primary ml-2"
            style="margin-top: 10px;"><span class="fas fa-plus-circle mr-1"></span>
            New Student
        </a>
        <div class="container col-md-12 " style="position: relative; margin-top:1%;">
            <div class="row">
                <div class="col-md-12">
                    <div class="" style="margin-top: -12px;">
                        <div class="card-header" style="height: 60px;">
                            <h4 class="text-center mb-3"
                                style="font-size: 22px; color:dimgray; font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">
                                {{ $adviser->advisory }}</h4>
                        </div>
                        <div class="card-body">
                            <div class="" style="position: relative; top:-20px;">
                                <a class="btn btn-secondary mt-2 ml-2 mr-2" style=""
                                    href="{{ url('export_advStudents_pdf/' . $adviser->id) }}"><span
                                        class="fas fa-file-pdf text-danger" style="font-size: 15px;"></span> PDF</a>
                                <a href="{{ '/export_advStudents_excel/' . $adviser->id }}"
                                    class=" mt-2 ml-2 btn btn-secondary"><span class="fas fa-file-excel text-success"
                                        style="font-size: 15px;"></span> Excel</a>

                                <div class="d-flex justify-content-end">
                                    <p class="text-dark">Number of students : {{ $advstudent }}</p>
                                </div>
                            </div>

                            <form action="/multiple-delete" method="POST">
                                @csrf

                                <table class="table table-hover bg-light table-sm elevation-2"
                                    style="margin:auto; position:relative; top: -20px;">
                                    <thead class="bg-info rounded text-center">
                                        <tr>
                                            <th scope="col">Records</th>
                                            <th scope="col"
                                                class="d-none d-md-table-cell d-lg-table-cell d-xl-table-cell"
                                                style="text-align: center">Student ID</th>
                                            <th scope="col">Last Name</th>
                                            <th scope="col"
                                                class="d-none d-md-table-cell d-lg-table-cell d-xl-table-cell"
                                                style="text-align: center">First Name</th>
                                            <th scope="col"
                                                class="d-none d-md-table-cell d-lg-table-cell d-xl-table-cell"
                                                style="text-align: center">Middle Name</th>
                                            <th scope="col"
                                                class="d-none d-md-table-cell d-lg-table-cell d-xl-table-cell"
                                                style="text-align: center">Year/Section</th>
                                            <th scope="col"
                                                class="d-none d-md-table-cell d-lg-table-cell d-xl-table-cell"
                                                style="text-align: center">Gender</th>
                                            <th scope="col"
                                                class="d-none d-md-table-cell d-lg-table-cell d-xl-table-cell"
                                                style="text-align: center">Email</th>
                                            <th scope="col"
                                                class="d-none d-md-table-cell d-lg-table-cell d-xl-table-cell"
                                                style="text-align: center">Parent/s Phone No.</th>
                                            <th scope="col"
                                                class="d-none d-md-table-cell d-lg-table-cell d-xl-table-cell"
                                                style="text-align: center">Address</th>
                                            <th scope="col"
                                                class="d-none d-md-table-cell d-lg-table-cell d-xl-table-cell"
                                                style="text-align: center">School Year</th>
                                            <th scope="col">Edit</th>
                                            <th scope="col">Delete</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($advStudents as $adv)
                                            <tr class="text-center">

                                                <td><a href="{{ url('/advisory-list/' . $adv->user->id . '/show-student/' . $adv->id) }}"
                                                        class="btn btn-success btn-sm "><span
                                                            class="fas fa-mail-bulk"></span></a></td>
                                                <td class="d-none d-md-table-cell d-lg-table-cell d-xl-table-cell"
                                                    style="text-align: center">{{ $adv->school_id }}</td>
                                                <td>{{ $adv->lastname }}</td>
                                                <td class="d-none d-md-table-cell d-lg-table-cell d-xl-table-cell"
                                                    style="text-align: center">{{ $adv->firstname }}</td>
                                                <td class="d-none d-md-table-cell d-lg-table-cell d-xl-table-cell"
                                                    style="text-align: center">{{ $adv->middlename }}</td>
                                                <td class="d-none d-md-table-cell d-lg-table-cell d-xl-table-cell"
                                                    style="text-align: center">{{ $adv->year_section }}</td>
                                                <td class="d-none d-md-table-cell d-lg-table-cell d-xl-table-cell"
                                                    style="text-align: center">{{ $adv->gender }}</td>
                                                <td class="d-none d-md-table-cell d-lg-table-cell d-xl-table-cell"
                                                    style="text-align: center">{{ $adv->email }}</td>
                                                <td class="d-none d-md-table-cell d-lg-table-cell d-xl-table-cell"
                                                    style="text-align: center">{{ $adv->parent_num }}</td>
                                                <td class="d-none d-md-table-cell d-lg-table-cell d-xl-table-cell"
                                                    style="text-align: center">{{ $adv->address }}</td>
                                                <td class="d-none d-md-table-cell d-lg-table-cell d-xl-table-cell"
                                                    style="text-align: center">{{ $adv->school_year }}</td>
                                                <td><a href="{{ url('advisory-list/' . $adv->user->id . '/edit/' . $adv->id) }}"
                                                        class="btn btn-warning btn-xs "><i
                                                            class="fas fa-user-edit text-dark"></i></a></td>
                                                <td><input type="checkbox" name="ids[]" value="{{ $adv->id }}">
                                                </td>
                                            </tr>
                                        @empty
                                            <tr>
                                                <td colspan="5" class="text-dark"><span
                                                        class="fas fa-exclamation-circle text-danger"></span> No students
                                                    found!</td>
                                            </tr>
                                        @endforelse
                                    </tbody>
                                </table>
                                <div class="d-flex justify-content-end">
                                    <button type="button" class="btn btn-danger btn-sm" style=" color:white;"
                                        data-toggle="modal" data-target="#exampleModal"> Delete Students
                                    </button>
                                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
                                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-md" role="document">
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
                                                    <form action="/multiple-delete" method="POST"
                                                        enctype="multipart/form-data">
                                                        @csrf

                                                        <div class="container mx-auto text-dark">
                                                            Are you sure you want to delete this students permanently?
                                                        </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="submit" class="btn btn-danger"><span
                                                            class="fas fa-trash"></span> Delete Permanently</button>
                                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </form>
        <div class=" d-flex justify-content-center">
            {{ $advStudents->onEachSide(1)->links() }}
        </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
@endsection
