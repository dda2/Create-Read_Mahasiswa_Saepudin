<?php

namespace App\Http\Controllers;

use Auth;
use Storage;
use Illuminate\Http\Request;
use App\Models\User;

class ProfilController extends Controller
{
    public function getProfil()
    {
        $photo = Auth::user()->getPhoto();

        return view('profil.profile',['pp' => $photo]);
    }

    public function postAddImage(Request $request)
    {
        $file = $request->file('image');

        $id = Auth::user()->getId();

        $profil = User::findOrFail($id);



        $filename = md5(rand(0,10000000)) .'.'. $request->file('image')->getClientOriginalExtension();

        if ($request->hasFile('image')) {
            Storage::put(
            $filename,
            file_get_contents($request->file('image')->getRealPath())
            );
            $profil->photo = $filename;
            $profil->save();

            return redirect()->back()->with('info' , 'Sukses');
        }

        return redirect()->back()->with('info', 'isi filenya');
    }
}