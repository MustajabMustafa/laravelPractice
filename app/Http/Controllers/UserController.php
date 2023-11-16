<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function index(){
        return "FROM CONTROLLER HELLO";
    }
    public function zain(){
        $data = DB::select('SELECT * FROM students');
        //dd($data);
        return view('about_us',['data'=>$data]);
    }

    public function addUser(){
        return view('addUser');
    }

    public function deleteUser($id){
        $data = DB::select('DELETE FROM students WHERE id='.$id);
        return redirect('users');
    }
}
