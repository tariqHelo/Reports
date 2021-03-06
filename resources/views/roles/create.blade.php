@extends('layouts.app') 
@section('content')
@include('shared.msg')
<div class="card">
    <div class="card-header">
        {{ trans('global.create') }} {{ trans('cruds.role.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("roles.store") }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label class="required" for="title"><h4>Title</h4></label>
                <input class="form-control {{ $errors->has('title') ? 'is-invalid' : '' }}" type="text" name="title" id="title" value="{{ old('title', '') }}" required>
                @if($errors->has('title'))
                    <div class="invalid-feedback">
                        {{ $errors->first('title') }}
                    </div>
                @endif
                <span class="help-block"></span>
            </div>
            <div class="form-group">
                <label class="required" for="permissions"><h4>Permissions</h4></label>
                <select class="form-control select2 {{ $errors->has('permissions') ? 'is-invalid' : '' }}" name="permissions[]" id="permissions" multiple required>
                    @foreach($permissions as $id => $permissions)
                        <option value="{{ $id }}" {{ in_array($id, old('permissions', [])) ? 'selected' : '' }}>{{ $permissions }}</option>
                    @endforeach
                </select>
                @if($errors->has('permissions'))
                    <div class="invalid-feedback">
                        {{ $errors->first('permissions') }}
                    </div>
                @endif
            </div>
            <div class="form-group">
                <button class="btn btn-danger" type="submit">
                    حفظ
				</button>
			<a href="{{route('roles.index')}}" type="button" class="btn default">إلغاء</a>

            </div>
        </form>
    </div>
</div>

	{{-- <div class="form-group">
											<label class="control-label col-md-3">Multi-Value Select</label>
											<div class="col-md-4">
												<select id="select2_sample2" class="form-control select2" multiple>
													<optgroup label="NFC EAST">
													<option>Dallas Cowboys</option>
													<option>New York Giants</option>
													<option>Philadelphia Eagles</option>
													<option>Washington Redskins</option>
													</optgroup>
													<optgroup label="NFC NORTH">
													<option>Chicago Bears</option>
													<option>Detroit Lions</option>
													<option>Green Bay Packers</option>
													<option>Minnesota Vikings</option>
													</optgroup>
													<optgroup label="NFC SOUTH">
													<option>Atlanta Falcons</option>
													<option>Carolina Panthers</option>
													<option>New Orleans Saints</option>
													<option>Tampa Bay Buccaneers</option>
													</optgroup>
													<optgroup label="NFC WEST">
													<option>Arizona Cardinals</option>
													<option>St. Louis Rams</option>
													<option>San Francisco 49ers</option>
													<option>Seattle Seahawks</option>
													</optgroup>
													<optgroup label="AFC EAST">
													<option>Buffalo Bills</option>
													<option>Miami Dolphins</option>
													<option>New England Patriots</option>
													<option>New York Jets</option>
													</optgroup>
													<optgroup label="AFC NORTH">
													<option>Baltimore Ravens</option>
													<option>Cincinnati Bengals</option>
													<option>Cleveland Browns</option>
													<option>Pittsburgh Steelers</option>
													</optgroup>
													<optgroup label="AFC SOUTH">
													<option>Houston Texans</option>
													<option>Indianapolis Colts</option>
													<option>Jacksonville Jaguars</option>
													<option>Tennessee Titans</option>
													</optgroup>
													<optgroup label="AFC WEST">
													<option>Denver Broncos</option>
													<option>Kansas City Chiefs</option>
													<option>Oakland Raiders</option>
													<option>San Diego Chargers</option>
													</optgroup>
												</select>
											</div>
										</div> --}}
@endsection