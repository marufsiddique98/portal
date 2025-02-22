<div class="header-container fixed-top">
    <header class="header navbar navbar-expand-sm">

        <ul class="navbar-item theme-brand flex-row  text-center">
            <li class="nav-item theme-logo" >
                @cannot('Student')
                    <a href={{route('admin.dashboard')}}>
                        <img  src= "{{ asset("img/arrow-down.png") }}" class="navbar-logo" alt="logo" style="width: 130px !important;">
                    </a>
                @endcannot
                @can('Student')
                    <a href={{route('student.dashboard')}}>
                        <img  src= "{{ asset("img/arrow-down.png") }}" class="navbar-logo" alt="logo" style="width: 130px !important;">
                    </a>
                @endcan
            </li>
            @cannot('Student')
                <li class="nav-item theme-text">
                    <a href="{{route('admin.dashboard')}}" class="nav-link"> Exam</a>
                </li>
            @endcannot
            @can('Student')
                <li class="nav-item theme-text">
                    <a href="{{route('student.dashboard')}}" class="nav-link"> Exam</a>
                </li>
            @endcan
        </ul>

        {{--            <ul class="navbar-item flex-row ml-md-0 ml-auto">--}}
        {{--                <li class="nav-item align-self-center search-animated">--}}
        {{--                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search toggle-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>--}}
        {{--                    <form class="form-inline search-full form-inline search" role="search">--}}
        {{--                        <div class="search-bar">--}}
        {{--                            <input type="text" class="form-control search-form-control  ml-lg-auto" placeholder="Search...">--}}
        {{--                        </div>--}}
        {{--                    </form>--}}
        {{--                </li>--}}
        {{--            </ul>--}}

        <ul class="navbar-item flex-row ml-md-auto">

            <li class="nav-item dropdown language-dropdown">
                <a href="javascript:void(0);" class="nav-link dropdown-toggle" id="language-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <img src= {{ asset("img/ca.png") }} class="flag-width" alt="flag">
                </a>
                <div class="dropdown-menu position-absolute" aria-labelledby="language-dropdown">
                    {{--                        <a class="dropdown-item d-flex" href="javascript:void(0);"><img src={{ asset("img/de.png") }} class="flag-width" alt="flag"> <span class="align-self-center">&nbsp;German</span></a>--}}
                    {{--                        <a class="dropdown-item d-flex" href="javascript:void(0);"><img src={{ asset("img/jp.png") }} class="flag-width" alt="flag"> <span class="align-self-center">&nbsp;Japanese</span></a>--}}
                    {{--                        <a class="dropdown-item d-flex" href="javascript:void(0);"><img src={{ asset("img/fr.png") }} class="flag-width" alt="flag"> <span class="align-self-center">&nbsp;French</span></a>--}}
                    <a class="dropdown-item d-flex" href="javascript:void(0);"><img src={{ asset("img/ca.png") }} class="flag-width" alt="flag"> <span class="align-self-center">&nbsp;English</span></a>
                </div>
            </li>

            {{--                <li class="nav-item dropdown message-dropdown">--}}
            {{--                    <a href="javascript:void(0);" class="nav-link dropdown-toggle" id="messageDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">--}}
            {{--                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-mail"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg>--}}
            {{--                    </a>--}}
            {{--                    <div class="dropdown-menu position-absolute" aria-labelledby="messageDropdown">--}}
            {{--                        <div class="">--}}
            {{--                            <a class="dropdown-item">--}}
            {{--                                <div class="">--}}

            {{--                                    <div class="media">--}}
            {{--                                        <div class="user-img">--}}
            {{--                                            <div class="avatar avatar-xl">--}}
            {{--                                                <span class="avatar-title rounded-circle">KY</span>--}}
            {{--                                            </div>--}}
            {{--                                        </div>--}}
            {{--                                        <div class="media-body">--}}
            {{--                                            <div class="">--}}
            {{--                                                <h5 class="usr-name">Kara Young</h5>--}}
            {{--                                                <p class="msg-title">ACCOUNT UPDATE</p>--}}
            {{--                                            </div>--}}
            {{--                                        </div>--}}
            {{--                                    </div>--}}

            {{--                                </div>--}}
            {{--                            </a>--}}
            {{--                            <a class="dropdown-item">--}}
            {{--                                <div class="">--}}
            {{--                                    <div class="media">--}}
            {{--                                        <div class="user-img">--}}
            {{--                                            <img src= {{ asset("img/90x90.jpg") }} class="img-fluid mr-2" alt="avatar">--}}
            {{--                                        </div>--}}
            {{--                                        <div class="media-body">--}}
            {{--                                            <div class="">--}}
            {{--                                                <h5 class="usr-name">Daisy Anderson</h5>--}}
            {{--                                                <p class="msg-title">ACCOUNT UPDATE</p>--}}
            {{--                                            </div>--}}
            {{--                                        </div>--}}
            {{--                                    </div>--}}
            {{--                                </div>--}}
            {{--                            </a>--}}
            {{--                            <a class="dropdown-item">--}}
            {{--                                <div class="">--}}

            {{--                                    <div class="media">--}}
            {{--                                        <div class="user-img">--}}
            {{--                                            <div class="avatar avatar-xl">--}}
            {{--                                                <span class="avatar-title rounded-circle">OG</span>--}}
            {{--                                            </div>--}}
            {{--                                        </div>--}}
            {{--                                        <div class="media-body">--}}
            {{--                                            <div class="">--}}
            {{--                                                <h5 class="usr-name">Oscar Garner</h5>--}}
            {{--                                                <p class="msg-title">ACCOUNT UPDATE</p>--}}
            {{--                                            </div>--}}
            {{--                                        </div>--}}
            {{--                                    </div>--}}

            {{--                                </div>--}}
            {{--                            </a>--}}
            {{--                        </div>--}}
            {{--                    </div>--}}
            {{--                </li>--}}

            {{--                <li class="nav-item dropdown notification-dropdown">--}}
            {{--                    <a href="javascript:void(0);" class="nav-link dropdown-toggle" id="notificationDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">--}}
            {{--                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-bell"><path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"></path><path d="M13.73 21a2 2 0 0 1-3.46 0"></path></svg><span class="badge badge-success"></span>--}}
            {{--                    </a>--}}
            {{--                    <div class="dropdown-menu position-absolute" aria-labelledby="notificationDropdown">--}}
            {{--                        <div class="notification-scroll">--}}

            {{--                            <div class="dropdown-item">--}}
            {{--                                <div class="media server-log">--}}
            {{--                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-server"><rect x="2" y="2" width="20" height="8" rx="2" ry="2"></rect><rect x="2" y="14" width="20" height="8" rx="2" ry="2"></rect><line x1="6" y1="6" x2="6" y2="6"></line><line x1="6" y1="18" x2="6" y2="18"></line></svg>--}}
            {{--                                    <div class="media-body">--}}
            {{--                                        <div class="data-info">--}}
            {{--                                            <h6 class="">Server Rebooted</h6>--}}
            {{--                                            <p class="">45 min ago</p>--}}
            {{--                                        </div>--}}

            {{--                                        <div class="icon-status">--}}
            {{--                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>--}}
            {{--                                        </div>--}}
            {{--                                    </div>--}}
            {{--                                </div>--}}
            {{--                            </div>--}}

            {{--                            <div class="dropdown-item">--}}
            {{--                                <div class="media ">--}}
            {{--                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-heart"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg>--}}
            {{--                                    <div class="media-body">--}}
            {{--                                        <div class="data-info">--}}
            {{--                                            <h6 class="">Licence Expiring Soon</h6>--}}
            {{--                                            <p class="">8 hrs ago</p>--}}
            {{--                                        </div>--}}

            {{--                                        <div class="icon-status">--}}
            {{--                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>--}}
            {{--                                        </div>--}}
            {{--                                    </div>--}}
            {{--                                </div>--}}
            {{--                            </div>--}}

            {{--                            <div class="dropdown-item">--}}
            {{--                                <div class="media file-upload">--}}
            {{--                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file-text"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line><polyline points="10 9 9 9 8 9"></polyline></svg>--}}
            {{--                                    <div class="media-body">--}}
            {{--                                        <div class="data-info">--}}
            {{--                                            <h6 class="">Kelly Portfolio.pdf</h6>--}}
            {{--                                            <p class="">670 kb</p>--}}
            {{--                                        </div>--}}

            {{--                                        <div class="icon-status">--}}
            {{--                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check"><polyline points="20 6 9 17 4 12"></polyline></svg>--}}
            {{--                                        </div>--}}
            {{--                                    </div>--}}
            {{--                                </div>--}}
            {{--                            </div>--}}
            {{--                        </div>--}}
            {{--                    </div>--}}
            {{--                </li>--}}

            <li class="nav-item dropdown user-profile-dropdown">
                <a href="javascript:void(0);" class="nav-link dropdown-toggle user" id="userProfileDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                    <img src="{{ request()->user()->profile_photo_url }}" alt="avatar">
                </a>
                <div class="dropdown-menu position-absolute" aria-labelledby="userProfileDropdown">
                    <div class="">
                        <div class="dropdown-item">
                            <a class="" href="{{route('user.profile')}}"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg> Profile</a>
                        </div>
                        {{--                            <div class="dropdown-item">--}}
                        {{--                                <a class="" href="apps_mailbox.html"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-inbox"><polyline points="22 12 16 12 14 15 10 15 8 12 2 12"></polyline><path d="M5.45 5.11L2 12v6a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2v-6l-3.45-6.89A2 2 0 0 0 16.76 4H7.24a2 2 0 0 0-1.79 1.11z"></path></svg> Inbox</a>--}}
                        {{--                            </div>--}}
                        {{--                            <div class="dropdown-item">--}}
                        {{--                                <a class="" href="auth_lockscreen.html"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-lock"><rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect><path d="M7 11V7a5 5 0 0 1 10 0v4"></path></svg> Lock Screen</a>--}}
                        {{--                            </div>--}}
                        <form method="POST" id="logout-form" action="{{ route('logout') }}">
                            @csrf
                        </form>
                        <div class="dropdown-item">
                            <a class="" href="{{ route('logout') }}" onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-log-out"><path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path><polyline points="16 17 21 12 16 7"></polyline><line x1="21" y1="12" x2="9" y2="12"></line>
                                </svg>
                                Sign Out
                            </a>
                        </div>
                    </div>
                </div>
            </li>

        </ul>
    </header>
</div>
<!--  END NAVBAR  -->

<!--  BEGIN NAVBAR  -->
{{--    <div class="sub-header-container">--}}
{{--        <header class="header navbar navbar-expand-sm">--}}
{{--            <a href="javascript:void(0);" class="sidebarCollapse" data-placement="bottom"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-menu"><line x1="3" y1="12" x2="21" y2="12"></line><line x1="3" y1="6" x2="21" y2="6"></line><line x1="3" y1="18" x2="21" y2="18"></line></svg></a>--}}
{{--@php--}}
{{--//$breadCrumbs = Auth::user()->breadCrumbs();--}}
{{--@endphp--}}
{{--            <ul class="navbar-nav flex-row">--}}
{{--                <li>--}}
{{--                    <div class="page-header">--}}

{{--                        <nav class="breadcrumb-one" aria-label="breadcrumb">--}}
{{--                            <ol class="breadcrumb">--}}
{{--                                <li class="breadcrumb-item"><a href="{{(request()->user()->cannot('Customer'))? route('admin.dashboard') : route('customer.dashboard')}}">Dashboard</a></li>--}}
{{--                                @foreach($breadCrumbs as $breadCrumb)--}}
{{--                                <li class="breadcrumb-item active" aria-current="page"><span>{{$breadCrumb}}</span></li>--}}
{{--                                @endforeach--}}
{{--                            </ol>--}}
{{--                        </nav>--}}

{{--                    </div>--}}
{{--                </li>--}}
{{--            </ul>--}}
{{--            @cannot('Customer')--}}
{{--            <ul class="navbar-nav flex-row ml-auto ">--}}
{{--                <li class="nav-item more-dropdown">--}}
{{--                    <div class="dropdown  custom-dropdown-icon">--}}
{{--                        <a class="dropdown-toggle btn" href="#" role="button" id="customDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span>Settings</span> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg></a>--}}

{{--                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="customDropdown">--}}
{{--                            <a class="dropdown-item" data-value="Settings" href="{{route('setting.settings')}}">Settings</a>--}}
{{--                            <a class="dropdown-item" data-value="Mail" href="{{route('setting.email')}}">E-Mail Settings</a>--}}
{{--                            <a class="dropdown-item" data-value="FrontEnd" href="{{route('setting.frontend')}}">FrontEnd Settings</a>--}}
{{--                            <a class="dropdown-item" data-value="Raise Fair" href="{{route('setting.fair.form')}}">Raise Fair</a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </li>--}}
{{--            </ul>--}}
{{--            @endcannot--}}
</header>
</div>
