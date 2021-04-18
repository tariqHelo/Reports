<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
    protected $table ="sections";

    protected $fillable = ['title'];

    use HasFactory;
     /**
    * Get the user that owns the Branche
    *
    * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
    */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
    /**
    * Get the user that owns the Branche
    *
    * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
    */
    public function publicAdministrations(): BelongsTo
    {
        return $this->belongsTo(PublicAdministrations::class);
    }
    /**
    * Get the user that owns the Branche
    *
    * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
    */
    public function administration(): BelongsTo
    {
        return $this->belongsTo(Administration::class);
    }
    
}
