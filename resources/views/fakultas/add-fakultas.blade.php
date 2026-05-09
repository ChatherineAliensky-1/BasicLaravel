{{-- 
|--------------------------------------------------------------------------
| HALAMAN TAMBAH FAKULTAS
|--------------------------------------------------------------------------
| File ini digunakan untuk:
| - menampilkan form tambah data fakultas
| - mengirim data ke database
|--------------------------------------------------------------------------
--}}

<x-layout title="Add Fakultas">

    <div class="container">

        {{-- 
        |--------------------------------------------------------------------------
        | JUDUL HALAMAN
        |--------------------------------------------------------------------------
        --}}
        <h1 class="mb-4">
            Add Fakultas
        </h1>

        {{-- 
        |--------------------------------------------------------------------------
        | VALIDASI ERROR
        |--------------------------------------------------------------------------
        | Menampilkan pesan error jika:
        | - input kosong
        | - format salah
        | - validasi gagal
        |--------------------------------------------------------------------------
        --}}
        @if ($errors->any())

            <div class="alert alert-danger">

                {{-- Judul pesan error --}}
                <strong>
                    Terjadi kesalahan:
                </strong>

                {{-- List semua error --}}
                <ul class="mb-0 mt-2">

                    @foreach ($errors->all() as $error)

                        <li>
                            {{ $error }}
                        </li>

                    @endforeach

                </ul>

            </div>

        @endif

        {{-- 
        |--------------------------------------------------------------------------
        | FORM TAMBAH DATA
        |--------------------------------------------------------------------------
        | Form digunakan untuk mengirim data ke route:
        | POST /fakultas
        |--------------------------------------------------------------------------
        --}}
        <form action="/fakultas" method="POST">

            {{-- 
            |--------------------------------------------------------------------------
            | CSRF TOKEN
            |--------------------------------------------------------------------------
            | Digunakan Laravel untuk keamanan form
            |--------------------------------------------------------------------------
            --}}
            @csrf

            {{-- 
            |--------------------------------------------------------------------------
            | INPUT NAMA FAKULTAS
            |--------------------------------------------------------------------------
            | name="name_fakultas"
            | Digunakan untuk mengirim nama fakultas ke controller
            |--------------------------------------------------------------------------
            --}}
            <div class="mb-3">

                <label class="form-label">
                    Nama Fakultas
                </label>

                <input
                    type="text"
                    name="name_fakultas"
                    class="form-control"

                    {{-- 
                    old() digunakan agar input tidak hilang
                    ketika validasi gagal
                    --}}
                    value="{{ old('name_fakultas') }}"

                    placeholder="Masukkan nama fakultas"
                >

            </div>

            {{-- 
            |--------------------------------------------------------------------------
            | INPUT NAMA DEKAN
            |--------------------------------------------------------------------------
            | name="name_dekan"
            | Digunakan untuk mengirim nama dekan ke controller
            |--------------------------------------------------------------------------
            --}}
            <div class="mb-3">

                <label class="form-label">
                    Nama Dekan
                </label>

                <input
                    type="text"
                    name="name_dekan"
                    class="form-control"

                    {{-- 
                    old() digunakan agar data tetap tampil
                    setelah validasi gagal
                    --}}
                    value="{{ old('name_dekan') }}"

                    placeholder="Masukkan nama dekan"
                >

            </div>

            {{-- 
            |--------------------------------------------------------------------------
            | TOMBOL SIMPAN
            |--------------------------------------------------------------------------
            | Digunakan untuk submit form
            |--------------------------------------------------------------------------
            --}}
            <button type="submit" class="btn btn-primary">

                Simpan

            </button>

            {{-- Tombol kembali --}}
            <a href="/fakultas" class="btn btn-secondary">

                Kembali

            </a>

        </form>

    </div>

</x-layout>