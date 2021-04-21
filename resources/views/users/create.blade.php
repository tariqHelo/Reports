@extends('layouts.app') 
@section('content')
@include('shared.msg')
<div class="card">
    <div class="card-header">
        {{ trans('global.create') }} {{ trans('cruds.user.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("users.store") }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label class="required" for="name"> <h4>الإسم بالكامل  </h4>  </label>
                <input class="form-control" type="text" name="name" id="name" value="{{ old('name', '') }}" required>
        
            </div>
            <div class="form-group">
                <label class="required" for="name"> <h4>رقم الهوية </h4>  </label>
                <input class="form-control" type="text" name="name" id="name" value="{{ old('name', '') }}" required>
            </div>
             <div class="form-group">
                <label class="required" for="name"> <h4> المسمي الوظيفي </h4>  </label>
                <input class="form-control" type="text" name="name" id="name" value="{{ old('name', '') }}" required>   
            </div>
           <div class="form-group">
                <label class="required" for="email"> <h4>  رقم الجوال </h4> </label>
                <input class="form-control " type="" name="email" id="email" value="{{ old('email') }}" required>
 
            </div>
            <div class="form-group">
                <label class="required" for="email"> <h4> البريد الإلكتروني </h4> </label>
                <input class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}" type="email" name="email" id="email" value="{{ old('email') }}" required>
 
            </div>
            <div class="form-group">
                <label class="required" for="password"><h4> كلمة المرور </h4></label>
                <input class="form-control {{ $errors->has('password') ? 'is-invalid' : '' }}" type="password" name="password" id="password" required>
            </div>

             <div class="form-group">
                <label class="required" for="password"><h4> الإدارة العامة </h4></label>
                 <select class="form-control"name="public_id"> 
                        <option></option>
                            {{-- @foreach($publics as $public)
                                <option value="{{ $public->id }}">{{ $public->title }}</option>
                            @endforeach	 --}}
                    </select>
            </div>
            <div class="form-group">
                <label class="required" for="password"><h4>  الفرع </h4></label>
                 <select class="form-control"name="public_id"> 
                        <option></option>
                            {{-- @foreach($publics as $public)
                                <option value="{{ $public->id }}">{{ $public->title }}</option>
                            @endforeach	 --}}
                    </select>
            </div>
            <div class="form-group">
                <label class="required" for="password"><h4>  الإدارة </h4></label>
                 <select class="form-control"name="public_id"> 
                        <option></option>
                            {{-- @foreach($publics as $public)
                                <option value="{{ $public->id }}">{{ $public->title }}</option>
                            @endforeach	 --}}
                    </select>
            </div>
            <div class="form-group">
                <label class="required" for="password"><h4>  القسم </h4></label>
                 <select class="form-control"name="public_id"> 
                        <option></option>
                            {{-- @foreach($publics as $public)
                                <option value="{{ $public->id }}">{{ $public->title }}</option>
                            @endforeach	 --}}
                    </select>
            </div>

             
            <div class="form-group">
                <label class="required" for="roles"><h4>  الإدوار</h4></label>
                
                  <select id="multiple" class="form-control select2-multiple" name="roles[]" id="roles" multiple required>
                        @foreach($roles as $id => $roles)
                        <option value="{{ $id }}" {{ in_array($id, old('roles', [])) ? 'selected' : '' }}>{{ $roles }}</option>
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
</div>



@endsection