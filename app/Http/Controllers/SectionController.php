<?php

namespace App\Http\Controllers;

use App\Models\Section;
use Illuminate\Http\Request;
use App\Models\Administration;
use App\Models\PublicAdministration;

use App\Models\User;
use Illuminate\Support\Facades\Session;

class SectionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {    $sections = Section::orderBy('id', 'asc')->get();
          return view('admin.master.sections.index')
          ->with('sections' , $sections);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        
        $publics = PublicAdministration::get();
        $administrations = Administration::get();
        $users = User::get();
        return view('admin.master.sections.create')
        ->with('publics' , $publics)
        ->with('administrations' , $administrations)
        ->with('users' , $users);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
          $this->validate($request, [
            'title'  => 'required',
        ],
        [
            'title.required' => __('يرجي إدخال الإسم '),

        ]);
          Section::create($request->all());
          \Session::flash("msg", "تم إضافة القسم بنجاح");
          return redirect()->route('sections.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Section  $section
     * @return \Illuminate\Http\Response
     */
    public function show(Section $section)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Section  $section
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request , $id)
    { // dd(20);
       $sections = Section::find($id);
       $publics = PublicAdministration::get();
       $administrations = Administration::get();
       $users = User::get();
       return view('admin.master.sections.edit')
       ->with('sections' , $sections)
       ->with('publics' , $publics)
       ->with('administrations' , $administrations)
       ->with('users' , $users);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Section  $section
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
         $this->validate($request, [
            'title'  => 'required',
        ],
        [
            'title.required' => __('يرجي إدخال الإسم '),

        ]);
        Section::find($id)->update($request->all());
        \Session::flash("msg", "تم تعديل القسم بنجاح");
        return redirect()->route('sections.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Section  $section
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
    $sections = Section::findOrFail($id)->delete();
    session()->flash("msg", "w: تم الحذف بنجاح");
    return redirect()->route('sections.index');
    }
}
