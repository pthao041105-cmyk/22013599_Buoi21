<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Place;

class AdminPlaceController extends Controller
{
    private function checkAdmin()
    {
        if (!session('isLogin') || session('role') != 'admin') {
            return redirect('/login')->with('error', 'Bạn không có quyền truy cập trang quản trị');
        }

        return null;
    }

    public function index()
    {
        $check = $this->checkAdmin();
        if ($check) return $check;

        $places = Place::latest()->get();

        return view('admin.places.index', compact('places'));
    }

    public function create()
    {
        $check = $this->checkAdmin();
        if ($check) return $check;

        return view('admin.places.create');
    }

    public function store(Request $request)
    {
        $check = $this->checkAdmin();
        if ($check) return $check;

        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'address' => 'required'
        ]);

        Place::create([
            'name' => $request->name,
            'description' => $request->description,
            'address' => $request->address,
            'image' => $request->image,
            'status' => $request->status ?? 1
        ]);

        return redirect('/admin/places')->with('success', 'Thêm địa điểm thành công');
    }

    public function edit($id)
    {
        $check = $this->checkAdmin();
        if ($check) return $check;

        $place = Place::findOrFail($id);

        return view('admin.places.edit', compact('place'));
    }

    public function update(Request $request, $id)
    {
        $check = $this->checkAdmin();
        if ($check) return $check;

        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'address' => 'required'
        ]);

        $place = Place::findOrFail($id);

        $place->update([
            'name' => $request->name,
            'description' => $request->description,
            'address' => $request->address,
            'image' => $request->image,
            'status' => $request->status ?? 1
        ]);

        return redirect('/admin/places')->with('success', 'Cập nhật địa điểm thành công');
    }

    public function delete($id)
    {
        $check = $this->checkAdmin();
        if ($check) return $check;

        $place = Place::findOrFail($id);
        $place->delete();

        return redirect('/admin/places')->with('success', 'Xóa địa điểm thành công');
    }
}