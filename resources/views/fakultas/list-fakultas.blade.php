<x-layout>
    <h1>Fakultas</h1>

    <ul>
    @foreach ($fakultas as $item)
        <li>
            {{$item->id}}|
            {{$item->name}}|
            {{$item->dekan}}
        </li>
       
    @endforeach
    </ul>

    {{-- Cara Menghubungan List Fakultas ke Add fakultas --}}
    <a href="/fakultas/create">Add Fakultas</a>
    <a href="/fakultas/{fakulta}/edit">Edit Fakultas</a>
</x-layout>