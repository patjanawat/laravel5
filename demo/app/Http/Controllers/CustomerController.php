<?php

namespace App\Http\Controllers;

use App\Customer as cust;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index()
    {
        return view('customer');
    }
    
    public function customers()
    {

        //return 'Connected';

        $customers = \DB::table('customers')->get();
        return $customers;
    }

    public function all()
    {
        $all=  cust::all();
        return $all;

        $total= $all->count();
        $datas = $all;

        return response()->json([
            'total'  => $total,
            "customers"=>$datas
        ]);
    }

    public function getById($id)
    {
         return  $id;
        
        // configure hidden field in model
        return cust::where('id', $id)->get();
    }

    public function getByName($id, $name)
    {
        return cust::where('name', '=', $name)->get();
    }

    public function getCustomers()
    {
        return 'x';
        $results = cust::all();
        return $results->count();
        
        return response()->json([
            'total'  => $results->count(),
            "customers"=>$results->get()
        ]);
    }
}
