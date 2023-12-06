<?php

namespace App\Http\Controllers;

use App\Models\Rent;
use Illuminate\Http\Request;

class RentController extends Controller
{
    //And now we can get the tenant easily:
    public function getTenantOwingThisRent(){
        $tenant = Rent::find(3)->tenant;
    }
}
