<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class Multicontroller extends Controller
{
    //
    public function test(){
        echo "just test";
        $data = DB::connection(mysql2)->select('SELECT COUNT(customerName) as total 
                                                 FROM customers;');

        return view('showdata', compact('data'));
    }
}


//$connection = DB::connection('mysql2'); // replace this to your required connection name

// use Illuminate\Support\Facades\DB;


//$users = DB::connection('mysql2')->select(...);