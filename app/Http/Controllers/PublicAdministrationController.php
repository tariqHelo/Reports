<?php

namespace App\Http\Controllers;

use App\Models\PublicAdministration;
use App\Models\User;

use Illuminate\Support\Facades\Session;
use App\Http\Requests\PublicRequest;

use Illuminate\Http\Request;

class PublicAdministrationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $publics = PublicAdministration::orderBy('id', 'DESC')->get();
       return view('admin.publicAdministration.index')
       ->with('publics' , $publics);
       //->with('users', $users);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $users = User::get();
      return view('admin.publicAdministration.create')
      ->with('users' , $users);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PublicRequest $request)
    {
       // dd($request->all());
          PublicAdministration::create($request->all());
          \Session::flash("msg", "تم إضافة الإدارة بنجاح");
          return redirect()->route('publicAdministration.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PublicAdministration  $publicAdministration
     * @return \Illuminate\Http\Response
     */
    public function show(PublicAdministration $publicAdministration)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PublicAdministration  $publicAdministration
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request , $id)
    {
           //dd(20);
           $users = User::get();
           $publics = PublicAdministration::find($id);
           return view('admin.publicAdministration.edit')
           ->with('users' , $users)
           ->with('publics' , $publics);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PublicAdministration  $publicAdministration
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {  //   dd($request->all());
         $this->validate($request, [
            'title'  => 'required',
            'user_id' => 'required'

        ],
        [
            'title.required' => __('يرجي إدخال الإسم '),
            'user_id.required' => __('يرجي إدخال مدير الإدارة'),

        ]);
        PublicAdministration::find($id)->update($request->all());
        Session::flash("msg", "تم التعديل بنجاح");
        return redirect()->route('publicAdministration.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PublicAdministration  $publicAdministration
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $publics = PublicAdministration::findOrFail($id)->delete();
         session()->flash("msg", "w: تم الحذف بنجاح");
          return redirect()->route('publicAdministration.index');
    }
}
