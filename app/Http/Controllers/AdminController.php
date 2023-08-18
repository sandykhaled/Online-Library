<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
class AdminController extends Controller
{
    public function index(){
         $admins=Admin::all();
        return view('admins.admin',['admins'=>$admins]);
        
    }
    public function show($id){
         $admin=Admin::find($id);
         return view('admins.show',['admin'=>$admin]);
    }
    public function create(){
        return view('admins.create');
    }
    public function store(Request $request){
        $admin=$request->all();
        Admin::create($admin);
        return redirect('admins');
    }
    public function edit($id){
        $admin=Admin::find($id);
        return view('admins.edit',['admin'=>$admin]);
    }
    public function update(Request $request,$id){
        $admin=Admin::find($id);
        $admin->name=$request['name'];
        $admin->email=$request['email'];
        $admin->password=$request['password'];
        $admin->save();
        return redirect('admins');
    }
    public function destroy($id){
        Admin::destroy($id);
        return redirect('admins');
    }
}
