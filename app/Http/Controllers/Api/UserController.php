<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = User::paginate(10);
        // $roles = Role::all();
        return view('admin.pages.users.index', compact('user'));
    }

    public function create()
    {
        $roles = Role::all();
        // dd($roles);
        return view('admin.pages.users.create', compact('roles'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());
        // dd($request->all());

        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users',
            'phone' => ['required','regex:/^(01)[0-9]{9}$/'],
            'password' => 'required|min:6|confirmed',
            'role_id' => 'required'
        ]);

        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->phone = $request->phone;
        // $user->password = bcrypt($request->password);
        $user->password = Hash::make($request->password);
        $user->role_id = $request->role_id;
        $user->save();

        return redirect()->route('users.index')->with('success', 'User created successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $user = User::find($id);
        return view('admin.pages.users.show', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // dd($request->all());

        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users',
            'phone' => ['required','regex:/^(01)[0-9]{9}$/'],
        ]);

        // dd($request->all());
        $user = User::find($id);
        $user->update([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'role_id' => $request->role_id
        ]);
        return redirect()->route('users.index', ['page' => $request->page])->with('success', 'User info updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        User::destroy($id);
        // dd('deleted');
        return redirect()->route('users.index')->with('success', 'User deleted successfully!');
    }

    public function edit($id)
    {
        $user = User::find($id);
        $roles = Role::all();
        // dd($user);
        $page = request('page', 1);
        // dd($page);
        return view('admin.pages.users.edit', compact('roles', 'user', 'page'));
    }
}
