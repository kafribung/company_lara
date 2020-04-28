@extends('includeDash.masterDash')
@section('title', 'Dashboard')
@section('content')
<aside class="left-sidebar">
    <!-- Sidebar scroll-->
    <div class="scroll-sidebar">
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav">
            <ul id="sidebarnav">
                <li> <a class="waves-effect waves-dark active" href="/dashboard" aria-expanded="false"><i
                            class="mdi mdi-gauge"></i><span class="hide-menu">Dashboard</span></a>
                </li>
                <li> <a class="waves-effect waves-dark" href="/profile" aria-expanded="false"><i
                            class="mdi mdi-account-check"></i><span class="hide-menu">Profile</span></a>
                </li>
                <li> <a class="waves-effect waves-dark" href="/about" aria-expanded="false"><i
                            class="mdi mdi-table"></i><span class="hide-menu">About</span></a>
                </li>
                <li> <a class="waves-effect waves-dark" href="/hobby" aria-expanded="false"><i
                            class="mdi mdi-emoticon"></i><span class="hide-menu">Hobby</span></a>
                </li>
                <li> <a class="waves-effect waves-dark" href="/portofolio" aria-expanded="false"><i
                    class="mdi mdi-file-image"></i><span class="hide-menu">Portofolio</span></a>
                </li>
                <li> <a class="waves-effect waves-dark" href="/motivation" aria-expanded="false"><i
                    class="mdi mdi-earth"></i><span class="hide-menu">Motivation</span></a>
                </li>
                <li> <a class="waves-effect waves-dark" href="/contact" aria-expanded="false"><i
                            class="mdi mdi-book-open-variant"></i><span class="hide-menu">Contact</span></a>
                </li>
                <li> <a class="waves-effect waves-dark" href="/comment" aria-expanded="false"><i
                    class="mdi mdi-comment-account"></i><span class="hide-menu">Comment</span></a>
                </li>
            </ul>
        </nav>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
    <!-- Bottom points-->
    <div class="sidebar-footer">
        <a class="link" data-toggle="tooltip" title="Logout" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="mdi mdi-power"></i></a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </form>
    </div>
    <!-- End Bottom points-->
</aside>
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <div class="row page-titles">
                    <div class="col-md-5 col-8 align-self-center">
                        <h3 class="text-themecolor">Dashboard</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->

                <!-- Column -->
                <!-- Column -->
                <div class="col-lg-12 col-xlg-9 col-md-7">
                    <div class="card">
                        <div class="card-block text-center">
                            <h1>Selamat Datang {{$data->name}}</h1>
                        </div>
                    </div>
                </div>
                <!-- Column -->

            </div>
        </div>


@endsection

