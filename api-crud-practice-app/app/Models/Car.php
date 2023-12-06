<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Car extends Model
{
    use HasFactory;
    protected $fillable = ['brand', 'color', 'price'];

    /*
     * Get the user that owns this car
     */

    //ONE user To ONE car || ONE user  to MANY cars
    public function user(): BelongsTo
    {
        return $this->belongsTo(UserEntity::class);
    }



}
