@extends('layouts.app') 
@section('content')
@include('shared.msg')

<div class="card">
    <div class="card-header ">
        {{ trans('global.show') }} {{ trans('cruds.user.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group ">
                <a class="btn btn-danger" href="{{ route('users.index') }}">
                    الرجوع إلي القائمة
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.user.fields.id') }}
                        </th>
                        <td>
                            {{ $user->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            الإسم 
                        </th>
                        <td>
                            {{ $user->name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            الإيميل
                        </th>
                        <td>
                            {{ $user->email }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            رقم الهوية
                        </th>
                        <td>
                            {{ $user->numberId  ?? ""}}
                        </td>
                    </tr>
                     <tr>
                        <th>
                            المسمي الوظيفي
                        </th>
                        <td>
                            {{ $user->jobtitle  ?? ""}}
                        </td>
                    </tr>
                     <tr>
                        <th>
                           رقم الجوال
                        </th>
                        <td>
                            {{ $user->phone  ?? ""}}
                        </td>
                    </tr>
                     <tr>
                        <th>
                           الإدارة العامة 
                        </th>
                        <td>
                            {{ $user->publicAdministration ?? "" }}
                        </td>
                    </tr>
                     <tr>
                        <th>
                           الفرع
                        </th>
                        <td>
                            {{ $user->branche ?? ""}}
                        </td>
                    </tr>
                     <tr>
                        <th>
                            الإدارة
                        </th>
                        <td>
                            {{ $user->administration ?? ""}}
                        </td>
                    </tr>
                     <tr>
                        <th>
                            القسم
                        </th>
                        <td>
                            {{ $user->section ?? "" }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            الإداور
                        </th>
                        <td>
                            @foreach($user->roles as $key => $roles)
                                <span class="label label-info">{{ $roles->title }}</span>
                            @endforeach
                        </td>
                    </tr>
                </tbody>
            </table>
              <div class="form-group ">
                <a class="btn btn-danger" href="{{ route('users.index') }}">
                    الرجوع إلي القائمة
                </a>
            </div>
        </div>
    </div>
</div>



@endsection