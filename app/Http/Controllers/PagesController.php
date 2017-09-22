<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    //
    public function getCategory(){
    	$category = DB::table('category')->get();
    	//return view('getCategory')->with('category', $category);
    	return view('getCategory', ['category'=>$category]);
    }

    public function getDetailCategory(){
        if(isset($_GET["id"])){
            $id = $_GET["id"];
            $detail = DB::table('news')->where('idCategory', $id)->get();
            return view('getDetailCategory', ['detail'=>$detail]);
        }
        else echo 'không có id';
    }

    public function getDetailNews(){
        if(isset($_GET["id"])){
            $id = $_GET["id"];
            $detail = DB::table('news')->where('id', $id)->get();
            return view('getDetailNews', ['detail'=>$detail]);
        }
        else echo 'không có id';
    }
}
