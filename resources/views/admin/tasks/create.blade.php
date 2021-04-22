@extends('layouts.app') 
@section('content')
@include('shared.msg')

 <div class="tab-pane" id="tab_4">
        <div class="portlet box red">
            <div class="portlet-title">
                <div class="caption">
                    <i class="fa fa-gift"></i>إضافة قسم جديد </div>
                <div class="tools">
                    <a href="javascript:;" class="collapse"> </a>
                    <a href="#portlet-config" data-toggle="modal" class="config"> </a>
                    <a href="javascript:;" class="reload"> </a>
                    <a href="javascript:;" class="remove"> </a>
                </div>
            </div>
            <div class="portlet-body form">
                <!-- BEGIN FORM-->
            <form action="{{route('tasks.store')}}" method="POST" class="form-horizontal form-row-seperated">
                @csrf
                    <div class="form-body">
                        <div class="form-group">
                            <label class="control-label col-md-3"> المستخدم</label>
                            <div class="col-md-9">
                                <select class="form-control" name="user_id" value="{{ old('user_id') }} ">
                                    <option></option>
                                    @foreach($users as $user)
            <option value="{{$user->id}}" {{(old('user_id')==$user->id)? 'selected':''}}>{{$user->name}}</option>

                                    @endforeach	
                                </select>
                            </div>
                        </div>
                         <div class="form-group">
                            <label class="control-label col-md-3"> نوع المهمة</label>
                            <div class="col-md-9">
                                <select class="form-control" name="type_id">
                                    <option></option>
                                    @foreach($taskstype as $type)
        <option value="{{$type->id}}" {{(old('type_id')==$type->id)? 'selected':''}}>{{$type->type}}</option>

                                    @endforeach	
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3"> الحالة</label>
                            <div class="col-md-9">
                                <select class="form-control" name="statue_id">
                                    <option></option>
                                    @foreach($taskstatus as $status)
    <option value="{{$status->id}}" {{(old('statue_id')==$status->id)? 'selected':''}}>{{$status->status}}</option>

    
                                    @endforeach	
                                </select>
                            </div>
                        </div>
                         <div class="form-group">
                                <label class="control-label col-md-3">تاريخ بداية المهمة</label>
                                <div class="col-md-3">
                                    <div class="input-group">
                                        <input type="date" class="form-control" value="{{old('sdate')}}" name="sdate">
                                      
                                    </div>
                                </div>
                            </div>
                             <div class="form-group">
                                <label class="control-label col-md-3">تاريخ نهاية المهمة</label>
                                <div class="col-md-3">
                                    <div class="input-group ">
                                    <input type="date" class="form-control" value="{{old('edate')}}" name="edate">
                                      
                                    </div>
                                </div>
                            </div> 
                             <div class="form-group">
                            <label class="control-label col-md-3"> ساعات العمل</label>
                            <div class="col-md-9">
                                <select class="form-control" name="worktime">
                                   <option></option>
                                    <option value="1"> 1</option>
                                    <option value="2"> 2</option>
                                    <option value="3"> 3</option>
                                    <option value="4"> 4</option>
                                    <option value="5"> 5</option>
                                    <option value="6"> 6</option>
                                    <option value="7"> 7</option>
                                    <option value="8"> 8</option>
                                </select>
                            </div>
                        </div>
                         <div class="form-group">
                            <label class="control-label col-md-3">عنوان المهمة</label>
                            <div class="col-md-9">
                                <input type="text" placeholder="عنوان المهمة" name="title" class="form-control" />
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3"> الإدارة</label>
                            <div class="col-md-9">
                                <select class="form-control" name="administration_id"> 
                                    <option></option>
                                    @foreach($administrations as $administration)
    <option value="{{$administration->id}}" {{(old('statue_id')==$administration->id)? 'selected':''}}>{{$administration->title}}</option>
                                    @endforeach	
                                </select>
                            </div>
                        </div>
                         <div class="form-group">
                            <label class="control-label col-md-3"> القسم</label>
                            <div class="col-md-9">
                                <select class="form-control" name="section_id">
                                    <option></option>
                                    @foreach($sections as $section)
                                        <option value="{{ $section->id }}">{{ $section->title }}</option>
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
                                <label class="control-label col-md-3"> ملاحظات</label>
                                <div class="col-md-9">
                                    <textarea class="form-control" name="note" rows="3">{{ old('note') }}</textarea>
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