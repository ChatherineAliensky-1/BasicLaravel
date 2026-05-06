<x-layout>
  <div>
    <h1>Edit Fakultas</h1>

    {{-- Buat Form dengan pilihan form post --}}
    <form action="/fakultas/{{ $fakultas -> id }}" method="post">
      {{-- Keamanan csrf --}}
      @csrf 
      {{-- Method dilihat dari route list di cmd --}}
      @method('PUT') 
      <div class="form-group">
        <input 
              name= "name_fakultas"
              type="text"
              value="{{ $fakultas -> name }}" {{-- value ini agar saat klik edit langsung muncul data --}}
              class="form-control"
              placeholder="Nama Fakultas">
      </div>

      <div class="form-group">
        <input 
              name= "name_dekan"
              type="text"
              value="{{ $fakultas -> dekan }}"
              class="form-control"
              placeholder="Nama dekan">
      </div>

      <button type="submit" class="btn btn-primary">
        Update
      </button>

    </form>
  </div>
  
</x-layout>