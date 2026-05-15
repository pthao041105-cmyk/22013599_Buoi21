<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Place;

class AdminController extends Controller
{
    private function checkAdmin()
    {
        if (!session('isLogin') || session('role') != 'admin') {
            return redirect('/login')->with('error', 'Bạn không có quyền truy cập trang quản trị');
        }

        return null;
    }

    public function dashboard()
    {
        $check = $this->checkAdmin();
        if ($check) return $check;

        $totalUsers = User::count();
        $totalPlaces = Place::count();

        return view('admin.dashboard', compact('totalUsers', 'totalPlaces'));
    }

    public function users()
    {
        $check = $this->checkAdmin();
        if ($check) return $check;

        $users = User::latest()->get();

        return view('admin.users.index', compact('users'));
    }
}