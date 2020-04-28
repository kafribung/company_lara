@extends('includeDash.masterDash')
@section('title', 'Portofolio - Edit')
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
                <li> <a class="waves-effect waves-dark" href="/about" aria-expanded="false"><i
                            class="mdi mdi-table"></i><span class="hide-menu">About</span></a>
                </li>
                <li> <a class="waves-effect waves-dark" href="/hobby" aria-expanded="false"><i
                            class="mdi mdi-emoticon"></i><span class="hide-menu">Hobby</span></a>
                </li>
                <li> <a class="waves-effect waves-dark active" href="/portofolio" aria-expanded="false"><i
                            class="mdi mdi-earth"></i><span class="hide-menu">Portofolio</span></a>
                </li>
                <li> <a class="waves-effect waves-dark" href="/contact" aria-expanded="false"><i
                            class="mdi mdi-book-open-variant"></i><span class="hide-menu">Contact</span></a>
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
<!-- ============================================================== -->
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
                <h3 class="text-themecolor m-b-0 m-t-0">Edit Profile</h3>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- End Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Start Page Content -->
        <!-- ============================================================== -->
        <!-- Row -->
        <div class="row">
            <!-- column -->
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-block">
                        <div class="table-responsive">

                            <form action="/portofolio/{{$data->id}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label for="title">Title</label>
                                    <input type="text" name="title" class="form-control" id="title" placeholder="title" value="{{$data->title}}">

                                    @if ($errors->has('title'))
                                        <p class="alert alert-danger">{{$errors->first('title')}}</p>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label for="image">Image</label>
                                    <img src="{{asset('storage/portofolio/' . $data->image)}}" alt="Error" width="100" height="100" title="{{$data->title}}">
                                    <input type="file" name="image" class="form-control" id="image" placeholder="image" value="{{$data->image}}">

                                    @if ($errors->has('image'))
                                    <p class="alert alert-danger">{{$errors->first('image')}}</p>
                                    @endif
                                </div>

                                <input type="hidden" name="_method" value="PUT">
                                <button type="submit" class="btn btn-primary btn-sm btn-block">Update</button>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Row -->
        <!-- ============================================================== -->
        <!-- End PAge Content -->
        <!-- ============================================================== -->
    </div>
@endsection




