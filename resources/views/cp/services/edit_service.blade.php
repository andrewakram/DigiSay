@extends('indexcp')
@section('edit_service')
    @foreach ($services as $service)
    <div id="page-wrapper">
        <br>
        <!-- /.row -->
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3>Edit Service: <b style="color:#31B0D5;"># {{ Route::input('s_id') }}</b></h3>
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
                    <form role="form" method="post" enctype="multipart/form-data" action="{{url('/update/service/'.$service->s_id)}}" >
                        {{csrf_field()}}
                        <div class="">
                            <div class="row">
                                <div class="col-lg-12">

                                    <div class="form-group col-lg-6">
                                        <label>Title</label>
                                        <input name="s_title" value="{{$service->s_title}}" type="text" list="selectService" required class="form-control" placeholder="Enter Service Title">
                                        <datalist id="selectService" >
                                        </datalist>
                                    </div>
                                    <div class="form-group col-lg-6">
                                        <label>Type</label>
                                        <input name="s_type" value="{{$service->s_type}}" type="text" list="selectService" required class="form-control" placeholder="Enter Service Type">
                                        <datalist id="selectService" >
                                        </datalist>
                                    </div>
                                </div>
                                <!-- /.col-lg-6 (nested) -->
                            </div>
                            <button type="submit" class="btn btn-info col-lg-12">Update</button>
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
    @endforeach
@endsection