<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatasaveController extends Controller
{
    public function login(Request $req)
    {
        $req->validate([
            'Email' => 'required|regex:/(.+)@(.+)\.(.+)/i'
        ]);

        $login = DB::table('products')->where('Email', '=', $req->Email)->get()->first();
        if ($login) {
            if (Hash::check($req->password, $login->Password)) {
                $req->Session()->put('loginid', $login->id);
                return redirect(route('index'));
            } else {
                return back()->with('password', 'password not matched..!!');
            }
        } else {
            return back()->with('Email', 'Email not matched..!!');
        }
    }

    public function registration()
    {
        $data['alldata'] = Product::all();
        return view('registration', $data);
    }

    // Registration page DataSave

    public function RegDataSave(Request $req)
    {

        $req->validate([
            'email' => 'required|regex:/(.+)@(.+)\.(.+)/i|unique:products,email',
            'password' => 'required | min:6 | max:12',
            'Username' => 'required|regex:/(^[A-Za-z ]+$)+/',
            'contact' => 'required | regex:/^[0-9]{10}/|min:10|max:10',
        ]);

        $data = new Product();
        $data->UserName = $req->Username;
        $data->ContactNo = $req->contact;
        $data->Email = $req->email;
        $data->Password = Hash::make($req->password);
        $data->save();

        //Session created
        $login =  DB::table('products')->where('Email', '=', $req->email)->get()->first();
        $req->Session()->put('loginid', $login->id);
        return redirect('index');
    }

    // User logout

    public function Logout()
    {
        if (session()->has('loginid')) {
            session()->pull('loginid');
            return redirect('/');
        } else {
            return "you have to login first";
        }
    }

    // User Update
    public function UpdateSave(Request $req, $id)
    {
        $req->validate([
            'UpUser' => 'required|string|regex:/\w*$/|max:255',
            'UpContact' => 'required | min:10 | max:10',
        ]);

        $data = Product::find($id);
        $data->UserName = $req->UpUser;
        $data->ContactNo = $req->UpContact;
        $data->save();
        return redirect('profile');
    }

    public function delete($id)
    {
        $data = Product::find($id);
        $data->delete();
        session()->pull('loginid');

        return redirect('/');
    }
}
