<?php

namespace App\Http\Controllers;

use App\Models\Task;

use App\Models\User;
use App\Models\Branche;
use App\Models\TaskStatus;
use App\Models\Administration;
use App\Models\TasksType;
use App\Models\Section;
use App\Models\employee;
use Validator;

use Illuminate\Support\Facades\Session;


use Illuminate\Http\Request;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {  $tasks = Task::orderBy('id' , 'asc')->get();
      return view('admin.tasks.index')
      ->with('tasks' , $tasks);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $users = User::get();
      $branches = Branche::get();
      $taskstatus = TaskStatus::get();
      $taskstype = TasksType::get();
      $administrations = Administration::get();
      $sections =  Section::get();
      $employees = employee::get();

     return view('admin.tasks.create')
      ->with('users' , $users)
      ->with('branches' , $branches)
      ->with('taskstatus' , $taskstatus)
      ->with('taskstype' , $taskstype)
      ->with('administrations' , $administrations)
      ->with('sections' , $sections)
      ->with('employees' , $employees);

    

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules = [
            'user_id' => 'required',
            'type_id' => 'required',
            'statue_id' => 'required',
            'sdate' => 'required',
           /// 'administration_id' => 'required',
         ];
         $customMessages = [
         'user_id.required' => 'يرجي إدخال الإسم بالكامل ',
         'type_id.required' => 'يرجي إدخال رقم الهوية ',
         'statue_id.required' => 'يرجي إدخال المسمي الوظيفي ',
         'phone.required' => 'يرجي إدخال رقم الجوال  ',
        'sdate.required' => 'يرجي إدخال الإيميل ',

         ];

        $validater = Validator::make($request->all(), $rules , $customMessages);

         if($request->edate == null && $request->worktime == null)
            {
                $validater->after(function($validater){
                $validater->errors()->add('feild' , '(يرجي إدخال نهاية المهمة أو ساعات العمل)' );
                });
         }

         if($validater->fails()){
         return redirect()->back()
         ->withErrors($validater)
         ->withInput();
         }
         Task::create($request->all());
         Session::flash("msg", "تم إضافة المهمة بنجاح");
         return redirect()->route('tasks.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function show(Task $task)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request , $id)
    {    
        $tasks = Task::find($id);
         $users = User::get();
         $branches = Branche::get();
         $taskstatus = TaskStatus::get();
         $taskstype = TasksType::get();
         $administrations = Administration::get();
         $sections = Section::get();
         $employees = employee::get();

         return view('admin.tasks.edit')
         ->with('users' , $users)
         ->with('branches' , $branches)
         ->with('taskstatus' , $taskstatus)
         ->with('taskstype' , $taskstype)
         ->with('administrations' , $administrations)
         ->with('sections' , $sections)
         ->with('employees' , $employees)
        ->with('tasks' , $tasks);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        Task::find($id)->update($request->all());
        Session::flash("msg", "تم تعديل المهمة بنجاح");
        return redirect()->route('tasks.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tasks = Task::findOrFail($id)->delete();
        session()->flash("msg", "w: تم الحذف بنجاح");
        return redirect()->route('publicAdministration.index');
    }
}
