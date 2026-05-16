<x-layout title="List Prodi">
    <h1>List Prodi</h1>

    <table class="table">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Prodi</th>
                <th>Nama Kaprodi</th>
                <th>Nama Fakultas</th>
                <th>Photo Prodi</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($prodi as $item )
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $item->nama_prodi }}</td>
                    <td>{{ $item->nama_kaprodi }}</td>
                    <td>{{ $item->fakultas->name }}</td>
                    <td>
                        <img src="{{ asset('storage/'. $item->photo_kaprodi) }}" class="img-thumbnail w-25">
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

</x-layout>