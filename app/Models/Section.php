<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
    protected $table ="sections";

    protected $fillable = ['title' ,'user_id' , 'public_id' , 'administration_id' ];

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
  
    public function publicAdministration()
    {
      return $this->belongsTo(PublicAdministration::class , 'public_id' , 'id');
    }

     public function administration()
     {
       return $this->belongsTo(Administration::class , 'administration_id' , 'id');
     }
}
