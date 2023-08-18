<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index(){
        $users=User::all();
        return view('users.user',['users'=>$users]);
        
    }
    public function show($id){
         $user=User::find($id);
         return view('users.show',['user'=>$user]);
    }
    public function create(){
        return view('users.create');
    }
    public function store(Request $request){
        $user=$request->all();
         User::create($user);
        return redirect('users');
    }
    public function edit($id){
        $user=User::find($id);
        return view('users.edit',['user'=>$user]);
    }
    public function update(Request $request,$id){
        $user=User::find($id);
        $user->name=$request['name'];
        $user->age=$request['age'];
        $user->phone=$request['phone'];
        $user->address=$request['address'];
        $user->email=$request['email'];
        $user->password=$request['password'];
        $user->save();
        return redirect('users');
    }
    public function destroy($id){
        User::destroy($id);
        return redirect('users');
    }
    public function search(){
        $search_text=$_GET['query'];
        $users=User::where('name','LIKE','%'.$search_text.'%')->get();
        return view('users/search',compact('users'));
    }
   
}
