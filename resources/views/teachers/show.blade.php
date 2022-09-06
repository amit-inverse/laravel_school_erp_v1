@extends('layouts.app')

@section('content')
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Teachers Details</h1>
            </div>
            <div class="col-sm-6">
                <a class="btn btn-default float-right" href="{{ route('teachers.index') }}">
                    Back
                </a>
            </div>
        </div>
    </div>
</section>

<div class="content px-3">
    <div class="card">
        <!-- <div class="card-body"> -->
        <!-- <div class="row"> -->
        {{-- @include('teachers.show_fields') --}}

        <link href="/css/bootstrap.min.css" rel="stylesheet" />
        <link href="/css/AdminLTE.min.css" rel="stylesheet" />
        <!-- Content Wrapper. Contains page content -->
        {{-- <div class="content-wrapper"> --}}
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                {{$teachers->last_name}} Profile
            </h1>
            <!-- <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li><a href="#">Examples</a></li>
                <li class="active">User profile</li>
            </ol> -->
        </section>

        <!-- Main content -->
        <section class="content">

            <div class="row">
                <div class="col-md-3">

                    <!-- Profile Image -->
                    <div class="box box-primary">
                        <div class="box-body box-profile">
                            <img class="profile-user-img img-responsive img-circle" src="{{ asset('images/teachers/' .$teachers->image ) }}" width="50" height="50" style="border-radius: 50%; width: 150px; height: 150px;" alt="">

                            <h3 class="profile-username text-center">{!! $teachers->first_name !!} {!! $teachers->last_name !!}</h3>

                            <p class="text-muted text-center">Teacher</p>

                            <ul class="list-group list-group-unbordered">
                                <li class="list-group-item">
                                    <b>Followers</b> <a class="pull-right">1,322</a>
                                </li>
                                <li class="list-group-item">
                                    <b>Following</b> <a class="pull-right">543</a>
                                </li>
                                <li class="list-group-item">
                                    <b>Friends</b> <a class="pull-right">13,287</a>
                                </li>
                            </ul>

                            <a href="#" class="btn btn-primary btn-block"><b>Follow</b></a>
                        </div>
                        <!-- /.box-body -->
                    </div>
                    <!-- /.box -->

                    <!-- About Me Box -->
                    <div class="box box-primary">
                        <div class="box-header with-border">
                            <h3 class="box-title">About Me</h3>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <strong><i class="fa fa-book margin-r-5"></i> Education</strong>
                            <p class="text-muted">
                                B.Sc. in Computer Science from the University of Tennessee at Knoxville
                            </p>
                            <hr>
                            <strong><i class="fa fa-map-marker margin-r-5"></i> Location</strong>
                            <p class="text-muted">{!! $teachers->address !!}</p>
                            <hr>
                            <strong><i class="fa fa-pencil margin-r-5"></i> Skills</strong>
                            <p>
                                <span class="label label-danger">UI Design</span>
                                <span class="label label-success">Coding</span>
                                <span class="label label-info">Javascript</span>
                                <span class="label label-warning">PHP</span>
                                <span class="label label-primary">Node.js</span>
                            </p>
                        </div>
                        <!-- /.box-body -->
                    </div>
                    <!-- /.box -->
                </div>
                <!-- /.col -->
                <div class="col-md-9">
                    <div class="nav-tabs-custom">
                        <ul class="nav nav-tabs">
                            <li class="active"><a href="#activity" data-toggle="tab">Teacher Class TimeTable</a></li>
                            <li><a href="#settings" data-toggle="tab">Full Details</a></li>
                        </ul>
                        <div class="tab-content">
                            <div class="active tab-pane" id="activity">
                                <!-- Post -->
                                <div class="post">
                                    <div class="user-block">
                                        <img class="img-circle img-bordered-sm" src="../../dist/img/user1-128x128.jpg" alt="user image">
                                        <span class="username">
                                            <a href="#">Jonathan Burke Jr.</a>
                                            <a href="#" class="pull-right btn-box-tool"><i class="fa fa-times"></i></a>
                                        </span>
                                        <span class="description">Shared publicly - 7:30 PM today</span>
                                    </div>
                                    <!-- /.user-block -->
                                    <p>
                                        Lorem ipsum represents a long-held tradition for designers,
                                        typographers and the like. Some people hate it and argue for
                                        its demise, but others ignore the hate as they create awesome
                                        tools to help create filler text for everyone from bacon lovers
                                        to Charlie Sheen fans.
                                    </p>
                                    <ul class="list-inline">
                                        <li><a href="#" class="link-black text-sm"><i class="fa fa-share margin-r-5"></i> Share</a></li>
                                        <li><a href="#" class="link-black text-sm"><i class="fa fa-thumbs-o-up margin-r-5"></i> Like</a>
                                        </li>
                                        <li class="pull-right">
                                            <a href="#" class="link-black text-sm"><i class="fa fa-comments-o margin-r-5"></i> Comments
                                                (5)</a>
                                        </li>
                                    </ul>

                                    <input class="form-control input-sm" type="text" placeholder="Type a comment">
                                </div>
                                <!-- /.post -->

                                <!-- Post -->
                                <div class="post clearfix">
                                    <div class="user-block">
                                        <img class="img-circle img-bordered-sm" src="../../dist/img/user7-128x128.jpg" alt="User Image">
                                        <span class="username">
                                            <a href="#">Sarah Ross</a>
                                            <a href="#" class="pull-right btn-box-tool"><i class="fa fa-times"></i></a>
                                        </span>
                                        <span class="description">Sent you a message - 3 days ago</span>
                                    </div>
                                    <!-- /.user-block -->
                                    <p>
                                        Lorem ipsum represents a long-held tradition for designers,
                                        typographers and the like. Some people hate it and argue for
                                        its demise, but others ignore the hate as they create awesome
                                        tools to help create filler text for everyone from bacon lovers
                                        to Charlie Sheen fans.
                                    </p>

                                    <form class="form-horizontal">
                                        <div class="form-group margin-bottom-none">
                                            <div class="col-sm-9">
                                                <input class="form-control input-sm" placeholder="Response">
                                            </div>
                                            <div class="col-sm-3">
                                                <button type="submit" class="btn btn-danger pull-right btn-block btn-sm">Send</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <!-- /.post -->

                                <!-- Post -->
                                <div class="post">
                                    <div class="user-block">
                                        <img class="img-circle img-bordered-sm" src="../../dist/img/user6-128x128.jpg" alt="User Image">
                                        <span class="username">
                                            <a href="#">Adam Jones</a>
                                            <a href="#" class="pull-right btn-box-tool"><i class="fa fa-times"></i></a>
                                        </span>
                                        <span class="description">Posted 5 photos - 5 days ago</span>
                                    </div>
                                    <!-- /.user-block -->
                                    <div class="row margin-bottom">
                                        <div class="col-sm-6">
                                            <img class="img-responsive" src="../../dist/img/photo1.png" alt="Photo">
                                        </div>
                                        <!-- /.col -->
                                        <div class="col-sm-6">
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <img class="img-responsive" src="../../dist/img/photo2.png" alt="Photo">
                                                    <br>
                                                    <img class="img-responsive" src="../../dist/img/photo3.jpg" alt="Photo">
                                                </div>
                                                <!-- /.col -->
                                                <div class="col-sm-6">
                                                    <img class="img-responsive" src="../../dist/img/photo4.jpg" alt="Photo">
                                                    <br>
                                                    <img class="img-responsive" src="../../dist/img/photo1.png" alt="Photo">
                                                </div>
                                                <!-- /.col -->
                                            </div>
                                            <!-- /.row -->
                                        </div>
                                        <!-- /.col -->
                                    </div>
                                    <!-- /.row -->

                                    <ul class="list-inline">
                                        <li><a href="#" class="link-black text-sm"><i class="fa fa-share margin-r-5"></i> Share</a></li>
                                        <li><a href="#" class="link-black text-sm"><i class="fa fa-thumbs-o-up margin-r-5"></i> Like</a>
                                        </li>
                                        <li class="pull-right">
                                            <a href="#" class="link-black text-sm"><i class="fa fa-comments-o margin-r-5"></i> Comments
                                                (5)</a>
                                        </li>
                                    </ul>

                                    <input class="form-control input-sm" type="text" placeholder="Type a comment">
                                </div>
                                <!-- /.post -->
                            </div>
                            <!-- /.tab-pane -->

                            <div class="tab-pane" id="settings">
                                <form class="form-horizontal">
                                    <div class="form-group">
                                        <label for="name" class="col-sm-3 control-label">Full Name</label>
                                        <div class="col-sm-9">
                                            <input type="name" class="form-control" id="name" value="{{$teachers->first_name}} {{$teachers->last_name}}" readonly>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="email" class="col-sm-3 control-label">Email</label>
                                        <div class="col-sm-9">
                                            <input type="email" class="form-control" id="email" value="{{$teachers->email}}" readonly>
                                        </div>
                                    </div>

                                    <div class="form-group col-sm-12">
                                        <div class="row">
                                            <label for="gender" class="col-sm-3 control-label">Gender</label>
                                            <div class="col-sm-4">
                                                @if($teachers->gender == 0)
                                                <span> Male </span>
                                                @else
                                                <span> Female </span>
                                                @endif
                                            </div>

                                            <label for="status" class="col-sm-2 control-label">Status</label>
                                            <div class="col-sm-3">
                                                <p> @if($teachers->status == 0)
                                                    <span> Single </span>
                                                    @else
                                                    <span> Married </span>
                                                    @endif
                                                </p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="dob" class="col-sm-3 control-label">Date of Birth</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="dob" value="{{$teachers->dob}}" readonly>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="phone" class="col-sm-3 control-label">Phone</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="phone" value="+{{$teachers->phone}}" readonly>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="address" class="col-sm-3 control-label">Address</label>
                                        <div class="col-sm-9">
                                            <textarea class="form-control" id="address" readonly>{{$teachers->address}}</textarea>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="nationality" class="col-sm-3 control-label">Nationality</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="nationality" value="{{$teachers->nationality}}" readonly>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="date_registered" class="col-sm-3 control-label">Register Date</label>

                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="date_registered" value="{{date('Y-m-d', strtotime ($teachers->date_registered))}}" readonly>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <!-- /.tab-pane -->
                        </div>
                        <!-- /.tab-content -->
                    </div>
                    <!-- /.nav-tabs-custom -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->

        </section>
        <!-- /.content -->
        {{-- </div> --}}


        <!-- </div> -->
        <!-- </div> -->
    </div>
</div>
@endsection