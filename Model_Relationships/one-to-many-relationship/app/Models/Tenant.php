<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tenant extends Model
{
    use HasFactory;
    //this will define relationships between a single-parent model
    // and multiple children models
    //
    // Tenants can have more than one rent.
    //but in this case rent can belong to only one tenant
    public function rent()
    {
        return $this->hasMany(Rent::class);
    }
}
