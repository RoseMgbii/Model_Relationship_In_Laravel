<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class UserEntity extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'email', 'password'];

    /*
     * ONE TO ONE
     * When each user entity models is associated to a separate car
     * have a distinct car method within the user
     * which will be called anytime the user is referring to their car
     *
     * so, we get the phone associated with this user
     */
    public function car(): HasOne
    { return $this->hasOne(Car::class); }

    //ONE TO MANY
    //One user owning many cars
    //the "many cars" will be stored as a collection for the user
    public function OneUserOwnManyCars(): HasMany
    { return $this->hasMany(Car::class); }
}
