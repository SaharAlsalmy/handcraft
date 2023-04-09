<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller{
     public function __construct(){
        $this->middleware(['auth']);


        }
      function index()
      {
            // return View('dashboard',compact('user'));
            return response()->view(
                  'dashboard.index',['title' => "My Web Saite"]
            );

      }
}
