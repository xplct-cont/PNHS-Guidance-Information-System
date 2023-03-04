<ul style="position:relative; left: -38px; margin:auto; height: 50px;">
    <li class="nav-item list-unstyled">
        <a href="{{ url('/adminprofile') }}">
            <img src="/storage/users-avatar/{{ Auth::user()->avatar }}" class="user-image img-circle elevation-4"
                alt="User Image"
                style="width: 37px; height:37px; border-radius: 50%; background-color: #5bc0de; padding-left: 2px; padding-right:2px; padding-bottom:2px; padding-top: 2px;">
            <span class=""
                style="font-size: 13px; font-weight:bold; margin:auto; color:whitesmoke;">{{ Auth::user()->name }}</span><br></a>
        <p style="font-size: 10px; position:relative; top:-10px; left: 50px; ">Administrator</p>
        <hr size="1" color="white" style=" position:relative; width: 145px; left: 7px; top: -20px; ">
    </li>
</ul>

<li class="nav-item mt-4">
    <a href="{{ route('home') }}" class="nav-link {{ Request::is('home*') ? 'bg-info active' : '' }}">
        <p class="text-white">Dashboard</p>
        <i class="fas fa-tachometer-alt fa-pull-left fa-md text-white"></i>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('users') }}" class="nav-link {{ Request::is('users') ? 'bg-info active' : '' }}">
        <p class="text-white">Pending Requests</p>
        <i class="fas fa-exclamation-circle fa-pull-left fa-md text-white"></i>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('shs-parents') }}" class="nav-link {{ Request::is('shs-parents') ? 'bg-info active' : '' }}">
        <p class="text-white">Parents</p>
        <i class="fas fa-users fa-pull-left fa-md text-white"></i>
    </a>
</li>


<li class="nav-item ">
    <a href="{{ route('case-reports') }}" class="nav-link {{ Request::is('case-reports') ? 'bg-info active' : '' }}">
        <p class="text-white">Case Reports</p>
        <i class="fas fa-book-open fa-pull-left fa-md text-white"></i>
    </a>
</li>

<li class="nav-item ">
    <a href="{{ route('exit_interview_forms') }}" class="nav-link {{ Request::is('exit_interview_forms') ? 'bg-info active' : '' }}">
        <p class="text-white">Exit Interview Forms</p>
        <i class="fas fa-address-book fa-pull-left fa-md text-white"></i>
    </a>
</li>
{{-- 
@php
$bells = DB::table('ch_messages')->where('to_id', auth()->user()->id)->where('seen' , false)->count();
@endphp

<li class="nav-item">
    <a href="{{ url('guidance_information_system_chats') }}" class="nav-link {{ Request::is('guidance_information_system_chats') ? 'bg-info active' : '' }}">
        <p class="text-white">Chats <span class="badge badge-danger badge-counter">+{{$bells}}</span></p>
        <i class="fas fa-inbox fa-pull-left fa-md text-white"></i>
    </a>
</li>
 --}}

@php
    $advisers = DB::table('users')->where('approved_at', '!=', null)->orderBy('advisory', 'asc')->get();
@endphp
<div class="text-white text-center " style="padding:5px; font-size:15px; background-color:rgb(76, 76, 76);">All Sections</div>
<table class="table table-sm table-borderless">
    <tbody>
        @foreach ($advisers as $teachers)
        <tr>
            <td class="text-light" ><a class="text-light" style="margin-left: -15px;" href="{{ url('advisory-list/' . $teachers->id) }}">{{$teachers->advisory}} <i class="fas fa-user-friends fa-pull-left fa-md " style="margin-left: 10px; margin-right: 25px;"></i></a></td>
           
        </tr>
        @endforeach
    </tbody>
</table>

<style scoped>
    .nav-item p {
        position: relative;
        font-size: 16px;
        left: 3px;
        top: 1px;
        font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
        text-decoration: none;
        color: gainsboro;

    }

    p:hover {
        color: white;
    }


    i {
        margin-top: 5px;
        margin-left: -1px;
        color: gainsboro;
        font-size: 16px;

    }


    i:hover {
        color: white;
    }


    img {
        height: 45px;
        width: 45px;
    }
</style>
