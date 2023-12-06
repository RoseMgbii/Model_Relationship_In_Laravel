<?php

namespace App\Http\Controllers;

use App\Models\Rent;
use Illuminate\Http\Request;

class RentController extends Controller
{
    //getting the tenant that owns a rent throught the rent model
    //without having to go to the tenant model
    //not entirely necessary when tenant established relationship using hasOne
    //unless you want to get the tenant that owns a rent
    //but since it is one-to-one, if you get the tenant,
    //you automatically get the rent
    //this would be useful in a situation where either party is many

    /*
    public function oneToOneRelationship(){
        $tenant = Rent::find(3)->tenant;
    }
    */
}
