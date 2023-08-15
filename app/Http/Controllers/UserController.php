<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Unit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        return view('menu.user.index', [
            'users' => User::all(),
            'units' => Unit::all(),
        ]);
    }

    public function pindahkan(Request $request, User $user)
    {
        $validatedData = $request->validate([
            'unit_id' => 'max:255',
        ]);

        User::where('id', $user->id)->update($validatedData);
        return redirect('/users')->with('success', 'User berhasil dipindahkan!');
    }

    public function akses(Request $request, User $user)
    {
        $validatedData = $request->validate([
            'is_admin' => 'max:255',
        ]);

        User::where('id', $user->id)->update($validatedData);
        return redirect('/users')->with('success', 'User Akses berhasil diubah!');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'username' => 'required|unique:users',
            'email' => 'required|email|unique:users',
            'password' => 'required',
            'unit_id' => 'nullable'
        ]);

        $validatedData['password'] = Hash::make($request['password']);

        User::create($validatedData);

        return redirect('/users')->with('success', 'User created successfully.');
    }

    public function update(Request $request, User $user)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'username' => 'required|unique:users,username,' . $user->id,
            'email' => 'required|email|unique:users,email,' . $user->id,
        ]);

        User::where('id', $user->id)->update($validatedData);
        return redirect('/users')->with('success', 'User berhasil diperbarui!');
    }

    public function updatePassword(Request $request, User $user)
    {
        $validatedData = $request->validate([
            'current_password' => 'required',
            'password' => 'required|confirmed',
        ]);

        if (Hash::check($request->current_password, $user->password)) {
            $user->update(['password' => Hash::make($validatedData['password'])]);

            return redirect('users')->with('success', 'Password berhasil diperbarui.');
        } else {
            return redirect('users')->with('error', 'Password lama tidak cocok.');
        }
    }

    public function destroy(User $user)
    {
        User::destroy($user->id);
        return redirect('/users')->with('success', 'user berhasil dihapus!');
    }
}
