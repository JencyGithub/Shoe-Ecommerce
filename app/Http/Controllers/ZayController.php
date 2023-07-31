<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ZayController extends Controller
{
    public function index(){
        return view('index');
    }

    public function about(){
        return view('about');
    }

    public function shopitem(){
        return view('shopitem');
    }

    public function shop(){
        return view('shop');
    }

    public function contact(){
        return view('contact');
    }

    public function registration(){
        return view('registration');
    }

    public function login(){
        return view('login');
    }

    public function profile(){
        $id= session()->get('loginid');
        $data['alldata']=Product::find($id);
        return view('profile',$data);
    }

    public function update(){
        $id =session()->get('loginid');
        $data['all']=Product::find($id);
        return view('update',$data);
    }
}
