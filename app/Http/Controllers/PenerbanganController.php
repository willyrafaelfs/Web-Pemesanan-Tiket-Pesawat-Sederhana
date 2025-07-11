<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\penerbangan;
use illuminate\Contracts\Session\Session;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session as FacadesSession;

class PenerbanganController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $penerbangan = Penerbangan::all();
        return view('home_admin', compact('penerbangan'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('maskapai.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'gambar' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'nama_maskapai' => 'required',
            'nomor_maskapai' => 'required',
            'asal' => 'required',
            'tujuan' => 'required',
            'waktu_keberangkatan' => 'required',
            'waktu_kedatangan' => 'required',
            'harga' => 'required|numeric'
        ]);

        if ($request->hasFile('gambar')) {
            $image = $request->file('gambar');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images'), $imageName);
            $validatedData['gambar'] = $imageName;
        }

        penerbangan::create($validatedData);

        return redirect()->route('penerbangan.index')
            ->with('success', 'Maskapai berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = Penerbangan::where('id_penerbangan', $id)->first();
        return view('maskapai.edit')->with('data', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'nama_maskapai' => 'required',
            'nomor_maskapai' => 'required',
            'asal' => 'required',
            'tujuan' => 'required',
            'waktu_keberangkatan' => 'required',
            'waktu_kedatangan' => 'required',
            'harga' => 'required|numeric'
        ]);

        $data = [
            'nama_maskapai' => $request -> nama_maskapai,
            'nomor_maskapai' => $request -> nomor_maskapai,
            'asal' => $request -> asal,
            'tujuan' => $request -> tujuan,
            'waktu_keberangkatan' => $request -> waktu_keberangkatan,
            'waktu_kedatangan' => $request -> waktu_kedatangan,
            'harga' => $request -> harga
        ];
        Penerbangan::where('id_penerbangan', $id)->update($data);
        return redirect()->to('home_admin')->with('success','Berhasil Mengedit Data');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        \App\Models\penerbangan::where('id_penerbangan', $id)->delete();
        return redirect()->route('penerbangan.index')->with('success', 'Data berhasil dihapus!');
    }
}
