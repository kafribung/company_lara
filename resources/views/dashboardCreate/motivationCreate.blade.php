@extends('includeDash.masterDash')
@section('title', 'Motivation - Create')
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
                <li> <a class="waves-effect waves-dark" href="/portofolio" aria-expanded="false"><i
                            class="mdi mdi-earth"></i><span class="hide-menu">Portofolio</span></a>
                </li>
                <li> <a class="waves-effect waves-dark active" href="/motivation" aria-expanded="false"><i
                        class="mdi mdi-earth"></i><span class="hide-menu">Motivation</span></a>
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
                        <h3 class="text-themecolor m-b-0 m-t-0">Motivation</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                            <li class="breadcrumb-item active">Motivation</li>
                        </ol>
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
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-block">
                                <h4 class="card-title">Motivation Table</h4>
                                <div class="table-responsive">
                                    <form action="/motivation" method="POST">
                                        @csrf
                                        <div class="form-group">
                                            <label for="owner">Owner</label>
                                            <input type="text" name="owner" class="form-control" id="owner" placeholder="owner" value="{{old('owner')}}">

                                            @if ($errors->has('owner'))
                                                <p class="alert alert-danger">{{$errors->first('owner')}}</p>
                                            @endif
                                        </div>
                                        <div class="form-group">
                                            <label for="profession">Profession</label>
                                            <input type="text" name="profession" class="form-control" id="profession" placeholder="profession" value="{{old('profession')}}">

                                            @if ($errors->has('profession'))
                                                <p class="alert alert-danger">{{$errors->first('profession')}}</p>
                                            @endif
                                        </div>
                                        <div class="form-group">
                                            <label for="description">Description</label>
                                            <textarea name="description" class="form-control ckeditor" id="description">{{old('description')}}</textarea>

                                            @if ($errors->has('description'))
                                                <p class="alert alert-danger">{{$errors->first('description')}}</p>
                                            @endif
                                        </div>

                                        <button type="submit" class="btn btn-primary btn-sm btn-block">Store</button>
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
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
@endsection
