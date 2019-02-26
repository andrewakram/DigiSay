@extends('indexcp')
@section('all_clients')
<div id="page-wrapper">
    <br>
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <a href="{{URL::to('all/clients')}}">
                        <h3 style="color:#0fb790;">All Clients</h3>
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
                            <th>Title</th>
                            <th>Status</th>
                            <th>Description</th>
                            <th>Contact Start Date</th>
                            <th>Contact End Date</th>
                            <th>Contact Phone</th>
                            <th>Date Created</th>
                            <th>options</th>
                        </tr>
                        </thead>
                        <tbody id="myTable">
                        @foreach($clients as $client)
                        <tr style="background-color: {{$client->deleted_at != null ? "#da5c68":""}}">
                            @if($client->deleted_at == null)
                                <th><a href="{{URL::to('/edit/client/'.$client->c_id)}}" class="btn btn-info" id=""><i class="glyphicon glyphicon-edit"></i></a></th>
                                <th><a href="{{URL::to('/delete/client/'.$client->c_id)}}" class="btn btn-danger" id="deletes"><i class="glyphicon glyphicon-trash"></i></a></th>
                            @else
                                <th></th>
                                <th></th>
                            @endif
                            <th>{{$client->c_id}}</th>
                            <th>{{$client->c_title}}</th>
                            <th>{{$client->c_status}}</th>
                            <th>{{$client->c_description}}</th>
                            <th>{{$client->c_contactStartDate}}</th>
                            <th>{{$client->c_contactEndDate}}</th>
                            <th>{{$client->c_contactPhone}}</th>
                            <th>{{$client->created_at}}</th>
                                <th><a href="{{URL::to('/manage/services/'.$client->c_id)}}" class="btn btn-warning" id="">Manage Services</a></th>
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