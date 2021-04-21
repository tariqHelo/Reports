@extends('layouts.app') 
@section('content')
@include('shared.msg')
{{-- <div class="card">
    <div class="card-header">
        {{ trans('global.edit') }} {{ trans('cruds.user.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("users.update", [$user->id]) }}" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label class="required" for="name">{{ trans('cruds.user.fields.name') }}</label>
                <input class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" type="text" name="name" id="name" value="{{ old('name', $user->name) }}" required>
                <span class="help-block">{{ trans('cruds.user.fields.name_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="email">{{ trans('cruds.user.fields.email') }}</label>
                <input class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}" type="email" name="email" id="email" value="{{ old('email', $user->email) }}" required>
                <span class="help-block">{{ trans('cruds.user.fields.email_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="password">{{ trans('cruds.user.fields.password') }}</label>
                <input class="form-control {{ $errors->has('password') ? 'is-invalid' : '' }}" type="password" name="password" id="password" required>
                
                <span class="help-block">{{ trans('cruds.user.fields.password_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="roles">{{ trans('cruds.user.fields.roles') }}</label>
                <div style="padding-bottom: 4px">
                    <span class="btn btn-info btn-xs select-all" style="border-radius: 0">{{ trans('global.select_all') }}</span>
                    <span class="btn btn-info btn-xs deselect-all" style="border-radius: 0">{{ trans('global.deselect_all') }}</span>
                </div>
                <select class="form-control select2 {{ $errors->has('roles') ? 'is-invalid' : '' }}" name="roles[]" id="roles" multiple required>
                    @foreach($roles as $id => $roles)
                        <option value="{{ $id }}" {{ (in_array($id, old('roles', [])) || $user->roles->contains($id)) ? 'selected' : '' }}>{{ $roles }}</option>
                    @endforeach
                </select>
                @if($errors->has('roles'))
                    <div class="invalid-feedback">
                        {{ $errors->first('roles') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.user.fields.roles_helper') }}</span>
            </div>
            <div class="form-group">
                <button class="btn btn-danger" type="submit">
                    حفظ
                </button>
                <a href="{{route('users.index')}}" type="button" class="btn default">إلغاء</a>

            </div>
        </form>
    </div>
</div> --}}

  <!-- BEGIN PROFILE CONTENT -->
<div class="profile-content">
        <form method="POST" action="{{ route("users.store") }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label class="required" for="name"> <h4>الإسم بالكامل  </h4>  </label>
            <input class="form-control" type="text" name="name" id="name" value="{{ old('name', $user->name)}}" required>
        
            </div>
            <div class="form-group">
                <label class="required" for="name"> <h4>رقم الهوية </h4>  </label>
                <input class="form-control" type="number" name="numberId" id="numberId" value="{{ old('numberId', $user->numberId) }}" required>
            </div>
             <div class="form-group">
                <label class="required" for="name"> <h4> المسمي الوظيفي </h4>  </label>
                <input class="form-control" type="text" name="jobtitle" id="jobtitle" value="{{ old('jobtitle', $user->jobtitle) }}" required>   
            </div>
           <div class="form-group">
                <label class="required" for="email"> <h4>  رقم الجوال </h4> </label>
                <input class="form-control " type="number" name="phone" id="phone" value="{{ old('phone', $user->phone) }}" required>
 
            </div>
            <div class="form-group">
                <label class="required" for="email"> <h4> البريد الإلكتروني </h4> </label>
                <input class="form-control" type="email" name="email" id="email" value="{{ old('email', $user->email) }}" required>
 
            </div>
            <div class="form-group">
                <label class="required" for="password"><h4> كلمة المرور </h4></label>
                <input class="form-control {{ $errors->has('password') ? 'is-invalid' : '' }}" type="password" name="password" id="password" required>
            </div>

             <div class="form-group">
                <label class="required" for="password"><h4> الإدارة العامة </h4></label>
                 <select class="form-control"name="public_id"> 
                        <option></option>
                            @foreach($publics as $public)
    <option {{$public->id == $user->public_id?"selected":""}} value='{{$public->id}}'>{{$public->title}}</option>
                            @endforeach	
                    </select>
            </div>
            <div class="form-group">
                <label class="required" for="password"><h4>  الفرع </h4></label>
                 <select class="form-control"name="branche_id"> 
                        <option></option>
                            @foreach($branches as $branche)
    <option {{$branche->id == $user->branche_id?"selected":""}} value='{{$branche->id}}'>{{$branche->title}}</option>
                            @endforeach	
                    </select>
            </div>
            <div class="form-group">
                <label class="required" for="password"><h4>  الإدارة </h4></label>
                 <select class="form-control"name="administration_id"> 
                        <option></option>
                            @foreach($administrations as $administration)
    <option {{$administration->id == $user->administration_id?"selected":""}} value='{{$administration->id}}'>{{$administration->title}}</option>
                            @endforeach	
                    </select>
            </div>
            <div class="form-group">
                <label class="required" for="password"><h4>  القسم </h4></label>
                 <select class="form-control"name="section_id"> 
                        <option></option>
                          @foreach($sections as $section)
            <option {{$section->id == $user->section_id?"selected":""}} value='{{$section->id}}'>{{$section->title}}</option>
                            @endforeach	
                    </select>
            </div>

             
            <div class="form-group">
                <label class="required" for="roles"><h4>  الإدوار</h4></label>
                
                 <select class="form-control select2 {{ $errors->has('roles') ? 'is-invalid' : '' }}" name="roles[]" id="roles" multiple required>
                    @foreach($roles as $id => $roles)
                        <option value="{{ $id }}" {{ (in_array($id, old('roles', [])) || $user->roles->contains($id)) ? 'selected' : '' }}>{{ $roles }}</option>
                    @endforeach
                </select>
                </div>
            </div>
          
            <div class="form-group">
                <button class="btn btn-danger" type="submit">
                    {{ trans('global.save') }}
                </button>
                <a href="{{route('users.index')}}" type="button" class="btn default">إلغاء</a>

            </div>
        </form>
</div>
@endsection