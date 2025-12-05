<?php

namespace App\Http\Controllers;

use App\Models\Penawaran;
use Illuminate\Http\Request;

class PenawaranController extends Controller
{
    public function index()
    {
        // Ambil semua data penawaran dari database
        $penawarans = Penawaran::orderBy('created_at', 'desc')->get();
        
        // Kirim data ke view
        return view('penawaran', compact('penawarans'));
    }

    public function create()
    {
        return view('penawaran.create');
    }

    public function store(Request $request)
    {
        // Validasi data
        $request->validate([
            'nomor' => 'required',
            'tanggal' => 'required|date',
            'pemberi' => 'required',
            'jenis_aset' => 'required',
        ]);

        // Simpan data ke database
        Penawaran::create($request->all());

        // Redirect dengan pesan success
        return redirect()->route('penawaran.index')->with('success', 'Surat berhasil ditambahkan');
    }

    public function edit($id)
    {
        $penawaran = Penawaran::findOrFail($id);
        return view('penawaran.edit', compact('penawaran'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nomor' => 'required',
            'tanggal' => 'required|date',
            'pemberi' => 'required',
            'jenis_aset' => 'required',
            'maksud' => 'nullable',
            'tujuan' => 'nullable',
            'nilai_kebutuhan' => 'nullable',
            'biaya' => 'nullable|numeric',
            'norek' => 'nullable',
        ]);

        $penawaran = Penawaran::findOrFail($id);
        $penawaran->update($request->all());

        return redirect()->route('penawaran.index')->with('success', 'Surat berhasil diupdate');
    }

    public function destroy($id)
    {
        $penawaran = Penawaran::findOrFail($id);
        $penawaran->delete();

        return redirect()->route('penawaran.index')->with('success', 'Surat berhasil dihapus');
    }
}