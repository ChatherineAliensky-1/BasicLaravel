{{-- 
|--------------------------------------------------------------------------
| LAYOUT UTAMA APLIKASI
|--------------------------------------------------------------------------
| File layout ini digunakan sebagai template utama
| untuk seluruh halaman Laravel Blade.
|
| Fungsi layout:
| - Menyimpan struktur HTML utama
| - Menampilkan navbar
| - Memanggil Bootstrap
| - Menampilkan isi halaman menggunakan $slot
|--------------------------------------------------------------------------
--}}

<!DOCTYPE html>
<html lang="en">

<head>

    {{-- 
    |--------------------------------------------------------------------------
    | META TAG
    |--------------------------------------------------------------------------
    | charset      : format karakter UTF-8
    | viewport     : agar responsive di mobile
    |--------------------------------------------------------------------------
    --}}
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    {{-- 
    |--------------------------------------------------------------------------
    | TITLE DINAMIS
    |--------------------------------------------------------------------------
    | Jika variabel $title ada → tampilkan title tersebut
    | Jika tidak ada → gunakan default "IF21"
    |--------------------------------------------------------------------------
    --}}
    <title>

        {{ $title ?? 'IF21' }}

    </title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">


    @vite([])

</head>

<body>

    {{-- 
    |--------------------------------------------------------------------------
    | NAVBAR / NAVIGATION
    |--------------------------------------------------------------------------
    | Menu navigasi utama website
    |--------------------------------------------------------------------------
    --}}
    <nav class="navbar navbar-expand-lg bg-dark navbar-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">IF21</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/fakultas">Fakultas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/prodi/create">Tambah Prodi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/fakultas/create">Tambah Fakultas</a>
                    </li>
                    {{-- 23 May 2026  --}}
                    <form action="/logout" method="POST">
                    <button type="submit" class="btn btn-danger">Logout</button>
                    </form>
                    {{-- End 23 May 262 --}}

                </ul>
            </div>
        </div>
    </nav>



    <main class="container py-4">

        @if (session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">

                {{-- Menampilkan isi pesan success dari controller --}}
                {{ session('success') }}

                {{-- Tombol close alert --}}
                <button type="button" class="btn-close" data-bs-dismiss="alert">
                </button>

            </div>
        @endif

        {{ $slot }}

    </main>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous">
    </script>

</body>

</html>
