<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function index(){
        return "FROM CONTROLLER HELLO";
    }
    public function users(){
        $data = DB::select('SELECT * FROM students');
        // $data = DB::table('migrations')->count();
        // dd($data);
        return view('users_list',['data'=>$data]);
    }

    public function addUser(){
        return view('addUser');
    }

    public function store(Request $request){
        $data = $request->input();
        $insertdata['name'] = $data['name'];
        $insertdata['dob'] = $data['dob'];
        $result = DB::table('students')->insert($insertdata);
        return redirect('users');
    }

    public function deleteUser($id){
        $data = DB::select('DELETE FROM students WHERE id='.$id);
        return redirect('users');
    }
}
