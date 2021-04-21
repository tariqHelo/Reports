<?php

namespace App\Http\Controllers;

use App\Models\TaskStatus;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class TaskStatusController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
         $taskstatus = TaskStatus::get();
        return view('admin.taskstatus.index')
        ->with('taskstatus' , $taskstatus);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.taskstatus.create');
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
        'status' => 'required',

        ],
        [
        'status.required' => __('يرجي إدخال إسم الحالة '),
        ]);
        TaskStatus::create($request->all());
        \Session::flash("msg", "تم إضافة الحالة بنجاح");
        return redirect()->route('taskstatus.index');
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
        $taskstatus = TaskStatus::find($id);
        return view('admin.taskstatus.edit')
        ->with('taskstatus' , $taskstatus);
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
         'status' => 'required',

         ],
         [
         'status.required' => __('يرجي إدخال إسم الحالة '),
         ]);
        TaskStatus::find($id)->update($request->all());
         \Session::flash("msg", "تم تعديل الحالة بنجاح");
         return redirect()->route('taskstatus.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TaskStatus  $taskStatus
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $taskstatus = TaskStatus::findOrFail($id)->delete();
        session()->flash("msg", "w: تم الحذف بنجاح");
        return redirect()->route('taskstatus.index');
    }
}
