<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ManagementUserController extends Controller
{
    //
    public function index()
    {
        $users = User::all();

        return view('pages.userManagement.dataUsers', compact('users'));
    }
    public function create()
    {
        return view('pages.userManagement.addUser');
    }
    public function store(Request $request)
    {
        // dump($request);

        // /users/post?_token=YIjrROJlvSshgadSL0ukNV5uGifoCNLtuBJv6EMq&name=Taqim+LKM&
        // email=test%40example.com&password=12345678&password_confirmation=12345678"

        $request->validate([
            'name' => 'required|min:4|max:15',
            'email' => 'email',
            'password' => 'required|min:8|max:12|confirmed',
            'password_confirmation' => 'required|min:8|max:12',
        ]);

        // dump($validateData);

        // echo $request->name . '<br>';
        // echo $request->email . '<br>';
        // echo $request->password . '<br>';
        // echo $request->password_confirmation . '<br>';
        $request->session()->flash('pesan', "Penambahan data {$request->name} berhasil");
        User::create([
            'name' => $request->name,
            'email' =>  $request->email,
            // 'password' => $request->password,
            'password' => Hash::make($request->password),
        ]);
        return redirect()->route('userManagment');
    }
    public function edit(User $user)
    {
        // dump($user);
        return view('pages.userManagement.editUser', compact('user'));
    }
    public function update(Request $request, User $user)
    {
        $request->validate([
            'name' => 'required|min:4|max:15',
            'email' => 'email',
            'password' => 'required|min:8|max:12|confirmed',
            'password_confirmation' => 'required|min:8|max:12',
        ]);
        User::where('id', $user->id)->update([
            'name' => $request->name,
            'email' =>  $request->email,
            'password' => Hash::make($request->password),
        ]);
        return redirect()->route('userManagment')->with('pesan', "Update data {$request->name} berhasil");
    }
    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->route('userManagment')
            ->with('pesan', "Hapus data $user->nama berhasil");
    }
}
