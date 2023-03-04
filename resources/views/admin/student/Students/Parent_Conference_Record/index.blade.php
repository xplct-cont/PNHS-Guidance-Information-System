@extends('layouts.layoutsidebar')

@section('content')
    @if ($message = Session::get('status'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <button type="button" class="close" data-dismiss="alert" style="color:black;">×</button>
            <strong>{{ $message }}</strong>
        </div>
    @endif

    <div class="p-1">
        <a class="fas fa-arrow-left" style="font-size:20px; color:blue;"
            href="{{ url('advisory-list/' . $student_wis->user->id . '/show-student/' . $student_wis->id) }}"></a>
    </div>
    <h1 class="text-dark p-3"
        style="font-weight:normal; font-size: 25px; font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; ">
        Parent Conference Records of {{ $student_wis->lastname }}, {{ $student_wis->firstname }} from
        {{ $student_wis->year_section }}</h1>
    <hr>

    <div class="" style="">
        <div class="card">
            <div class="card-header text-center">
                <h1 class="text-dark "
                    style="font-weight:normal; font-size: 25px; font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; ">
                    List of Records
                </h1>

                <div class="d-flex justify-content-end">
                    <a href="{{ url('show-student/' . $student_wis->id . '/parent_conference_record/create/') }}"
                        class="btn btn-primary ml-2" style="margin-top: 0px;"><span class=" mr-1"></span>
                        Create New Record
                    </a>
                </div>
                <hr>
                <table class="table table-striped  table-sm text-dark text-center bg-light">
                    <thead class="bg-secondary">
                        <tr>

                            <th>Date</th>
                            <th>Reasons for Contact</th>
                            <th>View</th>~
                            <th>Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($parent_conference_record_wisdom as $parent_confer_wis)
                            <tr>
                                <td class="text-dark">{{ $parent_confer_wis->date->format('F d,  Y - l') }}</td>
                                <td class="text-dark">{{ $parent_confer_wis->reason_for_contact }}</td>
                                <td><a href="{{ url('/show-student/' . $parent_confer_wis->student->id . '/parent_conference_record/' . $parent_confer_wis->id) }}"
                                        class="btn btn-xs "><i class="fas fa-search text-info"></i></a></td>
                                <td><a href="#" data-toggle="modal" id="parent_confer_wis_delete_link"
                                        class="btn  btn-sm"
                                        data-target="#parent_confer_wis_id{{ $parent_confer_wis->id }}"><span
                                            class=" text-danger fas fa-trash-alt"></span></a></td>

                                <div class="modal fade" id="parent_confer_wis_id{{ $parent_confer_wis->id }}"
                                    tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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

                                                <form
                                                    action="{{ url('delete_parent_conference_record/' . $parent_confer_wis->id) }}"
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
                            </tr>
                        @empty
                            <tr>
                                <td colspan="5" class="text-dark"><span
                                        class="fas fa-exclamation-circle text-danger"></span> Empty Parent Conference
                                    Records!</td>
                            </tr>
                        @endforelse

                    </tbody>
                </table>
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
