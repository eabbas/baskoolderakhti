<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Log;
use App\Models\attribute;
use App\Models\attribute_package;
use App\Models\brand;
use App\Models\category;
use App\Models\package_attribute;
use App\Models\package_media;
use App\Models\package;
use App\Models\permision;
use App\Models\product_attribute;
use App\Models\product_category;
use App\Models\product_media;
use App\Models\product;
use App\Models\role;
use App\Models\role_permision;
use App\Models\address;
use App\Models\role_user;
class User extends Authenticatable
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'name',
        'family',
        'phoneNumber',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    public function roles(){
        return $this->belongsToMany(role::class,'role_users');
    }
    public function hasAccess($permission){
        foreach ($this->roles as $role) {
            if ($role->permisions()->whereIn('ea_title', (array) $permission)->exists()) {
                return true;
            }
        }
        return false;
    }

    public function carts(){
        return $this->hasMany(cart::class,'user_id');
    }
    public function orders(){
        return $this->hasMany(order::class,'user_id');
    }
    public function address(){
        return $this->hasMany(address::class);
    }
    
}
