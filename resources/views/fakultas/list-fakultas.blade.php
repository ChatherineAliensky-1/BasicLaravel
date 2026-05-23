

<x-layout title="List Fakultas">

    {{-- 
    |--------------------------------------------------------------------------
    | HEADER HALAMAN
    |--------------------------------------------------------------------------
    | Menampilkan judul halaman dan tombol tambah data
    |--------------------------------------------------------------------------
    --}}
    <div class="d-flex justify-content-between align-items-center mb-4">

        {{-- Judul Halaman --}}
        <h1 class="mb-0">
            List Fakultas
        </h1>

        {{-- Tombol menuju halaman tambah fakultas --}}
        <a href="/fakultas/create" class="btn btn-primary">
            + Add Fakultas
        </a>
    </div>


    {{-- 
    |--------------------------------------------------------------------------
    | TABEL DATA FAKULTAS
    |--------------------------------------------------------------------------
    | Menampilkan seluruh data fakultas dari database
    |--------------------------------------------------------------------------
    --}}
    <div class="table-responsive">

        <table class="table table-bordered table-striped align-middle">

            {{-- HEADER TABEL --}}
            <thead class="table-dark">

                <tr class="text-center">
                    <th width="5%">No</th>
                    <th>Nama Fakultas</th>
                    <th>Nama Dekan</th>
                    <th width="25%">Aksi</th>
                </tr>

            </thead>

            {{-- BODY TABEL --}}
            <tbody>

                {{-- 
                |--------------------------------------------------------------------------
                | LOOPING DATA
                |--------------------------------------------------------------------------
                | Mengambil seluruh data fakultas dari variabel:
                | $fakultas
                |--------------------------------------------------------------------------
                --}}
                @forelse ($fakultas as $item)

                    <tr>

                        {{-- Nomor urut otomatis --}}
                        <td class="text-center">
                            {{ $loop->iteration }}
                        </td>

                        {{-- Menampilkan nama fakultas --}}
                        <td>
                            {{ $item->name }}
                        </td>

                        {{-- Menampilkan nama dekan --}}
                        <td>
                            {{ $item->dekan }}
                        </td>

                        {{-- KOLOM AKSI --}}
                        <td class="text-center">

                            <div class="d-flex gap-2 justify-content-center">

                                {{-- 
                                |--------------------------------------------------------------------------
                                | BUTTON DETAIL
                                |--------------------------------------------------------------------------
                                | Mengarah ke halaman detail fakultas
                                |--------------------------------------------------------------------------
                                --}}
                                <a 
                                    href="/fakultas/{{ $item->id }}"
                                    class="btn btn-info btn-sm">

                                    Detail

                                </a>

                                {{-- 
                                |--------------------------------------------------------------------------
                                | BUTTON EDIT
                                |--------------------------------------------------------------------------
                                | Mengarah ke halaman edit data fakultas
                                |--------------------------------------------------------------------------
                                --}}
                                <a 
                                    href="/fakultas/{{ $item->id }}/edit"
                                    class="btn btn-warning btn-sm">

                                    Edit

                                </a>

                                {{-- 
                                |--------------------------------------------------------------------------
                                | FORM DELETE
                                |--------------------------------------------------------------------------
                                | Menghapus data fakultas berdasarkan id
                                |--------------------------------------------------------------------------
                                --}}
                                <form 
                                    action="/fakultas/{{ $item->id }}"
                                    method="POST"

                                    {{-- Konfirmasi sebelum hapus --}}
                                    onsubmit="return confirm('Yakin ingin menghapus data ini?')">

                                    {{-- Security Token Laravel --}}
                                    @csrf

                                    {{-- Method spoofing DELETE --}}
                                    @method('DELETE')

                                    {{-- Tombol hapus --}}
                                    <button 
                                        type="submit"
                                        class="btn btn-danger btn-sm">

                                        Hapus

                                    </button>

                                </form>

                            </div>

                        </td>

                    </tr>

                {{-- 
                |--------------------------------------------------------------------------
                | KONDISI JIKA DATA KOSONG
                |--------------------------------------------------------------------------
                | Akan tampil jika tidak ada data fakultas
                |--------------------------------------------------------------------------
                --}}
                @empty

                    <tr>

                        <td colspan="4" class="text-center text-muted">

                            Data fakultas belum tersedia.

                        </td>

                    </tr>

                @endforelse

            </tbody>

        </table>

    </div>

</x-layout>