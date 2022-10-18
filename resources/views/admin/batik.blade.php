@extends('admin.app')

@section('title', 'Batik')

@section('content')
    <div class="container-fluid">

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3 d-sm-flex align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">List Data Batik</h6>
                <a href="{{ route('batik.create') }}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
                    <i class="fas fa-plus fa-sm text-white-50"></i> Tambah data
                </a>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Pemilik</th>
                                <th>Nama Usaha</th>
                                <th>NIB</th>
                                <th>Produk</th>
                                <th>Alamat Usaha</th>
                                <th>Harga</th>
                                <th>Gambar</th>
                                <th>Opsi</th>
                            </tr>
                        </thead>
                        <!-- <tfoot>
                            <tr>
                                <th>No</th>
                                <th>Kode Produk</th>
                                <th>Nama Produk</th>
                                <th>Harga Produk</th>
                                <th>Deskrpsi Produk</th>
                                <th>Gambar</th>
                                <th>Opsi</th>
                            </tr>
                        </tfoot> -->
                        <tbody>
                            @forelse ($batiks as $batik)
                            <tr>
                                <td>{{ ++$i }}</td>
                                <td>{{ $batik->nama_pemilik }}</td>
                                <td>{{ $batik->nama_usaha }}</td>
                                <td>{{ $batik->nib }}</td>
                                <td>{{ $batik->produk }}</td>
                                <td>{{ $batik->alamat_usaha }}</td>
                                <td>{{ $batik->harga }}</td>
                                <td><img src="{{ Storage::url('public/produks/').$batik->gambar_produk }}" class="rounded" style="width: 150px; height: 150px; display: table-cell;"></td>
                                <td>
                                <form action="{{ route('batik.destroy',$batik->slug) }}" method="POST">

                                    <a class="btn btn-info btn-sm" href="{{ route('batik.show', $batik->slug) }}">Show</a>

                                    <a class="btn btn-primary btn-sm" href="{{ route('batik.edit', $batik->slug) }}">Edit</a>

                                    @csrf
                                    @method('DELETE')

                                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Delete</button>
                                </form>
                                </td>
                            </tr>
                            @empty
                                <div class="alert alert-danger">
                                    Data belum Tersedia.
                                </div>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

@endsection
