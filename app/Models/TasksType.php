<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TasksType extends Model
{
    use HasFactory;

      protected $table ="tasks_types";

      protected $fillable = ['type'];
}
