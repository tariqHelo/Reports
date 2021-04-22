<?php

namespace App\Http\Controllers\Admin;
use App\Models\Section;

use App\Models\Branche;
use Illuminate\Support\Facades\Hash;
use Validator;
use Illuminate\Validation\Rule;

use App\Models\Administration;
use App\Models\PublicAdministration;
use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyUserRequest;
use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\UpdateUserRequest;
use App\Models\Role;
use App\Models\User;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class UsersController extends Controller
{
    public function index()
    { 
        
       abort_if(Gate::denies('user_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $users = User::all();

        return view('users.index', compact('users'));
    }

    public function create()
    {
        abort_if(Gate::denies('user_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

         $roles = Role::all()->pluck('title', 'id');
         $publics = PublicAdministration::get();
         $administrations = Administration::get();
         $branches = Branche::get();
         $sections = Section::get();

        return view('users.create', compact('roles' , 'publics' , 
        'administrations' , 'branches' ,'sections'));
    }

    public function store(Request $request)
    {
       abort_if(Gate::denies('user_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');
         $rules = [
            'name' => 'required',
            'numberId' => 'required',
            'jobtitle' => 'required',
            'phone' => 'required',
             'email' => 'required|email|unique:users,email',
            'password' => 'required'
         ];
         $customMessages = [
         'name.required' => 'يرجي إدخال الإسم بالكامل ',
         'numberId.required' => 'يرجي إدخال  رقم الهوية ',
         'jobtitle.required' => 'يرجي إدخال المسمي الوظيفي  ',
         'phone.required' => 'يرجي إدخال رقم الجوال  ',
        'email.required' => 'يرجي إدخال الإيميل  ',
        'password.required' => 'يرجي إدخال  كلمة المرور ',

         ];

        $validater = Validator::make($request->all(), $rules , $customMessages);

         if($request->public_id == null && $request->branche_id == null 
         && $request->administration_id == null &&
            $request->section_id == null)
            {
                $validater->after(function($validater){
                $validater->errors()->add('feild' , ' واحدة من هذة القيم يجب أنا تكون موجودة (إدارة عامة أو فرع أو إدارة
                أو قسم) ');
                });
         }

         if($validater->fails()){
         return redirect()->back()
         ->withErrors($validater)
         ->withInput();
         }

      

        $data = $request->all();
        $data['password'] = Hash::make($request->password);
        $user = User::create($data);
        $user->roles()->sync($request->input('roles', []));
        \Session::flash("msg", "تم إضافة المستخدم بنجاح");

        return redirect()->route('users.index');

    }

    public function edit(User $user)
    {
       abort_if(Gate::denies('user_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $roles = Role::all()->pluck('title', 'id');

        $user->load('roles');
        $publics = PublicAdministration::get();
        $administrations = Administration::get();
        $branches = Branche::get();
        $sections = Section::get();
        return view('users.edit', compact('roles', 'publics' ,
        'administrations' , 'branches' ,'sections' , 'user'));
    }

    public function update(UpdateUserRequest $request, User $user)
    {
        $user->update($request->all());
        $user->roles()->sync($request->input('roles', []));
        \Session::flash("msg", "تم تعديل المستخدم بنجاح");

        return redirect()->route('users.index');

    }

    public function show(User $user)
    {
      abort_if(Gate::denies('user_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $user->load('roles');

        return view('users.show', compact('user'));
    }

    public function destroy(User $user)
    {
        abort_if(Gate::denies('user_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $user->delete();
           session()->flash("msg", "w: تم الحذف بنجاح");
        return back();

    }

    public function massDestroy(MassDestroyUserRequest $request)
    {
        User::whereIn('id', request('ids'))->delete();
         session()->flash("msg", "w: تم الحذف بنجاح");
        return response(null, Response::HTTP_NO_CONTENT);

    }
}
