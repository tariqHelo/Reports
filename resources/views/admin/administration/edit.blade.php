@extends('layouts.app') 
@section('content')
@include('shared.msg')

<div class="col-md-12 ">
        <!-- BEGIN SAMPLE FORM PORTLET-->
        <div class="portlet light ">
            <div class="portlet-title">
                <div class="caption font-green">
                    <i class="icon-pin font-green"></i>
                    <span class="caption-subject bold uppercase"> إضافة إدارة جديدة</span>
                </div>
            </div>
            <div class="portlet-body form">
            <form action="{{route('administration.update' ,$administrations->id )}}" method="POST" role="form">
                @csrf
                @method('PATCH')
                    <div class="form-body">
                        <div class="form-group form-md-line-input form-md-floating-label">
                        <input type="text" class="form-control" name="title" value="{{$administrations->title}}">
                            <label for="form_control_1">إسم الإدارة</label>
                            <span class="help-block">Some help goes here...</span>
                        </div>
                        <div class="form-group form-md-line-input form-md-floating-label has-info">
                            <select class="form-control edited" name="public_id">
                                 <option></option>
                                    @foreach($publics as $public)
                                        <option value="{{ $public->id }}">{{ $public->title }}</option>
                                    @endforeach	
                            </select>
                            <label for="form_control_1"> إختيار الإدارة العامة</label>
                        </div>
                         <div class="form-group form-md-line-input form-md-floating-label has-info">
                            <select class="form-control edited" name="branch_id">
                               <option></option>
                                   @foreach($branches as $branche)
                                        <option value="{{ $branche->id }}">{{ $branche->title }}</option>
                                    @endforeach	
                            </select>
                            <label for="form_control_1"> إختيار الفرع</label>
                        </div>
                         <div class="form-group form-md-line-input form-md-floating-label has-info">
                            <select class="form-control edited" name="user_id">
                                       <option></option>
                                    @foreach($users as $user)
                                        <option value="{{ $user->id }}">{{ $user->name }}</option>
                                    @endforeach	
                            </select>
                            <label for="form_control_1"> إختيار مدير الإدارة</label>
                        </div>
                    <div class="form-actions noborder">
                        <button type="submit" class="btn blue">حفظ</button>
                    <a href="{{route('administration.index')}}" type="button" class="btn default">إلغاء</a>
                    </div>
                </form>
            </div>
    </div>
@endsection