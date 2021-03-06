<?php

namespace App\Models;
use Illuminate\Database\Eloquent\SoftDeletes;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Passport\HasApiTokens;
use \DateTimeInterface;

class User extends Authenticatable
{
    use SoftDeletes, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */


   protected $fillable = [
    'name',
    'email',
    'numberId',
    'jobtitle',
    'phone',
    'public_id',
    'branche_id',
    'administration_id',
    'section_id',
    'password',
    'created_at',
    'updated_at',
    'deleted_at',
    'remember_token',
    'email_verified_at',
   ];


    protected $dates = [
    'updated_at',
    'created_at',
    'deleted_at',
    'email_verified_at',
    ];

    

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function getIsAdminAttribute()
    {
        return $this->roles()->where('id', 1)->exists();
    }

    public function roles()
    {
      return $this->belongsToMany(Role::class);
    }
    public function publicAdministration()
    {
    return $this->belongsTo(PublicAdministration::class , 'public_id' , 'id');
    }

   public function administration()
    {
      return $this->belongsTo(Administration::class , 'administration_id' , 'id');
    }

    
    public function section()
    {
    return $this->belongsTo(Section::class, 'section_id ' , 'id');
    }
    public function branche()
    {
    return $this->belongsTo(Branche::class , 'branche_id' , 'id');
    }

}
