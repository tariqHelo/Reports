@extends('layouts.app') 
@section('content')
@include('shared.msg')

 <div class="tab-pane" id="tab_4">
        <div class="portlet box purple">
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
            <form action="{{route('sections.store')}}" method="POST" class="form-horizontal form-row-seperated">
                @csrf
                    <div class="form-body">
                        <div class="form-group">
                            <label class="control-label col-md-3">الإسم </label>
                            <div class="col-md-9">
                                <input type="text" placeholder="الإسم" name="title" class="form-control" />
                            </div>
                        </div>
                       
                       
                         <div class="form-group">
                            <label class="control-label col-md-3">الإدارة العامة التابع لها</label>
                            <div class="col-md-9">
                                <select class="form-control"name="public_id"> 
                                    <option></option>
                                    @foreach($publics as $public)
                                        <option value="{{ $public->id }}">{{ $public->title }}</option>
                                    @endforeach	
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3"> الإدارة التابع لها</label>
                            <div class="col-md-9">
                                <select class="form-control" name="public_id"> 
                                    <option></option>
                                    @foreach($administrations as $administration)
                                        <option value="{{ $administration->id }}">{{ $administration->title }}</option>
                                    @endforeach	
                                </select>
                            </div>
                        </div>
                         <div class="form-group">
                            <label class="control-label col-md-3">مدير القسم</label>
                            <div class="col-md-9">
                                <select class="form-control" name="user_id">
                                    <option></option>
                                    @foreach($users as $user)
                                        <option value="{{ $user->id }}">{{ $user->name }}</option>
                                    @endforeach	
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="form-actions">
                        <div class="row">
                            <div class="col-md-offset-3 col-md-9">
                                <button type="submit" class="btn green">
                                    <i class="fa fa-pencil"></i> حفظ</button>
                                <a href="{{route('sections.index')}}" type="button" class="btn default">إلغاء</a>
                            </div>
                        </div>
                    </div>
                </form>
                <!-- END FORM-->
            </div>
        </div>
@endsection