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
                        <h6 class="m-0 font-weight-bold text-primary">Tambah data</h6>
                    </div>
                    <!-- Card Body -->
                        <div class="card-body">
                            <form action="{{ route('batik.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col">
                                        <div class="mb-3">
                                            <label for="kode_produk" class="form-label">Nama Pemilik</label>
                                            <input type="text" class="form-control" name="nama_pemilik" id="nama_pemilik" placeholder="Masukkan Nama Pemilik">
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="mb-3">
                                            <label for="nama_produk" class="form-label">Nama Usaha</label>
                                            <input type="text" class="form-control" name="nama_usaha" id="nama_usaha" placeholder="Masukkan Nama Usaha">
                                         </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div class="mb-3">
                                            <label for="harga_produk" class="form-label">NIB</label>
                                            <input type="text" class="form-control" name="nib" id="nib" placeholder="Masukkan NIB">
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="mb-3">
                                            <label for="deskripsi_produk" class="form-label">Alamat Usaha</label>
                                            <div class="form-floating">
                                            <textarea class="form-control" name="alamat_usaha" placeholder="Alamat Usaha" id="alamat_usaha" style="height: 100px"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div class="mb-3">
                                            <label for="harga_produk" class="form-label">Nama Produk</label>
                                            <input type="text" class="form-control" name="produk" id="produk" placeholder="Masukkan Nama Produk">
                                            </div>
                                        </div>
                                    <div class="col">
                                        <div class="mb-3">
                                            <label for="harga_produk" class="form-label">Kapasitas Produksi</label>
                                            <input type="text" class="form-control" name="kapasitas_produksi" id="kapasitas_produksi" placeholder="Masukkan Kapasitas Produksi">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div class="mb-3">
                                            <label for="harga_produk" class="form-label">Jumlah Karyawan</label>
                                            <input type="number" class="form-control" name="jumlah_karyawan" id="jumlah_karyawan" placeholder="Masukkan Jumlah Karyawan">
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="mb-3">
                                            <label for="harga_produk" class="form-label">Harga Produk</label>
                                            <input type="number" class="form-control" name="harga" id="harga" placeholder="Masukkan Harga Produk">
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="gambar_produk" class="form-label">Gambar Produk</label>
                                    <input type="file" class="form-control" name="gambar_produk" id="gambar_produk" placeholder="Masukkan Gambar Produk" onchange="previewImage()">
                                    <img class="img-preview img-fluid mt-3 col-sm-5">
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div class="mb-3">
                                            <label for="kontak" class="form-label">Kontak</label>
                                            <input type="text" class="form-control" name="kontak" id="kontak" placeholder="Masukkan Kontak">
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="mb-3">
                                        <label for="website" class="form-label">Website</label>
                                        <input type="text" class="form-control" name="website" id="website" placeholder="Masukkan Website">
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary">Simpan</button>
                            </form>
                        </div>
                </div>
            </div>
        </div>
    </div>
@endsection

 
