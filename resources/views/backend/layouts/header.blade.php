<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <title> @yield('title_section') </title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/backend_css/reset.css') }}" media="screen" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/backend_css/text.css') }}" media="screen" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/backend_css/grid.css')}}" media="screen" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/backend_css/layout.css') }}" media="screen" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/backend_css/nav.css') }}" media="screen" />
    <link href="{{ asset('css/backend_css/table/demo_page.css') }}" rel="stylesheet" type="text/css" />
    <!-- BEGIN: load jquery -->
    <script src="{{ asset('js/bakend_js/jquery-1.6.4.min.js')}}" type="text/javascript"></script>
    <script type="text/javascript" src="{{ asset('js/bakend_js/jquery-ui/jquery.ui.core.min.js') }}"></script>
    <script src="{{ asset('js/bakend_js/jquery-ui/jquery.ui.widget.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/bakend_js/jquery-ui/jquery.ui.accordion.min.js')}}" type="text/javascript"></script>
    <script src="{{ asset('js/bakend_js/jquery-ui/jquery.effects.core.min.js')}}" type="text/javascript"></script>
    <script src="{{ asset('js/bakend_js/jquery-ui/jquery.effects.slide.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/bakend_js/jquery-ui/jquery.ui.mouse.min.js')}}" type="text/javascript"></script>
    <script src="{{ asset('js/bakend_js/jquery-ui/jquery.ui.sortable.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/bakend_js/table/jquery.dataTables.min.js') }}" type="text/javascript"></script>
    <!-- END: load jquery -->
    <script type="text/javascript" src="{{ asset('js/bakend_js/table/table.js') }}"></script>
    <script src="{{ asset('js/bakend_js/setup.js') }}" type="text/javascript"></script>

    
     <script type="text/javascript">
        $(document).ready(function () {
            setupLeftMenu();
            setSidebarHeight();
        });
    </script>
        <script type="text/javascript">

        $(document).ready(function () {
            setupLeftMenu();

            $('.datatable').dataTable();
            setSidebarHeight();


        });
    </script>
 

</head>
<body>
    <div class="container_12">
        <div class="grid_12 header-repeat">
            <div id="branding">
                <div class="floatleft logo">
                    <img src="{{ asset('images/backend_image/livelogo.png') }}" alt="Logo" />
                </div>
                <div class="floatleft middle">
                    <h1>EVERGREEN</h1>
                    <p>Admin Panel</p>
                </div>
                <div class="floatright">
                    <div class="floatleft">
                        <img src="{{ asset('images/backend_image/img-profile.jpg') }}" alt="Profile Pic" /></div>
                    <div class="floatleft marginleft10">
                        <ul class="inline-ul floatleft">
                           <!-- <li>Hello Admin</li>
                            <li><a href="#">Logout</a></li>-->
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>   
                        </ul>
                    </div>
                </div>
                <div class="clear">
                </div>
            </div>
        </div>
        <div class="clear">
        </div>
        <div class="grid_12">
            <ul class="nav main">
                <li class="ic-dashboard"><a href="{{ route('index1') }}"><span>Dashboard</span></a> </li>
                <li class="ic-form-style"><a href=""><span>User Profile</span></a></li>
                <li class="ic-typography"><a href="changepassword.html"><span>Change Password</span></a></li>
                <li class="ic-grid-tables"><a href="inbox.html"><span>Inbox</span></a></li>
                <li class="ic-charts"><a href="{{route('postlist')}}"><span>Visit Website</span></a></li>
            </ul>
        </div>