<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Branche extends Model
{

    protected $table ="branches";

    protected $fillable = ['title' ,'public_id' , 'user_id'];

    use HasFactory;

    /**
    * Get the user that owns the Branche
    *
    * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
    */
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id' ,  'id');
    }
      /**
    * Get the user that owns the Branche
    *
    * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
    */
       public function administration(): BelongsTo
       {
       return $this->belongsTo(Administration::class , 'administration_id' , 'id');
       }
  
}
