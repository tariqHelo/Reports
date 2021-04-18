<?php

namespace App\Http\Controllers;

use App\Models\Administration;
use App\Models\PublicAdministration;

use Illuminate\Http\Request;
use App\Models\Branche;
use App\Models\User;

class AdministrationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $administrations = Administration::orderBy('id', 'DESC')->get();
        return view('admin.administration.index')
        ->with('administrations' , $administrations);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    { 
        $branches = Branche::get();
        $publics = PublicAdministration::get();
        $users = User::get();
        return view('admin.administration.create')
           ->with('branches' , $branches)
          ->with('publics' , $publics)
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
          //   dd($request->all());
         $this->validate($request, [
            'title'  => 'required',
            'public_id' => 'required',
            // 'branche_id' => 'required',
            // 'user_id' => 'required'
        ],
        [
            'title.required' => __('يرجي إدخال الإسم '),
            'public_id.required' => __('يرجي إخال الإدارة العامة التابع لها'),
            // 'branche_id.required' => __('يرجي إخال الإدارة العامة التابع لها'),
            // 'user_id.required' => __('يرجي إخال الإدارة العامة التابع لها'),
        ]);
          Administration::create($request->all());
          \Session::flash("msg", "تم إضافة الفرع بنجاح");
          return redirect()->route('administration.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Administration  $administration
     * @return \Illuminate\Http\Response
     */
    public function show(Administration $administration)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Administration  $administration
     * @return \Illuminate\Http\Response
     */
    public function edit(Administration $administration)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Administration  $administration
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Administration $administration)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Administration  $administration
     * @return \Illuminate\Http\Response
     */
    public function destroy(Administration $administration)
    {
        //
    }
}
