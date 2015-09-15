<?php

namespace App\Http\Controllers;

use App\Models\Maha;
use Illuminate\Http\Request;

class MahaController extends Controller
{
    public function index()
    {
        $mahasiswa = Maha::all();

        return view('mahasiswa.index')->with('mahasiswa', $mahasiswa);
    }

    public function getAdd()
    {
        return view('mahasiswa.add');
    }

    public function postAdd(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|min:3',
            'address' => 'required|min:5',
            'department' => 'required',
            'phone_number' => 'required',
        ]);

        Maha::create([
            'name' => $request->input('name'),
            'address' => $request->input('address'),
            'department' => $request->input('department'),
            'phone_number' => $request->input('phone_number'),
            ]);

        return redirect()
            ->route('mahas')
            ->with('info', ' Mahasiswa Berhasil Ditambahkan');
    }
}