<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rent extends Model
{
    use HasFactory;

    // what do we do when we know the rent
    // and want to figure out to whom it belongs?
    // We can make use of the belongsTo property:

    public function tenant()
    {
        return $this->belongsTo(Tenant::class);
    }
}
