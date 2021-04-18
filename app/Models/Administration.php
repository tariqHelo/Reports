<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Administration extends Model
{

    protected $table ="administrations";

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

    public function branche(): BelongsTo
    {
        return $this->belongsTo(Branche::class);
    }

}
