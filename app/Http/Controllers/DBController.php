<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DBController extends Controller
{
    //

    public function index()
    {
      $customers = projec::table('customers')->get();
       return view('menu.work', ['customers' => $customers]);
    }
}
