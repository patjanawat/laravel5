<?php

namespace App\Http\Controllers;

use App\Customer as cust;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function customers(){

        //return 'Connected';

        $customers = \DB::table('customers')->get();
        return $customers;
    }
}
