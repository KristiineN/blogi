<?php

namespace App\Http\Controllers;

use App\Post;
use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $users = User::paginate();

        return view('admin.users.index', compact('users'));
    }

    public function create()
    {
        return view('admin.users.create');
    }

    public function store(Request $request)
    {
        $user = new User();
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->password = $request->input('password');

        $user->save();
        return redirect('/admin/users');
    }

    public function show(User $user)
    {
        return view('admin.users.show', compact('user'));
    }

    public function edit(User $user)
    {
        return view('admin.users.edit', compact('user'));
    }

    public function update(Request $request, User $user)
    {
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        if($request-input('password') !=''){
            $user->password = bcrypt($request->input('password'));
        }
        $user->save();
        return redirect('/admin/users');
    }

    public function destroy(User $user)
    {
        $user->delete();
        return redirect('/admin/users');
    }
}


