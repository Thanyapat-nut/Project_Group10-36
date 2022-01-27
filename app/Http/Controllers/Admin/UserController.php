<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        $users = User::all();
        return view('admin.user.index',compact('users'));
    }
    public function edit($id){
        $edituser = User::find($id);
        return view('admin.user.edit',compact('edituser'));
    }

    public function delete($id){
        $delete = User::find($id);
        {
            $delete->delete();
            return redirect()->route('user');
        }
    }
}
