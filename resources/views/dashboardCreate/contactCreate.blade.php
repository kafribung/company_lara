@extends('includeDash.masterDash')
@section('title', 'Contact - Create')
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
                <li> <a class="waves-effect waves-dark" href="/motivation" aria-expanded="false"><i
                    class="mdi mdi-earth"></i><span class="hide-menu">Motivation</span></a>
                </li>
                <li> <a class="waves-effect waves-dark active" href="/contact" aria-expanded="false"><i
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
                        <h3 class="text-themecolor m-b-0 m-t-0">Contact</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                            <li class="breadcrumb-item active">Contact</li>
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
                                <h4 class="card-title">Add Contact</h4>
                                <div class="table-responsive">
                                    <form action="/contact" method="POST">
                                        @csrf
                                        <div class="form-group">
                                            <label for="address">Address</label>
                                            <input type="text" name="address" class="form-control" id="address" placeholder="address" autocomplete="off" value="{{old('address')}}">

                                            @if ($errors->has('address'))
                                                <p class="alert alert-danger">{{$errors->first('address')}}</p>
                                            @endif
                                        </div>
                                        <div class="form-group">
                                            <label for="handpone">Handpone</label>
                                            <input type="text" name="handpone" class="form-control" id="handpone" placeholder="handpone" autocomplete="off" value="{{old('handpone')}}">

                                            @if ($errors->has('handpone'))
                                                <p class="alert alert-danger">{{$errors->first('handpone')}}</p>
                                            @endif
                                        </div>
                                        <div class="form-group">
                                            <label for="twitter">Twitter</label>
                                            <input type="text" name="twitter" class="form-control" id="twitter" placeholder="twitter" autocomplete="off" value="{{old('twitter')}}">

                                            @if ($errors->has('twitter'))
                                                <p class="alert alert-danger">{{$errors->first('twitter')}}</p>
                                            @endif
                                        </div>
                                        <div class="form-group">
                                            <label for="fb">Facebook</label>
                                            <input type="text" name="fb" class="form-control" id="fb" placeholder="fb" autocomplete="off" value="{{old('fb')}}">

                                            @if ($errors->has('fb'))
                                                <p class="alert alert-danger">{{$errors->first('fb')}}</p>
                                            @endif
                                        </div>
                                        <div class="form-group">
                                            <label for="instagram">Instagram</label>
                                            <input type="text" name="instagram" class="form-control" id="instagram" placeholder="instagram" autocomplete="0" value="{{old('instagram')}}">

                                            @if ($errors->has('instagram'))
                                                <p class="alert alert-danger">{{$errors->first('instagram')}}</p>
                                            @endif
                                        </div>
                                        <div class="form-group">
                                            <label for="linkedin">Linkedin</label>
                                            <input type="text" name="linkedin" class="form-control" id="linkedin" placeholder="linkedin" autocomplete="0" value="{{old('linkedin')}}">

                                            @if ($errors->has('linkedin'))
                                                <p class="alert alert-danger">{{$errors->first('linkedin')}}</p>
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
