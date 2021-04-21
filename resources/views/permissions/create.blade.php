@extends('layouts.app') 
@section('content')
@include('shared.msg')
<div class="card">
    <div class="card-header">
        {{ trans('global.create') }} {{ trans('cruds.permission.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route('permissions.store') }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label class="required" for="title">{{ trans('cruds.permission.fields.title') }}</label>
                <input class="form-control {{ $errors->has('title') ? 'is-invalid' : '' }}" type="text" name="title" id="title" value="{{ old('title', '') }}" required>
                @if($errors->has('title'))
                    <div class="invalid-feedback">
                        {{ $errors->first('title') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.permission.fields.title_helper') }}</span>
            </div>
            <div class="form-group">
                        <button type="submit" class="btn green">
                <i class="fa fa-check"></i> حفظ</button>
                <a href="{{route('permissions.index')}}" type="button" class="btn default">إلغاء</a>

            </div>
        </form>
    </div>
</div>



@endsection