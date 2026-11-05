<?php

namespace App\Http\Controllers;

use App\Models\websites;
use App\Models\templates;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
        $websites = websites::all(); 
        return view('dashboard', compact('websites'));
    }

    public function delete($id){
        websites::where('id_website', $id)->delete();
        return redirect('/');
    }
    public function tambah(){
        $templates = templates::all();
        return view('tambah', compact('templates'));

    }
    public function tambahh(Request $request, ){
        websites::create([
            'nama_website' => $request->nama_website,
            'id_template' => $request->template,
            'bio'=> $request->bio,
            'slug'=> $request->slug,
            'logo'=> $request->logo,
        ]);
        return redirect()->back();
    }
    public function template($id){
        $websites = websites::where('id_website', $id)->firstOrFail();  
        return view('templates.model', compact('websites'));
}
}
