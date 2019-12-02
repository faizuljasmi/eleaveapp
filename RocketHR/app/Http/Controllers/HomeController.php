<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Department;
use App\Role;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
      //Current user
      $user = auth()->user();
      $users = User::all();
      $department = $user->department;
      $role = $user->role;
      //dd($user->role->name);

        return view('home')->with(compact('user','users','department','role'));
    }
}
