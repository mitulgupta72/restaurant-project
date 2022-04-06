<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\restaurent;

class restoController extends Controller
{
    function index()
    {
        return view('home');
    }

    function list()
    {
        $data = restaurent::all();
        return view('list', ['data' => $data]);
    }

    function add(Request $req)
    {
        // return $req->input();
        $resto = new restaurent;
        $resto->id=$req->input('id');
        $resto->name=$req->input('name');
        $resto->email=$req->input('email');
        $resto->address=$req->input('address');
        $resto->save();
         $req->session()->flash('status','Restaurent entered sucessfully ');
        return redirect('list');
    }
}
