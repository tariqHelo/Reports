@extends('layouts.app') 
@section('content')
@include('shared.msg')

 <div class="tab-pane" id="tab_4">
        <div class="portlet box red">
            <div class="portlet-title">
                <div class="caption">
                    <i class="fa fa-gift"></i> تعديل المهمة  </div>
                <div class="tools">
                    <a href="javascript:;" class="collapse"> </a>
                    <a href="#portlet-config" data-toggle="modal" class="config"> </a>
                    <a href="javascript:;" class="reload"> </a>
                    <a href="javascript:;" class="remove"> </a>
                </div>
            </div>
            <div class="portlet-body form">
                <!-- BEGIN FORM-->
            <form action="{{route('tasks.update' , $tasks->id)}} " method="POST" class="form-horizontal form-row-seperated">
                @csrf
                @method('PATCH')
                    <div class="form-body">
                        <div class="form-group">
                            <label class="control-label col-md-3"> الإدارة</label>
                            <div class="col-md-9">
                                <select class="form-control" name="administration_id"> 
                                    @foreach($administrations as $administration)
    <option {{$administration->id == $tasks->administration_id?"selected":""}} value='{{$administration->id}}'>{{$administration->title}}</option>
                                    @endforeach	
                                </select>
                            </div>
                        </div>
                         <div class="form-group">
                            <label class="control-label col-md-3"> القسم</label>
                            <div class="col-md-9">
                                <select class="form-control" name="section_id">
                                    @foreach($sections as $section)
 <option {{$section->id == $tasks->section_id?"selected":""}} value='{{$section->id}}'>{{$section->title}}</option>
                                    @endforeach	
                                </select>
                            </div>
                        </div>
                         {{-- <div class="form-group">
                            <label class="control-label col-md-3"> الموظف</label>
                            <div class="col-md-9">
                                <select class="form-control" name="employee_id">
                                    <option></option>
                                    @foreach($employees as $employee)
                                        <option value="{{ $employee->id }}">{{ $employee->name }}</option>
                                    @endforeach	
                                </select>
                            </div>
                        </div> --}}
                         <div class="form-group">
                            <label class="control-label col-md-3"> نوع المهمة</label>
                            <div class="col-md-9">
                                <select class="form-control" name="type_id">
                                    @foreach($taskstype as $type)
<option {{$type->id == $tasks->type_id?"selected":""}} value='{{$type->id}}'>{{$type->title}}</option>

                                        <option value="{{ $type->id }}">{{ $type->type }}</option>
                                    @endforeach	
                                </select>
                            </div>
                        </div>
                         <div class="form-group">
                            <label class="control-label col-md-3"> الحالة</label>
                            <div class="col-md-9">
                                <select class="form-control" name="statue_id">
                                    @foreach($taskstatus as $status)
    <option {{$status->id == $tasks->statue_id?"selected":""}} value='{{$status->id}}'>{{$status->status}}</option>
                                    @endforeach	
                                </select>
                            </div>
                        </div>
                         <div class="form-group">
                            <label class="control-label col-md-3"> ساعات العمل</label>
                            <div class="col-md-9">
                                <select class="form-control" name="worktime">
                                    <option></option>
                                    <option value="1" {{ old('worktime') == $tasks  ? 'selected' : '' }}> 1</option>
                                    <option value="2" {{ old('worktime') == $tasks  ? 'selected' : '' }}> 2</option>
                                    <option value="3" {{ old('worktime') == $tasks ? 'selected' : '' }}> 3</option>
                                    <option value="4" {{ old('worktime') == $tasks ? 'selected' : '' }}> 4</option>
                                    <option value="5" {{ old('worktime') == $tasks ? 'selected' : '' }}> 5</option>
                                    <option value="6" {{ old('worktime') == $tasks ? 'selected' : '' }}> 6</option>
                                    <option value="7" {{ old('worktime') == $tasks ? 'selected' : '' }}> 7</option>
                                    <option value="8" {{ old('worktime') == $tasks ? 'selected' : '' }}> 8</option>
                                </select>
                            </div>
                        </div>
                         <div class="form-group">
                            <label class="control-label col-md-3"> المستخدم</label>
                            <div class="col-md-9">
                                <select class="form-control" name="user_id">
                                    <option></option>
                                    @foreach($users as $user)
            <option {{$user->id == $tasks->user_id?"selected":""}} value='{{$user->id}}'>{{$user->name}}</option>
                                    @endforeach	
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                                <label class="control-label col-md-3">تاريخ بداية المهمة</label>
                                <div class="col-md-3">
                                    <div class="input-group input-medium date date-picker" data-date-format="dd-mm-yyyy" data-date-start-date="+0d">
                                        <input type="text" class="form-control" value="{{ old('sdate', date('Y-m-d')) }}" name="sdate" readonly>
                                        <span class="input-group-btn">
                                            <button class="btn default" type="button">
                                                <i class="fa fa-calendar"></i>
                                            </button>
                                        </span>
                                    </div>
                                </div>
                            </div>
                             <div class="form-group">
                                <label class="control-label col-md-3">تاريخ نهاية المهمة</label>
                                <div class="col-md-3">
                                    <div class="input-group input-medium date date-picker" data-date-format="dd-mm-yyyy" data-date-start-date="+0d">
                                        <input type="text"  value="{{ old('edate', date('Y-m-d')) }}" class="form-control" name="edate" readonly>
                                        <span class="input-group-btn">
                                            <button class="btn default" type="button">
                                                <i class="fa fa-calendar"></i>
                                            </button>
                                        </span>
                                    </div>
                                </div>
                            </div>                       
                         <div class="form-group">
                            <label class="control-label col-md-3">عنوان المهمة</label>
                            <div class="col-md-9">
                                <input type="text" placeholder="عنوان المهمة" value="{{$tasks->title}}" name="title" class="form-control" />
                            </div>
                        </div>
                        <div class="form-group">
                                <label class="control-label col-md-3"> ملاحظات</label>
                                <div class="col-md-9">
                                <textarea class="form-control" name="note" rows="3"> {{$tasks->note}}</textarea>
                                </div>
                         </div>
                    </div>
                     <div class="form-actions">
                        <div class="row">
                            <div class="col-md-offset-3 col-md-9">
                                <button type="submit" class="btn green">
                                    <i class="fa fa-check"></i> حفظ</button>
                                <a  href="{{route('tasks.index')}}" class="btn btn-outline grey-salsa">إلغاء</a>
                            </div>
                        </div>
                    </div>
                </form>
                <!-- END FORM-->
            </div>
        </div>
@endsection