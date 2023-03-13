@extends('layouts.layoutsidebar')

@section('content')
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">

    </head>

    <body>


        @if ($message = Session::get('status'))
            <div class="alert alert-success  alert-dismissible fade show " role="alert">
                <button type="button" class="close" data-dismiss="alert" style="color:black;">×</button>
                <strong>{{ $message }}</strong>
            </div>
        @endif


        <h1
            style="color:dimgray; font-size:22px; margin-left:20px; position:relative; top:15px; font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif">
            DASHBOARD</h1>


        <section class="content mt-5">
            <div class="container-fluid">
                <!-- Small boxes (Stat box) -->
                <div class="row">
                    <!-- ./col -->
                    <div class="col-lg-3 col-6">
                        <!-- small box -->
                        <div class="small-box bg-light text-secondary elevation-4">
                            <div class="inner">
                                <h3>{{ $student7 }}</h3>

                                <p class="text-secondary">Grade 7 Students</p>
                            </div>
                            <div class="icon">
                                <i class="fas fa-users text-secondary"></i>
                            </div>
                            <a href="#" class="small-box-footer bg-info text-light"><span
                                    class="text-light"></span></a>
                        </div>
                    </div>
                    <!-- ./col -->
                    <div class="col-lg-3 col-6">
                        <!-- small box -->
                        <div class="small-box bg-light text-secondary elevation-4">
                            <div class="inner">
                                <h3>{{ $student8 }}</h3>

                                <p class="text-secondary">Grade 8 Students</p>
                            </div>
                            <div class="icon">
                                <i class="fas fa-users text-secondary"></i>
                            </div>
                            <a href="#" class="small-box-footer bg-info text-light"><span
                                    class="text-light"></span></a>
                        </div>
                    </div>
                    <!-- ./col -->
                    <div class="col-lg-3 col-6">
                        <!-- small box -->
                        <div class="small-box bg-light text-secondary elevation-4">
                            <div class="inner">
                                <h3>{{ $student9 }}</h3>

                                <p class="text-secondary">Grade 9 Students</p>
                            </div>
                            <div class="icon">
                                <i class="fas fa-users text-secondary"></i>
                            </div>
                            <a href="#" class="small-box-footer bg-info text-light"><span
                                    class="text-light"></span></a>
                        </div>
                    </div>
                    <!-- ./col -->
                    <div class="col-lg-3 col-6">
                        <!-- small box -->
                        <div class="small-box bg-light text-secondary elevation-4">
                            <div class="inner">
                                <h3>{{ $student10 }}</h3>

                                <p class="text-secondary">Grade 10 Students</p>
                            </div>
                            <div class="icon">
                                <i class="fas fa-users text-secondary"></i>
                            </div>
                            <a href="#" class="small-box-footer bg-info text-light"><span
                                    class="text-light"></span></a>
                        </div>
                    </div>
                    <!-- ./col -->
                    <div class="col-lg-3 col-6">
                        <!-- small box -->
                        <div class="small-box bg-light text-secondary elevation-4">
                            <div class="inner">
                                <h3>{{ $student11 }}</h3>

                                <p class="text-secondary">Grade 11 Students</p>
                            </div>
                            <div class="icon">
                                <i class="fas fa-users text-secondary"></i>
                            </div>
                            <a href="#" class="small-box-footer bg-info text-light"><span
                                    class="text-light"></span></a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-6">
                        <!-- small box -->
                        <div class="small-box bg-light text-secondary elevation-4">
                            <div class="inner">
                                <h3>{{ $student12 }}</h3>

                                <p class="text-secondary">Grade 12 Students</p>
                            </div>
                            <div class="icon">
                                <i class="fas fa-users text-secondary"></i>
                            </div>
                            <a href="#" class="small-box-footer bg-info text-light"><span
                                    class="text-light"></span></a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-6">
                        <!-- small box -->
                        <div class="small-box bg-light text-secondary elevation-4">
                            <div class="inner">
                                <h3>{{ $admin }}</h3>

                                <p class="text-secondary">Administrator</p>
                            </div>
                            <div class="icon">
                                <i class="fas fa-user-cog text-secondary"></i>
                            </div>
                            <a href="#" class="small-box-footer bg-info text-light"><span
                                    class="text-light"></span></a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-6">
                        <!-- small box -->
                        <div class="small-box bg-light text-secondary elevation-4">
                            <div class="inner">
                                <h3>{{ $user }}</h3>

                                <p class="text-secondary">Advisers</p>
                            </div>
                            <div class="icon">
                                <i class="fas fa-user-tie text-secondary"></i>
                            </div>
                            <a href="#" class="small-box-footer bg-info text-light"><span
                                    class="text-light"></span></a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-6">
                        <!-- small box -->
                        <div class="small-box bg-light text-secondary elevation-4">
                            <div class="inner">
                                <h3>{{ $anecdotal_records }}</h3>

                                <p class="text-secondary">Anecdotal Records</p>
                            </div>
                            <div class="icon">
                                <i class="fas fa-book text-secondary"></i>
                            </div>
                            <a href="#" class="small-box-footer bg-info text-light"><span
                                    class="text-light"></span></a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-6">
                        <!-- small box -->
                        <div class="small-box bg-light text-secondary elevation-4">
                            <div class="inner">
                                <h3>{{ $counseling_anecdotal_records }}</h3>

                                <p class="text-secondary">Counseling Records</p>
                            </div>
                            <div class="icon">
                                <i class="fas fa-book text-secondary"></i>
                            </div>
                            <a href="#" class="small-box-footer bg-info text-light"><span
                                    class="text-light"></span></a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-6">
                        <!-- small box -->
                        <div class="small-box bg-light text-secondary elevation-4">
                            <div class="inner">
                                <h3>{{ $student_information_sheets }}</h3>

                                <p class="text-secondary">Student Info Sheets</p>
                            </div>
                            <div class="icon">
                                <i class="fas fa-address-card text-secondary"></i>
                            </div>
                            <a href="#" class="small-box-footer bg-info text-light"><span
                                    class="text-light"></span></a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-6">
                        <!-- small box -->
                        <div class="small-box bg-light text-secondary elevation-4">
                            <div class="inner">
                                <h3>{{ $parent_conference_records }}</h3>

                                <p class="text-secondary">Conference Records</p>
                            </div>
                            <div class="icon">
                                <i class="fas fa-book text-secondary"></i>
                            </div>
                            <a href="#" class="small-box-footer bg-info text-light"><span
                                    class="text-light"></span></a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-6">
                        <!-- small box -->
                        <div class="small-box bg-light text-secondary elevation-4">
                            <div class="inner">
                                <h3>{{ $career_interest_test_results }}</h3>

                                <p class="text-secondary">Career Interest Results</p>
                            </div>
                            <div class="icon">
                                <i class="fas fa-newspaper text-secondary"></i>
                            </div>
                            <a href="#" class="small-box-footer bg-info text-light"><span
                                    class="text-light"></span></a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-6">
                        <!-- small box -->
                        <div class="small-box bg-light text-secondary elevation-4">
                            <div class="inner">
                                <h3>{{ $personality_test_results }}</h3>

                                <p class="text-secondary">Personality Test Results</p>
                            </div>
                            <div class="icon">
                                <i class="fas fa-newspaper text-secondary"></i>
                            </div>
                            <a href="#" class="small-box-footer bg-info text-light"><span
                                    class="text-light"></span></a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-6">
                        <!-- small box -->
                        <div class="small-box bg-light text-secondary elevation-4">
                            <div class="inner">
                                <h3>{{ $case_reports }}</h3>

                                <p class="text-secondary">Case Reports</p>
                            </div>
                            <div class="icon">
                                <i class="fas fa-book-open text-secondary"></i>
                            </div>
                            <a href="#" class="small-box-footer bg-info text-light"><span
                                    class="text-light"></span></a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-6">
                        <!-- small box -->
                        <div class="small-box bg-info text-light elevation-4">
                            <div class="inner">
                                <h3>{{ $exit_forms }}</h3>

                                <p class="text-light">Exit Forms</p>
                            </div>
                            <div class="icon">
                                <i class="fas fa-address-book text-light"></i>
                            </div>
                            <a href="#" class="small-box-footer bg-secondary text-light"><span
                                    class="text-light"></span></a>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <div class="card d-flex justify-content-end col-md-12" style="padding:3px;">

            <h2 style="color: dimgray; font-size:20px;" class="d-flex justify-content-between mb-3 mt-2 ">List of Advisers
            </h2>
            <div class="mx-auto">
                <a class="btn btn-danger mb-2 mr-2" style="" href="{{ route('export_advisers_pdf') }}"><span
                        class="fas fa-file-pdf" style="font-size: 15px;"></span> Generate PDF</a>
                <a href="/export_advisers_excel" style="" class="mb-2 ml-2 btn btn-success"><span
                        class="fas fa-file-excel" style="font-size: 15px;"></span> Export to Excel</a>
            </div>
            <div class="card-body">
                <div class="search" style=" margin-bottom:10px;">
                    <div class="mx-auto pull-left">
                        <form action="{{ route('home') }}" method="GET" role="search">

                            <div class="input-group">
                                <span class="input-group-btn mr-2 mt-0">
                                    <button class="btn btn-info" type="submit" title="Search">
                                        <span class="fas fa-search"></span>
                                    </button>
                                </span>
                                <input type="text" class="form-control mr-2" name="adviser" placeholder="Search..."
                                    id="adviser">
                                <a href="{{ route('home') }}" class=" mt-0">
                                    <span class="input-group-btn">
                                        <button class="btn btn-danger" type="button" title="Refresh page">
                                            <span class="fas fa-sync-alt"></span>
                                        </button>
                                    </span>
                                </a>
                            </div>
                        </form>
                    </div>
                </div>

                <table class="table table-sm table-hover text-dark elevation-2 rounded table-borderless text-center">
                    <thead style="background-color: rgb(219, 219, 219)">
                        <tr>


                            <th style="text-align: center">Status</th>
                            <th style="text-align: center">Profile Image</th>
                            <th style="text-align: center">Name</th>
                            <th class="d-none d-md-table-cell d-lg-table-cell d-xl-table-cell" style="text-align: center">
                                Adviser ID</th>
                            <th style="text-align: center">Advisory</th>
                            <th class="d-none d-md-table-cell d-lg-table-cell d-xl-table-cell" style="text-align: center">
                                Role</th>
                            <th class="d-none d-md-table-cell d-lg-table-cell d-xl-table-cell" style="text-align: center">
                                Contact No</th>
                            <th class="d-none d-md-table-cell d-lg-table-cell d-lg-table-cell" style="text-align: center">
                                Email</th>
                            <th style="text-align: center">Edit</th>
                            <th class="d-none d-md-table-cell d-lg-table-cell d-xl-table-cell" style="text-align: center">
                                Delete</th>
                        </tr>
                    </thead>
                    <tbody>

                        @forelse ($adviser as $item)
                            <tr class="text-center">

                                <td>
                                    @if (Cache::has('is_online' . $item->id))
                                        <span class="logged-in bg-success btn-xs p-1 rounded"
                                            style=" color:white; font-size">Online</span>
                                    @else
                                        <span class="logged-in bg-secondary btn-xs p-1 rounded"
                                            style=" color:white;">Offline</span>
                                    @endif
                                    <div style="font-size: 12px;">
                                        @if ($item->last_seen != null)
                                            {{ \Carbon\Carbon::parse($item->last_seen)->diffForHumans() }}
                                        @else
                                            No data
                                        @endif
                                    </div>
                                </td>

                                <td> <img src="{{ asset('storage/users-avatar/' . $item->avatar) }} " width="50px"
                                        height="50px" alt="Image" style="border-radius: 50%"></td>
                                <td>{{ $item->name }}</td>
                                <td class="d-none d-md-table-cell d-lg-table-cell d-xl-table-cell">{{ $item->adviser_id }}
                                </td>
                                <td>{{ $item->advisory }}</td>
                                <td class="d-none d-md-table-cell d-lg-table-cell d-xl-table-cell">
                                    {{ $item->admin ? 'Guidance Designate' : 'Adviser' }}</td>
                                <td class="d-none d-md-table-cell d-lg-table-cell d-xl-table-cell">{{ $item->contact_no }}
                                </td>
                                <td class="d-none d-md-table-cell d-lg-table-cell d-xl-table-cell">{{ $item->email }}
                                </td>
                                <td><a href="{{ url('edit-adviser/' . $item->id) }}" class="btn btn-warning btn-sm "><i
                                            class="fas fa-user-edit text-dark"></i></a></td>


                                <td class="d-none d-md-table-cell d-lg-table-cell d-xl-table-cell"><a href="#"
                                        data-toggle="modal" id="advisers_delete_link" class="btn btn-danger btn-sm"
                                        data-target="#advisers_id{{ $item->id }}"><span
                                            class=" fas fa-trash-alt"></span></a></td>

                                <div class="modal fade" id="advisers_id{{ $item->id }}" tabindex="-1"
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

                                                <form action="{{ url('delete-adviser/' . $item->id) }}" method="GET"
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

                            </tr>

                        @empty
                            <tr>
                                <td colspan="8" class="text-dark"><span
                                        class="fas fa-exclamation-circle text-danger"></span> No Advisers
                                    Found!</td>
                            </tr>
                        @endforelse

                    </tbody>
                </table>
                <div class="mt-1 d-flex justify-content-center">
                    {{ $adviser->onEachSide(1)->links() }}
                </div>
            </div>
        </div>


        <div class="card text-center mt-5 col-md-8" style="margin:auto;">
            <h3 style="color: dimgray; font-size: 20px;">
                <div class="nav-item" style="position:relative; top:-30px; margin:auto; width: 200px;">

                    <form action="{{ url('/add_new_meeting') }}" method="POST">
                        @csrf

                        <button type="button" class="btn btn-primary" data-toggle="modal"
                            data-target="#exampleModalCenter"
                            style="font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;"> <span
                                class="fas fa-calendar-check"></span>
                            Create Meeting
                        </button>
                        <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
                            aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header bg-info">
                                        <h5 class="modal-title" id="exampleModalLongTitle" style="font-weight:400">
                                            Creating Meeting...</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="form-group">
                                            <label for=""
                                                style="color:dimgray; font-weight:500; font-size: 16px;">Title:
                                            </label>
                                            <textarea id="" type="text" class="form-control" title="" rows="2" required
                                                name="title_of_the_meeting" placeholder="Write the title of the meeting"></textarea>
                                        </div>

                                        <div class="form-group mt-3">
                                            <label for=""
                                                style="color:dimgray; font-weight:500; font-size: 16px; "> Location:
                                            </label>
                                            <input type="text" class="form-control"
                                                placeholder="Location of the meeting" name="location_of_the_meeting"
                                                required>
                                        </div>

                                        <div class="form-group mt-3">
                                            <label for=""
                                                style="color:dimgray; font-weight:500; font-size: 16px; ">Date and Time:
                                            </label>
                                            <input type="datetime-local" class="form-control" name="meeting_date_time"
                                                required>
                                        </div>

                                    </div>
                                    <div class="modal-footer">
                                        <button type="submit" class="btn btn-primary"><span class="fas fa-save"></span>
                                            Save</button>
                                    </div>
                                </div>
                            </div>
                    </form>
                </div>


        </div>
        <img src="/images/image17.png" class="user-image img-circle " alt="User Image"
            style=" height:50px; width: 60px;">
        Meeting Schedules
        </h3>
        <form action="{{ url('send-meeting/') }}" method="POST" accept-charset="UTF-8">
            @csrf
            <table class="table table-sm">
                <thead>
                    <tr>
                        <th class="text-dark bg-secondary" style="text-align: center">Title</th>
                        <th class="text-dark bg-secondary" style="text-align: center">Location</th>
                        <th class="text-dark bg-secondary" style="text-align:center">Date and Time</th>
                        <th class="text-dark bg-secondary" style="text-align:center">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($meetings as $sched)
                        <tr class="text-dark">

                            <td>{{ $sched->title_of_the_meeting }}</td>
                            <td>{{ $sched->location_of_the_meeting }}</td>
                            <td>{{ Carbon\Carbon::parse($sched->meeting_date_time)->format('F d,  Y - g:i A') }}</td>
                            <td><a href="{{ url('meeting-delete/' . $sched->id) }}" class="btn btn-danger btn-xs "><i
                                        class="fas fa-trash"></i></a></td>

                        </tr>
                    @empty
                        <tr>
                            <td colspan="5" class="text-dark"><span
                                    class="fas fa-exclamation-circle text-danger"></span> No scheduled meetings found!</td>
                        </tr>
                    @endforelse

                </tbody>
            </table>
            <button type="submit" class="btn btn-sm input-group-center bg-success mb-1 ">Send to all</button>
        </form>
        </div>
        </div>
        </div>
        <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    </body>

    <script>
        setTimeout(function() {
            $(' .alert-dismissible').fadeOut('slow');
        }, 1000);
    </script>

    </html>


    <style scoped>
        .cardBox {
            position: relative;
            width: 100%;
            color: black;
            padding: 20px;
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            grid-gap: 25px;
        }

        .cardBox .card {
            position: relative;

            padding: 10px;
            border-radius: 15px;
            display: flex;
            justify-content: space-between;
            cursor: pointer;
            box-shadow: 0 7px 25px rgba(0, 0, 0, 0.08);
        }

        .cardBox .card .numbers {
            position: relative;
            font-weight: 700;
            font-size: 1.5em;
            color: #39C0ED;
        }

        .cardBox .card .cardName {
            color: #262626;
            font-size: 1.0em;
            margin-top: 5px;

        }

        .cardBox .card .iconBx {
            font-size: 2.5em;
            color: dimgray;

        }

        .cardBox .card:hover {
            background-color: #17a2b8;
        }

        .cardBox .card:hover .numbers,
        .cardBox .card:hover .cardName,
        .cardBox .card:hover .iconBx {
            color: white;
        }



        * {
            box-sizing: border-box;
        }


        .column {
            float: left;
            width: 25%;
            padding: 0 10px;
        }

        /* Remove extra left and right margins, due to padding */
        .row {
            margin: 0 -5px;
        }

        /* Clear floats after the columns */
        .row:after {
            content: "";
            display: table;
            clear: both;
        }


        @media screen and (max-width: 600px) {
            .column {
                width: 100%;
                display: block;
                margin-bottom: 20px;
            }
        }
    </style>
@endsection
