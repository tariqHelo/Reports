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
                <form role="form">
                    <div class="form-body">
                        <div class="form-group form-md-line-input form-md-floating-label">
                            <input type="text" class="form-control" id="form_control_1" value="">
                            <label for="form_control_1">إسم الإدارة</label>
                            <span class="help-block">Some help goes here...</span>
                        </div>
                
                        <div class="form-group form-md-line-input form-md-floating-label has-info">
                            <select class="form-control edited" id="form_control_1">
                                <option value=""></option>
                                <option value="1" selected></option>
                                <option value="2">Option 2</option>
                                <option value="3">Option 3</option>
                                <option value="4">Option 4</option>
                            </select>
                            <label for="form_control_1"> إختيار الإدارة</label>
                        </div>
                         <div class="form-group form-md-line-input form-md-floating-label has-info">
                            <select class="form-control edited" id="form_control_1">
                                <option value=""></option>
                                <option value="1" selected></option>
                                <option value="2">Option 2</option>
                                <option value="3">Option 3</option>
                                <option value="4">Option 4</option>
                            </select>
                            <label for="form_control_1"> إختيار الفرع</label>
                        </div>
                         <div class="form-group form-md-line-input form-md-floating-label has-info">
                            <select class="form-control edited" id="form_control_1">
                                <option value=""></option>
                                <option value="1" selected></option>
                                <option value="2">Option 2</option>
                                <option value="3">Option 3</option>
                                <option value="4">Option 4</option>
                            </select>
                            <label for="form_control_1"> إختيار مدير الإدارة</label>
                        </div>
                    <div class="form-actions noborder">
                        <button type="button" class="btn blue">حفظ</button>
                        <button type="button" class="btn default">إلغاء</button>
                    </div>
                </form>
            </div>
    </div>
        <!-- END SAMPLE FORM PORTLET-->
@endsection