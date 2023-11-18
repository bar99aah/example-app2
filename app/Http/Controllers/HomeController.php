<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    

        public function test($id=1){
            return 'hi';
        }
        public function index(){
            return 'homeController';
        }
        // return view('home')->with('name', $name)->with('age', $age);

        // return view('home', compact('name', 'age'));

        
    

}
