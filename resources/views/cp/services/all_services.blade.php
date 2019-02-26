@extends('indexcp')
@section('all_services')
<div id="page-wrapper">
    <br>
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <a href="{{URL::to('all/services')}}">
                        <h3 style="color:#0fb790;">All Services</h3>
                    </a>
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
                        <div class="alert alert-success">
                            <ul>
                                {{session()->get('insert_message')}}
                            </ul>
                        </div>
                    @endif
                </div>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
            <div class="col-lg-12">
                <div class="table-responsive">
                    <table class="table table-bordered table-hover table-striped">
                        <thead>
                        <tr>
                            <th>Edit</th>
                            <th>Delete</th>
                            <th>#</th>
                            <th>Service Title</th>
                            <th>Service Type</th>
                            <th>Date Created</th>
                        </tr>
                        </thead>
                        <tbody id="myTable">
                        @foreach($services as $service)
                        <tr style="background-color: {{$service->deleted_at != null ? "#da5c68":""}}">
                            @if($service->deleted_at == null)
                                <th><a href="{{URL::to('/edit/service/'.$service->s_id)}}" class="btn btn-info" id=""><i class="glyphicon glyphicon-edit"></i></a></th>
                                <th><a href="{{URL::to('/delete/service/'.$service->s_id)}}" class="btn btn-danger" id="deletes"><i class="glyphicon glyphicon-trash"></i></a></th>
                            @else
                                <th></th>
                                <th></th>
                            @endif
                            <th>{{$service->s_id}}</th>
                            <th>{{$service->s_title}}</th>
                            <th>{{$service->s_type}}</th>
                            <th>{{$service->created_at}}</th>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                </form>
                </div>
                <!-- /.table-responsive -->
            </div>
            <!-- /.col-lg-4 (nested) -->
    </div>
</div>
@endsection