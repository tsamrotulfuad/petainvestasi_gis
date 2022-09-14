<?php

namespace App\Http\Controllers;

use App\Models\Batik;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class BatikController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $batiks = Batik::latest()->paginate(5);
        return view('admin.batik', compact('batiks'))
        ->with('i', (request()->input('page', 1) -1) * 5);;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.batikAdd');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Upload Gambar
        $gambar = $request->file('gambar_produk');
        $gambar->storeAs('public/produks/', $gambar->hashName());

        $batik = Batik::create([
            'nama_pemilik'       => $request->nama_pemilik,
            'nama_usaha'         => $request->nama_usaha,
            'slug'               => Str::slug($request->nama_usaha),
            'nib'                => $request->nib,
            'alamat_usaha'       => $request->alamat_usaha,
            'produk'             => $request->produk,
            'kapasitas_produksi' => $request->kapasitas_produksi,
            'jumlah_karyawan'    => $request->jumlah_karyawan,
            'harga'              => $request->harga,
            'gambar_produk'      => $gambar->hashName(),
            'kontak'             => $request->kontak,
            'website'            => $request->website,
        ]);

        if($batik){
            //redirect dengan pesan sukses
            return redirect()->route('batik.index')->with(['success' => 'Data Berhasil Disimpan!']);
        }else{
            //redirect dengan pesan error
            return redirect()->route('batik.index')->with(['error' => 'Data Gagal Disimpan!']);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Batik  $batik
     * @return \Illuminate\Http\Response
     */
    public function show(Batik $batik)
    {
        return view('admin.batikShow', compact('batik'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Batik  $batik
     * @return \Illuminate\Http\Response
     */
    public function edit(Batik $batik)
    {
        return view('admin.batikEdit', compact('batik'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Batik  $batik
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Batik $batik)
    {
        $batik = Batik::findOrFail($batik->id);

        if($request->file('gambar_produk') == "") {
            $batik->update([
                'nama_pemilik'       => $request->nama_pemilik,
                'nama_usaha'         => $request->nama_usaha,
                'slug'               => Str::slug($request->nama_usaha),
                'nib'                => $request->nib,
                'alamat_usaha'       => $request->alamat_usaha,
                'produk'             => $request->produk,
                'kapasitas_produksi' => $request->kapasitas_produksi,
                'jumlah_karyawan'    => $request->jumlah_karyawan,
                'harga'              => $request->harga,
                'kontak'             => $request->kontak,
                'website'            => $request->website,
            ]);
        } else {
            //Hapus gambar lama
            Storage::disk('local')->delete('public/produks/'.$batik->gambar_produk);

            //upload gambar baru
            $gambar = $request->file('gambar_produk');
            $gambar->storeAs('public/produks', $gambar->hashName());

            $batik->update([
                'nama_pemilik'       => $request->nama_pemilik,
                'nama_usaha'         => $request->nama_usaha,
                'slug'               => Str::slug($request->nama_usaha),
                'nib'                => $request->nib,
                'alamat_usaha'       => $request->alamat_usaha,
                'produk'             => $request->produk,
                'kapasitas_produksi' => $request->kapasitas_produksi,
                'jumlah_karyawan'    => $request->jumlah_karyawan,
                'harga'              => $request->harga,
                'gambar_produk'      => $gambar->hashName(),
                'kontak'             => $request->kontak,
                'website'            => $request->website,
            ]);
        }
        if($batik){
            //redirect dengan pesan sukses
            return redirect()->route('batik.index')->with(['success' => 'Data Berhasil Disimpan!']);
        }else{
            //redirect dengan pesan error
            return redirect()->route('batik.index')->with(['error' => 'Data Gagal Disimpan!']);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Batik  $batik
     * @return \Illuminate\Http\Response
     */
    public function destroy(Batik $batik)
    {
        $del_batik = Batik::findOrFail($batik->id);
        Storage::disk('local')->delete('public/produks/'.$batik->gambar_produk);
        $del_batik->delete();

        return redirect()->route('batik.index');
    }

}
