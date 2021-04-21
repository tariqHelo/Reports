
@extends('layouts.app') 
@section('content')
@include('shared.msg')
<div class="clearfix">
        
 <a href="{{route('taskstype.create')}}" type="button" class="btn btn-circle green-meadow">إضافة جديد  </a>
      
    </div>
<div class="row">
 <div class="col-md-12">
    <div >
        <p> </p>
    </div>

    <!-- BEGIN SAMPLE TABLE PORTLET-->
    <div class="portlet box red">
        <div class="portlet-title">
            <div class="caption">
                <i class="fa fa-cogs"></i>حالة ونوع المهام</div>
            <div class="tools">
                <a href="javascript:;" class="collapse"> </a>
                <a href="#portlet-config" data-toggle="modal" class="config"> </a>
                <a href="javascript:;" class="reload"> </a>
                <a href="javascript:;" class="remove"> </a>
            </div>
        </div>
        <div class="portlet-body">
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th> # </th>
                            <th> نوع الحالة </th>
                            <th> Action  </th>
              
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($taskstype as $tasktype )
                        <tr>
                            <td> {{$tasktype->id}}</td>
                            <td>{{$tasktype->type}} </td>
                            <td>   
                            <a href="{{route('taskstype-edit'   ,    $tasktype->id )}}"  class="btn btn-primary btn-sm"><i class='fa fa-edit'></i></a>
                            <a href="{{route('taskstype-delete' ,   $tasktype->id )}}" onclick='return confirm("Are you sure dude?")' class="btn btn-warning btn-sm"><i class='fa fa-trash'></i></a>
                            </td>
                        </tr>
                        @endforeach
                      
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- END SAMPLE TABLE PORTLET-->


 @endsection