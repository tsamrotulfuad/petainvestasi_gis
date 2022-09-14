@extends('admin.app')
@section('title', 'Batik')
@section('content')
<div class="container-fluid">
        <div class="row">
            <!-- Area Chart -->
            <div class="col-xl-12 col-lg-7">
                <div class="card shadow mb-4">
                    <!-- Card Header - Dropdown -->
                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                        <h6 class="m-0 font-weight-bold text-primary">Tampil data</h6>
                    </div>
                    <!-- Card Body -->
                        <div class="card-body">
                                <div class="mb-3">
                                    <label for="kode_produk" class="form-label">Nama Pemilik</label>
                                    <input type="text" class="form-control" id="nama_pemilik" value="{{ $batik->nama_pemilik }}">
                                </div>
                                <div class="mb-3">
                                    <label for="nama_produk" class="form-label">Nama Usaha</label>
                                    <input type="text" class="form-control" name="nama_usaha" id="nama_usaha" value="{{ $batik->nama_usaha }}">
                                </div>
                                <div class="mb-3">
                                    <label for="harga_produk" class="form-label">NIB</label>
                                    <input type="text" class="form-control" name="nib" id="nib" value="{{ $batik->nib }}">
                                </div>
                                <div class="mb-3">
                                    <label for="deskripsi_produk" class="form-label">Alamat Usaha</label>
                                    <div class="form-floating">
                                        <textarea class="form-control" name="alamat_usaha" id="alamat_usaha" style="height: 100px">{{ $batik->alamat_usaha }}</textarea>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="harga_produk" class="form-label">Nama Produk</label>
                                    <input type="text" class="form-control" name="produk" id="produk" value="{{ $batik->produk }}">
                                </div>
                                <div class="mb-3">
                                    <label for="harga_produk" class="form-label">Kapasitas Produksi</label>
                                    <input type="text" class="form-control" name="kapasitas_produksi" id="kapasitas_produksi" value="{{ $batik->kapasitas_produksi }}">
                                </div>
                                <div class="mb-3">
                                    <label for="harga_produk" class="form-label">Jumlah Karyawan</label>
                                    <input type="number" class="form-control" name="jumlah_karyawan" id="jumlah_karyawan" value="{{ $batik->jumlah_karyawan }}">
                                </div>
                                <div class="mb-3">
                                    <label for="harga_produk" class="form-label">Harga Produk</label>
                                    <input type="number" class="form-control" name="harga" id="harga" value="{{ $batik->harga }}">
                                </div>
                                <div class="mb-3">
                                    <label for="gambar_produk" class="form-label">Gambar Produk</label>
                                    <img class="img-preview img-fluid mt-3 col-sm-5 d-block" src="{{ Storage::url('public/produks/').$batik->gambar_produk }}">
                                </div>
                                <div class="mb-3">
                                    <label for="kontak" class="form-label">Kontak</label>
                                    <input type="text" class="form-control" name="kontak" id="kontak" value="{{ $batik->kontak }}">
                                </div>
                                <div class="mb-3">
                                    <label for="website" class="form-label">Website</label>
                                    <input type="text" class="form-control" name="website" id="website" value="{{ $batik->website }}">
                                </div>
                                <a class="btn btn-primary" href="{{ route('batik.index') }}">Kembali</a>
                        </div>
                </div>
            </div>
        </div>
    </div>
@endsection