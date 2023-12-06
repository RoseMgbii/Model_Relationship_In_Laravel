<?php

namespace App\Http\Controllers;

use App\Models\Tenant;
use Illuminate\Http\Request;

class TenantController extends Controller
{
    public function oneToOneRelationShipBetweenTenantAndRent()
    {
        //getting rent owned by the 3rd tenant through tenant model
        $rent = Tenant::find(3)->rent;
    }
}
