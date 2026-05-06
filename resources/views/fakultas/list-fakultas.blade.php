<x-layout>
    <h1>List Fakultas</h1>

    
    <table class="table">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Fakultas</th>
                <th>Nama Dekan</th>
                <th>Aksi</th>
            </tr>
        </thead>
        
        <tbody>
            @foreach ($fakultas as $item)
            <tr>
                <td>{{$loop -> iteration}}</td>
                <td>{{$item -> name}}</td>
                <td>{{$item -> dekan}}</td>
                <td>
                    <a href="/fakultas/{{ $item->id }}">Detail</a>
                    <a href="/fakultas/{{ $item->id }}/edit" class="btn btn-warning">edit</a>
                    
                    <form action="/fakultas/{{ $item->id }}" method="post">
                        @csrf
                        @method("DELETE")
                        <button type="submit" class="btn btn-danger">
                            Hapus
                        </button>
                    </form>

                </td>
            </tr>
            @endforeach
        </tbody>
    </table>


    {{-- <ul>
    @foreach ($fakultas as $item)
        <li>
            {{$item->id}}|
            {{$item->name}}|
            {{$item->dekan}}
        </li>
    @endforeach
    </ul> --}}

    {{-- Cara Menghubungan List Fakultas ke Add fakultas --}}
    <a href="/fakultas/create">Add Fakultas</a>
    <a href="/fakultas/{fakulta}/edit">Edit Fakultas</a>
</x-layout>