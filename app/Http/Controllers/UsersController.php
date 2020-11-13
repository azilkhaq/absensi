<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Carbon\Carbon;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = User::all();
        return view('users', compact('user'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'role' => $request->role,
            'phone' => $request->phone,
            'address' => $request->address,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        $user->save();
        
        return redirect('/users');
    }
    
    public function destroy(users $users)
    {
        //
    }
}
