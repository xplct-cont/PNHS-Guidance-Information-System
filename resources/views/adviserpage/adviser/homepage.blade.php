@extends('adviserpage.app')

@section('content')
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
                        <a href="#" class="small-box-footer bg-info text-light"><span class="text-light"></span></a>
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
                        <a href="#" class="small-box-footer bg-info text-light"><span class="text-light"></span></a>
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
                        <a href="#" class="small-box-footer bg-info text-light"><span class="text-light"></span></a>
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
                        <a href="#" class="small-box-footer bg-info text-light"><span class="text-light"></span></a>
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
                        <a href="#" class="small-box-footer bg-info text-light"><span class="text-light"></span></a>
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
                        <a href="#" class="small-box-footer bg-info text-light"><span class="text-light"></span></a>
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
                        <a href="#" class="small-box-footer bg-info text-light"><span class="text-light"></span></a>
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
                        <a href="#" class="small-box-footer bg-info text-light"><span class="text-light"></span></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="card d-flex justify-content-end col-md-12" style="padding:3px;">
        <h2 style="color: dimgray; font-size:20px;" class="d-flex justify-content-between mb-3 mt-2 ">List of Advisers
        </h2>

        <div class="card-body">
            <div class="search" style=" margin-bottom:10px;">
                <div class="mx-auto pull-left">
                    <form action="{{ route('homepage') }}" method="GET" role="search">

                        <div class="input-group">
                            <span class="input-group-btn mr-2 mt-0">
                                <button class="btn btn-info" type="submit" title="Search">
                                    <span class="fas fa-search"></span>
                                </button>
                            </span>
                            <input type="text" class="form-control mr-2" name="adviser" placeholder="Search..."
                                id="adviser">
                            <a href="{{ route('homepage') }}" class=" mt-0">
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
                                {{ $item->admin ? 'Administrator' : 'Adviser' }}</td>
                            <td class="d-none d-md-table-cell d-lg-table-cell d-xl-table-cell">{{ $item->contact_no }}
                            </td>
                            <td class="d-none d-md-table-cell d-lg-table-cell d-xl-table-cell">{{ $item->email }}
                            </td>
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

    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

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
    </style>
@endsection
