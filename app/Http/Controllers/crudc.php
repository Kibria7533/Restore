<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class crudc extends Controller
{
   public function index(){
   	return view('cd');
   }
   public function create(){
   	return view('form');
   }

   public function store(Request $request){
   	
   	DB::table('ms')->insert([
   		'email'=>$request->email,
   		'password'=>$request->password
   	]);
return redirect('/');

   }

   public function show(){
   	$data=DB::table('ms')->get();

   	return view('show',['ta'=>$data]);
   }
}
