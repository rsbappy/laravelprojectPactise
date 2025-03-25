<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class FrontController extends Controller
{
    public function home()



    {

        $users= User::where('created_at', '<=', now())->get();




        return view('home',
        ['page_name' => 'rsbappy Page',
        'page_title' => 'Home Page',
        'users' =>  $users]);

    }

   public function about()
   {
    return view('about' ,['page_name' => 'about Page', 'page_title' => 'About Page']);
    }
   public function services()
   {
    $services  = [
        'Service 1',
        'Service 2',
        'Service 3',
        'Service 4',
        'Service 5',
        'Service 6',
        'Service 7',
        'Service 8',
        'Service 9',
        'Service 10',
    ];

    return view('services', compact('services'));
    }

    public  function userIndex()
    {

    }

}
