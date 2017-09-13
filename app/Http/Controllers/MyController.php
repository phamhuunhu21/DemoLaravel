<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyController extends Controller
{
    public function HelloWord() {
    	echo 'Hello Word';
    }

    public function getInfo($name){
        echo 'My name is '.$name;
    }

    public function getName(Request $req){
        echo 'Tên bạn là: '.$req->txtName;
    }
}
