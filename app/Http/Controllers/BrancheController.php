<?php

namespace App\Http\Controllers;
use App\Models\PublicAdministration;
use App\Models\Branche;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Session;
use Gate;
use Symfony\Component\HttpFoundation\Response;

class BrancheController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
   /// abort_if(Gate::denies('Branches_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

         $branches = Branche::orderBy('id', 'asc')->get();
        return view('admin.master.branches.index')
        ->with('branches' , $branches);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
          $publics = PublicAdministration::get();
          $users = User::get();
          return view('admin.master.branches.create')
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
            'public_id' => 'required'

        ],
        [
            'title.required' => __('يرجي إدخال الإسم '),
            'public_id.required' => __('يرجي إخال الإدارة العامة التابع لها'),

        ]);
          Branche::create($request->all());
          \Session::flash("msg", "تم إضافة الفرع بنجاح");
          return redirect()->route('branches.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Branche  $branche
     * @return \Illuminate\Http\Response
     */
    public function show(Branche $branche)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Branche  $branche
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request , $id)
    {   
        $branches = Branche::find($id);
        $publics = PublicAdministration::get();
        $users = User::get();
        return view('admin.master.branches.edit')
        ->with('branches' , $branches)
        ->with('publics' , $publics)
        ->with('users' , $users);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Branche  $branche
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {    //dd($request->all());
            $this->validate($request, [
            'title'  => 'required',
            'public_id' => 'required'

        ],
        [
            'title.required' => __('يرجي إدخال الإسم '),
            'public_id.required' => __('يرجي إخال الإدارة العامة التابع لها'),

        ]);
        Branche::find($id)->update($request->all());
        Session::flash("msg", "تم التعديل بنجاح");
        return redirect()->route('branches.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Branche  $branche
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $branches = Branche::findOrFail($id)->delete();
        session()->flash("msg", "w: تم الحذف بنجاح");
        return redirect()->route('branches.index');
    }

}
