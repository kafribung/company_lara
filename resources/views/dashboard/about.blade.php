@extends('includeDash.masterDash')
@section('title', 'About - Dashboard')
@section('content')
<aside class="left-sidebar">
    <!-- Sidebar scroll-->
    <div class="scroll-sidebar">
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav">
            <ul id="sidebarnav">
                <li> <a class="waves-effect waves-dark" href="/dashboard" aria-expanded="false"><i
                    class="mdi mdi-gauge"></i><span class="hide-menu">Dashboard</span></a>
                </li>
                <li> <a class="waves-effect waves-dark" href="/profile" aria-expanded="false"><i
                            class="mdi mdi-account-check"></i><span class="hide-menu">Profile</span></a>
                </li>
                <li> <a class="waves-effect waves-dark active" href="/about" aria-expanded="false"><i
                            class="mdi mdi-table"></i><span class="hide-menu">About</span></a>
                </li>
                <li> <a class="waves-effect waves-dark" href="/hobby" aria-expanded="false"><i
                            class="mdi mdi-emoticon"></i><span class="hide-menu">Hobby</span></a>
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
                        <h3 class="text-themecolor m-b-0 m-t-0">Table</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">About</a></li>
                            <li class="breadcrumb-item active">Table</li>
                        </ol>
                    </div>
                </div>


                @if (session('msg'))
                <p class="alert alert-info">{{session('msg')}}</p>
                @endif
                <!-- ============================================================== -->
                <!-- End Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <div class="row">
                    <!-- column -->
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-block">
                                <h4 class="card-title">About Table</h4>

                                <!-- Button trigger modal -->
                                <a href="/about/create" class="btn btn-circle btn-lg btn-success waves-effect waves-dark float-right">+</a>

                                <div class="table-responsive">
                                    <table class="table table-hover">
                                        <thead>
                                            <tr>
                                                <th scope="col">#</th>
                                                <th scope="col">About</th>
                                                <th scope="col">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row">1</th>
                                                <td>{!!$data->about!!}</td>
                                                <td>
                                                    <a href="/about/{{$data->id}}/edit" class="btn btn-warning"><i class="fa fa-edit"></i></a>
                                                    <a href="/about/{{$data->id}}" class="btn btn-danger"  onclick="event.preventDefault();
                                                        document.getElementById('delete').submit();"><i class="fa fa-trash"></i></a>

                                                    <form id="delete" action="/about/{{$data->id}}" method="POST" style="display: none;">
                                                        @csrf
                                                        <input type="hidden" name="_method" value="DELETE">
                                                    </form>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
        </div>


@endsection


