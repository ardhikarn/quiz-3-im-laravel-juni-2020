<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ArtikelModel;

class ArtikelController extends Controller
{
    public function erd() {
        return view('layouts.crud.erd');
    }

    public function artikels() {
        $artikel = ArtikelModel::get_all();
        return view('layouts.crud.artikel', compact('artikel'));
    }

    public function create() {
        return view('layouts.crud.create');
    }

    public function store(Request $request) {
        $data = $request->all();
        unset($data["_token"]);
        // dd($data);
        ArtikelModel::save($data);
        return redirect('/artikel')->with('status', 'Artikel Berhasil Ditambahkan');
    }

    public function detail($id) {
        $output = ArtikelModel::find_by_id($id);
        // dd($jawaban);
        return view('layouts.crud.detail', compact('output'));
    }

    public function edit($id) {
        $output = ArtikelModel::find_by_id($id);
        return view('layouts.crud.edit', compact('output', 'id'));
    }

    public function update(Request $request) {
        $data = $request->all();
        unset($data["_token"]);
        unset($data["_method"]);
        // dd($data);
        ArtikelModel::update($data);
        return redirect('/artikel');
    }

    public function destroy($id) {
        ArtikelModel::destroy($id);
        return redirect('/artikel');
    }
}
