<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class HelloController extends Controller
{
    public function top(){
        return  view('Goal_view.top');
    }
    public function view(){
        $data=[
         'msg'=>'こんにちは、世界!'
        ];
        return view('Goal_view.view',$data);
    }
    
    public function list(){
        $data=['records'=>Book::all()
    ];
    return view('Goal_view.list',$data);
    }

    public function register(){
        return view ('Goal_view.register');
    }
  



 



}
