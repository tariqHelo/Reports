<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;
      
     protected $table ="tasks";

     protected $fillable = ['title' ,'sdate' , 'edate' , 'worktime' ,
      'note' , 'employee_id' , 'statue_id' , 'section_id' , 'type_id' , 'administration_id' , 'user_id' ];
    
    public function type()
    {
    return $this->belongsTo(TasksType::class, 'type_id ' , 'id');
    }
    public function section()
    {
    return $this->belongsTo(Section::class, 'section_id ' , 'id');
    }
    public function statue()
    {
    return $this->belongsTo(TaskStatus::class, 'statue_id' , 'id');
    }

    public function employee()
    {
    return $this->belongsTo(employee::class, 'employee_id' , 'id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id' ,  'id');
    }

    public function administration()
    {
      return $this->belongsTo(Administration::class , 'administration_id' , 'id');
    }
}
