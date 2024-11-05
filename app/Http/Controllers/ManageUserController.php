<?php

namespace App\Http\Controllers;

use App\Models\Karyawan;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class ManageUserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::with('karyawan')->get()->map(function ($user) {
            $user->karyawan->foto = asset('storage/' . $user->karyawan->foto);
            return $user;
        });
        return view('menus.manageUser.manageUserIndex', ['users' => $users]);
    }
}
