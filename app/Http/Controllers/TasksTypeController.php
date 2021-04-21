<?php

namespace App\Http\Controllers;

use App\Models\TasksType;
use Illuminate\Http\Request;

class TasksTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
         $taskstype = TasksType::get();
        return view('admin.taskstype.index')
        ->with('taskstype' , $taskstype);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.taskstype.create');
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
        'type' => 'required',

        ],
        [
        'type.required' => __('يرجي إدخال نوع الحالة '),
        ]);
        TasksType::create($request->all());
        \Session::flash("msg", "تم إضافة الحالة بنجاح");
        return redirect()->route('taskstype.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\TaskStatus  $taskStatus
     * @return \Illuminate\Http\Response
     */
    public function show(TaskStatus $taskStatus)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TaskStatus  $taskStatus
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request , $id)
    {
        $taskstype = TasksType::find($id);
        return view('admin.taskstype.edit')
        ->with('taskstype' , $taskstype);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\TaskStatus  $taskStatus
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
         $this->validate($request, [
         'type' => 'required',

         ],
         [
         'type.required' => __('يرجي إدخال نوع الحالة '),
         ]);
        TasksType::find($id)->update($request->all());
         \Session::flash("msg", "تم تعديل الحالة بنجاح");
         return redirect()->route('taskstype.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TaskStatus  $taskStatus
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $taskstype = TasksType::findOrFail($id)->delete();
        session()->flash("msg", "w: تم الحذف بنجاح");
        return redirect()->route('taskstype.index');
    }
}
