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
                        <h6 class="m-0 font-weight-bold text-primary">Edit data</h6>
                    </div>
                    <!-- Card Body -->
                        <div class="card-body">
                        <form action="{{ route('batik.update', $batik->slug) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                                <div class="mb-3">
                                    <label for="nama_pemilik" class="form-label">Nama Pemilik</label>
                                    <input type="text" class="form-control @error('nama_pemilik') is-invalid @enderror" name="nama_pemilik" id="nama_pemilik" value="{{ $batik->nama_pemilik }}" required>
                                        @error('nama_pemilik')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="nama_produk" class="form-label">Nama Usaha</label>
                                    <input type="text" class="form-control" name="nama_usaha" id="nama_usaha" value="{{ $batik->nama_usaha }}" required>
                                        @error('nama_produk')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="nib" class="form-label">NIB</label>
                                    <input type="text" class="form-control" name="nib" id="nib" value="{{ $batik->nib }}" required>
                                        @error('nib')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="alamat_usaha" class="form-label">Alamat Usaha</label>
                                    <div class="form-floating">
                                        <textarea class="form-control" name="alamat_usaha" id="alamat_usaha" style="height: 100px">{{ $batik->alamat_usaha }}</textarea>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="nama_produk" class="form-label">Nama Produk</label>
                                    <input type="text" class="form-control" name="produk" id="produk" value="{{ $batik->produk }}" required>
                                </div>
                                <div class="mb-3">
                                    <label for="kapasitas_produksi" class="form-label">Kapasitas Produksi</label>
                                    <input type="text" class="form-control" name="kapasitas_produksi" id="kapasitas_produksi" value="{{ $batik->kapasitas_produksi }}" required>
                                </div>
                                <div class="mb-3">
                                    <label for="jumlah_karyawan" class="form-label">Jumlah Karyawan</label>
                                    <input type="number" class="form-control" name="jumlah_karyawan" id="jumlah_karyawan" value="{{ $batik->jumlah_karyawan }}" required>
                                </div>
                                <div class="mb-3">
                                    <label for="harga_produk" class="form-label">Harga Produk</label>
                                    <input type="number" class="form-control" name="harga" id="harga" value="{{ $batik->harga }}" required>
                                </div>
                                <div class="mb-3">
                                    <label for="gambar_produk" class="form-label">Gambar Produk</label>
                                    <input type="file" class="form-control @error('gambar_produk') is-invalid @enderror" name="gambar_produk" id="gambar_produk" onchange="previewImage()">
                                    @if ($batik->gambar_produk)
                                        <img class="img-preview img-fluid mt-3 col-sm-5 d-block" src="{{ Storage::url('public/produks/').$batik->gambar_produk }}">
                                    @else
                                        <img class="img-preview img-fluid mt-5 col-sm-5">
                                    @endif
                                        @error('gambar_produk')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="gambar_produk2" class="form-label">Gambar Produk 2</label>
                                    <input type="file" class="form-control @error('gambar_produk2') is-invalid @enderror" name="gambar_produk2" id="gambar_produk2" onchange="previewImage2()">
                                    @if ($batik->gambar_produk2)
                                        <img class="img-preview2 img-fluid mt-3 col-sm-5 d-block" src="{{ Storage::url('public/produks/').$batik->gambar_produk2 }}">
                                    @else
                                        <img class="img-preview2 img-fluid mt-5 col-sm-5">
                                    @endif
                                        @error('gambar_produk2')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="kontak" class="form-label">Kontak</label>
                                    <input type="text" class="form-control" name="kontak" id="kontak" value="{{ $batik->kontak }}" required>
                                </div>
                                <div class="mb-3">
                                    <label for="website" class="form-label">Website</label>
                                    <input type="text" class="form-control" name="website" id="website" value="{{ $batik->website }}" required>
                                </div>
                                <div class="mb-3">
                                    <label for="deskripsi_produk" class="form-label">Deskripsi Produk</label>
                                    <div class="form-floating">
                                        <textarea class="form-control" name="deskripsi_produk" id="deskripsi_produk" style="height: 100px">{{ $batik->deskripsi_produk }}</textarea>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary">Simpan</button>
                                <a class="btn btn-secondary" href="{{ route('batik.index') }}">Kembali</a>
                            </form>
                        </div>
                </div>
            </div>
        </div>
    </div>
@endsection
