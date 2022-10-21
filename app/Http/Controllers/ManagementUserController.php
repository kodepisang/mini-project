<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class ManagementUserController extends Controller
{
    //
    public function index()
    {
        $users = User::all();
        return view('pages.userManagement.dataUsers', compact('users'));
    }
}
