<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PublicAdministration extends Model
{
    use HasFactory;

    protected $table ="public_administrations";
    
    protected $fillable = ['title' , 'user_id'];
    
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id' ,  'id');
    }
}
