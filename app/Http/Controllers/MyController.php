<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MyController extends Controller
{
    public function HelloWord() {
    	echo 'Hello Word';
    }

    public function getInfo($name){
        echo 'My name is '.$name;
    }

    public function getView(){
        return view('postForm');
    }

    public function getName(Request $req){
        echo 'Tên bạn là: '.$req->txtName;
    }

    public function getStudent(){
        $get = DB::table('student')->get();
        //$get = DB::table('student')->where('username', 'phamhuunhu21')->first();
        //$get = DB::table('student')->select('username', 'phone')->get();
        foreach ($get as $value) {
            echo $value->username;
        }
    }
}
