@extends('layouts.master')

@section('content')

    {{-- <div class="row bg-title">
        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
            <h4 class="page-title">Home</h4>
        </div>
        <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
            <a href="https://wrappixel.com/templates/ampleadmin/" target="_blank" class="btn btn-danger pull-right m-l-20 hidden-xs hidden-sm waves-effect waves-light">Upgrade to Pro</a>
            <ol class="breadcrumb">
                <li><a href="#">Home</a></li>
                <li class="active">Home</li>
            </ol>
        </div>
        <!-- /.col-lg-12 -->
    </div> --}}
    <div class="row">
        <div class="col-md-12">
            <div class="white-box">
                <div class="row">
                <div class="col-md-8">
                    <h3 class="box-title">Users</h3>
                </div>
                <div class="col-md-4">
                    <button type="button" class="btn btn-primary pull-right"><i class="fa fa-plus" aria-hidden="true"></i>&nbsp;Add User</button>
                </div>
                </div>
                <hr>

                <div class="row">
                    <div class="col-sm-12">
                        <div class="white-box">
                            <div class="table-responsive">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>S#.</th>
                                            <th>Name</th>
                                            <th>Nickname</th>
                                            <th>Designation</th>
                                            <th>ID No.</th>
                                            <th>Phone No.</th>
                                            <th class="text-nowrap">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Lunar probe project</td>
                                            {{-- <td>
                                                <div class="progress progress-xs margin-vertical-10 ">
                                                    <div class="progress-bar progress-bar-danger" style="width: 35%"></div>
                                                </div>
                                            </td> --}}
                                            <td>Lunar probe project</td>
                                            <td>Lunar probe project</td>
                                            <td>Lunar probe project</td>
                                            <td>Lunar probe project</td>
                                            <td>May 15, 2015</td>
                                            <td class="text-nowrap">
                                                <a href="#" data-toggle="tooltip" data-original-title="Edit"> <i class="fa fa-pencil text-inverse m-r-10"></i> </a>
                                                <a href="#" data-toggle="tooltip" data-original-title="Close"> <i class="fa fa-close text-danger"></i> </a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            
        </div>
    </div>

@endsection