@extends('layouts.app') 
@section('content')
@include('shared.msg')
<div class="clearfix">
    <a href="{{route('tasks.create')}}" type="button" class="btn btn-circle green-meadow">إضافة جديد  </a>
</div>
<div class="row">
 <div class="col-md-12">
    <div>
        <p></p>
    </div>
    <!-- BEGIN SAMPLE TABLE PORTLET-->
    <div class="portlet box red">
        <div class="portlet-title">
            <div class="caption">
                <i class="fa fa-cogs"></i>المهام </div>
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
                            <th> id </th>
                            <th>Section</th>
                            <th>Administration</th>
                            <th>TasksType </th>
                            <th> TaskStatus </th>
                            <th>StartDate</th>
                            <th>EndDate </th>
                            <th> TimeWork </th>
                            <th> Title </th>
                            <th>  Empolyee</th>
                            <th>  User</th>
                            <th>  Action</th>
                        </tr>
                    </thead>
                        <tbody>
                            @foreach ( $tasks as $task )
                            <tr>
                                <td> {{$task->id}} </td>
                                <td> {{$task->section->title ?? "" }} </td>
                                <td> {{$task->administration->title ?? ""}} </td>
                                <td> {{$task->tasktype->title ?? "" }} </td>
                                <td> {{$task->statue->status ?? ""}} </td>
                                <td> {{$task->sdate}} </td>
                                <td> {{$task->edate}} </td>
                                <td> {{$task->worktime}} </td>
                                <td> {{$task->title}} </td>
                                <td> {{$task->employee->name ?? ""}} </td>
                                <td> {{$task->user->name ?? ""}} </td>

                                <td>   
                                <a href="{{route('tasks-edit' , $task->id )}}"  class="btn btn-primary btn-sm"><i class='fa fa-edit'></i></a>
                                <a href="{{route('tasks-delete' , $task->id )}}" onclick='return confirm("Are you sure dude?")' class="btn btn-warning btn-sm"><i class='fa fa-trash'></i></a>
                                </td>

                            </tr>
                            @endforeach
                        </tbody>
                </table>
            </div>
        </div>
    </div>



    <!-- END SAMPLE TABLE PORTLET--> 

       <!-- BEGIN EXAMPLE TABLE PORTLET-->
                    {{-- <div class="portlet box green">
                        <div class="portlet-title">
                            <div class="caption">
                                <i class="fa fa-globe"></i>قسم المهام </div>
                            <div class="tools"> </div>
                        </div>
                        <div class="portlet-body">
                            <table class="table table-striped table-bordered table-hover" id="sample_2">
                                <thead>
                                    <tr>
                                        <th> id </th>
                                        <th>Section</th>
                                        <th>Administration</th>
                                        <th>TasksType </th>
                                        <th> TaskStatus </th>
                                        <th>StartDate</th>
                                        <th>EndDate </th>
                                        <th> TimeWork </th>
                                        <th> Title </th>
                                        <th>  Empolyee</th>
                                        <th>  User</th>
                                        <th>  Action</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ( $tasks as $task )
                                    <tr>
                                        <td> {{$task->id}} </td>
                                        <td> {{$task->section->title ?? ""}} </td>
                                        <td> {{$task->administration->title ?? ""}} </td>
                                        <td> {{$task->type->type ?? "" }} </td>
                                        <td> {{$task->statue->status ?? ""}} </td>
                                        <td> {{$task->sdate}} </td>
                                        <td> {{$task->edate}} </td>
                                        <td> {{$task->timework}} </td>
                                        <td> {{$task->title}} </td>
                                        <td> {{$task->employee->name ?? ""}} </td>
                                        <td> {{$task->user->name ?? ""}} </td>

                                       	<td>   
											<a href=""  class="btn btn-primary btn-sm"><i class='fa fa-edit'></i></a>
											<a href="" onclick='return confirm("Are you sure dude?")' class="btn btn-warning btn-sm"><i class='fa fa-trash'></i></a>
										   </td>

                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- END EXAMPLE TABLE PORTLET-->
                </div>
            </div>
        </div>
        <!-- END CONTENT BODY -->
    </div> --}}
            <!-- END CONTENT -->



 @endsection