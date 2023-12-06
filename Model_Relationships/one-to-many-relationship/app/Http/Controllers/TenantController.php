<?php

namespace App\Http\Controllers;

use App\Models\Tenant;
use Illuminate\Http\Request;

class TenantController extends Controller
{
    public function getAllRentOwedByTenant()
    {
        $rents = Tenant::find(3)->rent;
    }
}
