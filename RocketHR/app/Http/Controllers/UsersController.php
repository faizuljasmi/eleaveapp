<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Department;

class UsersController extends Controller
{
  /**
   * Create a new user instance after a valid registration.
   *
   * @param  array  $data
   * @return \App\User
   */
  protected function create()
  {
      $user = auth()->user();
      $departments = Department::all();
      $department = $user->department;
      $role = $user->role;
      return view('employees.create')->with(compact('user','departments','department','role'));
}

public function store()
    {
        $this->validate(request(), [
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|confirmed'
        ]);

        $user = User::create(request(['name', 'email', 'password']));
        return redirect()->to('/home');
    }
  }
