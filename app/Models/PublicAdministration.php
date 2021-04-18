<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PublicAdministration extends Model
{
    use HasFactory;

    protected $table ="public_administrations";
    
    protected $fillable = ['title'];
    
     public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
