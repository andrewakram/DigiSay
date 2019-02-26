@extends('indexcp')
@section('add_client')
    <head>
        {{--<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
        <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>--}}
        <!------ Include the above in your HEAD tag ---------->
    </head>
    <div id="page-wrapper">
        <!-- /.row --><br>
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 style="color:#449D44;">Add New Client</h3>
                        @if($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        @if(session()->has('insert_message'))
                            <hr>
                            {{session()->get('insert_message')}}
                            <hr>
                        @endif
                    </div>
                    <div class="panel-body">
                        <form role="form" method="post" enctype="multipart/form-data" action="{{url('/add/new/client')}}" >
                            {{csrf_field()}}
                            <div class="">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group col-lg-6">
                                            <label>Title</label>
                                            <input name="c_title" type="text" required class="form-control" placeholder="Enter Client Title">
                                            <datalist id="selectService" >
                                            </datalist>
                                        </div>
                                        <div class="form-group col-lg-6">
                                            <label>Type</label>
                                            <input name="c_status" type="text" required class="form-control" placeholder="Enter Client Status">
                                            <datalist id="selectService" >
                                            </datalist>
                                        </div>
                                        <div class="form-group col-lg-12">
                                            <label>Description</label>
                                            <textarea name="c_description" class="form-control" placeholder="Enter Client Description"></textarea>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label>Contact Start Date: </label>
                                            <div id="datepicker" class="input-group date" >
                                                <input name="c_contactStartDate" class="form-control" type="text" readonly placeholder="Contact Start Date"/>
                                                <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                                            </div>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label>Contact End Date: </label>
                                            <div id="datepicker2" class="input-group date" >
                                                <input name="c_contactEndDate" class="form-control" type="text" readonly placeholder="Contact End Date"/>
                                                <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                                            </div>
                                        </div>
                                        <div class="form-group col-lg-6">
                                            <label>Contact Phone</label>
                                            <input name="c_contactPhone" type="text" required class="form-control" placeholder="Enter Contact Phone">
                                            <datalist id="selectService" >
                                            </datalist>
                                        </div>
                                    </div><!-- /.col-lg-6 (nested) -->
                                </div>
                                <button type="submit" class="btn btn-success col-lg-12">Save</button>
                                <!-- /.row (nested) -->
                            </div>
                            <!-- /.panel-body -->
                        </form>
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->
    </div>
    <!-- /#wrapper -->
@endsection