<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class ClientController extends Controller
{
    public function index()
    {
        $Clients = DB::table('clients')->get();
        return view('Customers.index')

        ->with('clients',$Clients);
    }
}
