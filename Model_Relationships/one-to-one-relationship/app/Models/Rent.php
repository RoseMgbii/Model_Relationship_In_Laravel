<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rent extends Model
{
    use HasFactory;
    protected $fillable = ['amount'];

    public function tenant(){
        $this->belongsTo(Tenant::class);
    }
}
