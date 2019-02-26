@extends('indexcp')
@section('clientservices')

    <div id="page-wrapper">
        <br>
        <head>
            {{--<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
            <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
            <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
            --}}<!------ Include the above in your HEAD tag ---------->
        </head>
        <!-- /.row -->
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3>
                            Client Services: <b style="color:#31B0D5;">Client # {{ Route::input('c_id') }}</b>
                        </h3>
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
                            <div class="alert alert-danger">
                                <ul>
                                    {{session()->get('insert_message')}}
                                </ul>
                            </div>
                            <hr>
                        @endif
                    </div>

                    <div class="panel-body">
                        @foreach ($clients as $client)
                        <form role="form" id="form" method="post" enctype="multipart/form-data" action="{{url('/update/clientservices/'.$client->c_id)}}" >
                        @endforeach
                            {{csrf_field()}}
                            <div class="">
                                <div class="row">
                                    <div class="">
                                        <div class="">
                                            @foreach($services as $service)
                                                <div class="form-group col-md-12">
                                                    <div class=" col-lg-6">
                                                        <input type="checkbox" name="{{$service->s_id}}" @foreach ($clientservices as $cs){{$cs->service_id == $service->s_id ? "checked" : ""}}@endforeach value="{{$service->s_id}}" class="checkbox">
                                                        <label>{{$service->s_title}}</label>
                                                    </div>
                                                    <div class=" col-lg-6">
                                                        <input name="l{{$service->s_id}}" value="@foreach ($clientservices as $cs){{$cs->service_id == $service->s_id ? "$cs->link" : ""}}@endforeach" type="text"  class="form-control data" placeholder="Enter link">
                                                    </div>
                                                    <div class=" col-lg-12">
                                                        <label>Description</label>
                                                        <textarea name="des{{$service->s_id}}" class="form-control data" placeholder="Enter Description">@foreach ($clientservices as $cs){{$cs->service_id == $service->s_id ? "$cs->description" : ""}}@endforeach
                                                        </textarea>
                                                    </div>
                                                    <div class="clearfix"></div>
                                                    <hr>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div><!-- /.col-lg-6 (nested) -->
                                </div>
                                <button type="submit" class="btn btn-success col-lg-12" onclick="return testcheck()">update</button>
                                <!-- /.row (nested) -->
                            </div>
                            <!-- /.panel-body -->
                        </form>
                    </div>
                </div>
                <!-- /.panel -->
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /#page-wrapper -->
    <!-- /#wrapper -->
    {{--@endforeach--}}
@endsection
