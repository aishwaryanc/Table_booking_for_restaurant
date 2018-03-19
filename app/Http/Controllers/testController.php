<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\book;
use Illuminate\Support\Facades\DB;


class testController extends Controller
{
    public function index(){
      return view("index");
    }

    public function store(Request $request){
      $user = new book;
      $user->name = Input::get("name");
      $user->people= Input::get("people");
      $user->message = Input::get("message");
      $user->date = Input::get("date");
      $user->number = Input::get("number");
      $user->email = Input::get("email");
      $user->time = Input::get("time");
      $user->save();
      return redirect("/show");
    }

    public function show(){
      $user = DB::table('books')->get();
      return view("show",['user' => $user]);
    }

    public function delete(Request $request){
      $id=$request->id;
      $user = DB::table('books')->where('id',$id)->delete();
      return redirect('/show');
    }

    public function edit($id){
      $user = book::find($id);
      return view("edit",compact('user'));
    }

    public function update(Request $request, $id){
      $user = book::find($id);
      $user->name = $request->Input('name');
      $user->email = $request->Input('email');
      $user->message = $request->Input('message');
      $user->people = $request->Input('people');
      $user->date = $request->Input('date');
      $user->number = $request->Input('number');
      $user->time = $request->Input('time');
      $user->update();
      return redirect("/show");
    }
}
