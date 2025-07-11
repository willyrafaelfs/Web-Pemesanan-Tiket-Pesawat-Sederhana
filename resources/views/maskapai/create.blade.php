@extends('layouts.admin_app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12 mb-4">
            <h1 class="text-center mt-5">Tambah Maskapai</h1>
        </div>
     </div>

    <form method="POST" action="{{ route('penerbangan.store') }}" enctype="multipart/form-data">
        @csrf
        <div class="my-3 p-3 bg-body rounded shadow-sm">
            <div class="mb-3 row">
                <label for="gambar" class="form-label">Gambar:</label>
                <div>
                <input type="file" class="form-control" name="gambar" id="gambar" accept="image/*" required>
                </div>
            </div>

            <div class="mb-3 row">
                <label for="nama_maskapai" class="form-label">Nama Maskapai:</label>
                <div>
                    <input type="text" class="form-control" name="nama_maskapai" id="" placeholder="Masukkan nama maskapai" required>
                </div>
            </div>

            <div class="mb-3 row">
                <label for="nomor_maskapai" class="form-label">Nomor Maskapai:</label>
                <div>
                    <input type="number" class="form-control" name="nomor_maskapai" id="" placeholder="Masukkan nomor maskapai" required>
                </div>
            </div>

            <div class="mb-3 row">
                <label for="asal" class="form-label">Asal:</label>
                <div>
                    <input type="text" class="form-control" name="asal" id="" placeholder="Masukkan Asal penerbangan" required>
                </div>
            </div>

            <div class="mb-3 row">
                <label for="tujuan" class="form-label">Tujuan:</label>
                <div>
                    <input type="text" class="form-control" name="tujuan" id="" placeholder="Masukkan Tujuan Keberangkatan" required>
                </div>
            </div>

            <div class="mb-3 row">
                <label for="waktu_keberangkatan" class="form-label">Waktu Keberangkatan:</label>
                <div>
                    <input type="date" class="form-control" name="waktu_keberangkatan" id="" placeholder="Masukkan Waktu Keberangkatan" required>
                </div>
            </div>

            <div class="mb-3">
                <label for="waktu_kedatangan" class="form-label">Waktu Kedatangan: </label>
                <div>
                    <input type="date" class="form-control" name="waktu_kedatangan" id="" placeholder="Masukkan Waktu Kedatangan" required>
                </div>
            </div>

            <div class="mb-3">
                <label for="harga" class="form-label">Harga:</label>
                <div>
                    <input type="number" class="form-control" name="harga" id="" placeholder="Masukkan Harga" required>
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-md-6 offset-md-3">
                    <button type="submit" class="btn btn-primary w-100 w-md-auto" style="border-radius: 50px; height:60px; width: 100px;">
                        {{ __('Simpan') }}
                    </button>
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-md-6 offset-md-3">
                    <button type="button" class="btn btn-secondary w-100 w-md-auto" style="border-radius: 50px; height:60px; width: 100px; line-height: 45px;">
                        <a href="{{ url('home_admin') }}" class="text-white text-decoration-none">Kembali</a>
                    </button>
                </div>
            </div>
        </div>
    </form>

</div>
@endsection
