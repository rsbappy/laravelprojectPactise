<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserInfoController extends Controller
{
    public  function __invoke() 
    { 
     return view('contact'
     ,['product_count' => '9', 'color' => 'yellow']
     );
     }
}
