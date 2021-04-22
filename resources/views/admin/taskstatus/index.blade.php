
@extends('layouts.app') 
@section('content')
@include('shared.msg')
    @can('Taskstatus_create')
        <div class="clearfix">  
           <a href="{{route('taskstatus.create')}}" type="button" class="btn btn-circle green-meadow">إضافة جديد  </a>
        </div>
    @endcan
           
<div class="row">
 <div class="col-md-12">
    <div >
        <p> </p>
    </div>

    <!-- BEGIN SAMPLE TABLE PORTLET-->
    <div class="portlet box green">
        <div class="portlet-title">
            <div class="caption">
                <i class="fa fa-cogs"></i>حالة المهام</div>
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
                            <th>إسم الحالة  </th>
                            <th>Action </th>

                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($taskstatus as $tStatus)
                        <tr>
                            <td> {{$tStatus->id}} </td>
                            <td> {{$tStatus->status}} </td>
                            <td>   
                            @can('Taskstatus_edit')
                                <a href="{{route('taskstatus-edit'   ,    $tStatus->id )}}"  class="btn btn-primary btn-sm"><i class='fa fa-edit'></i></a>
                            @endcan
                            @can('Taskstatus_delete')
                             <a href="{{route('taskstatus-delete' ,   $tStatus->id )}}" onclick='return confirm("Are you sure dude?")' class="btn btn-warning btn-sm"><i class='fa fa-trash'></i></a>                               
                            @endcan
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