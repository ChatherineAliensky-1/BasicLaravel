<x-layout>
  <div>
    <h1>Add Fakultas</h1>

    {{-- Buat Form dengan pilihan form post --}}
    <form action="/fakultas" method="post">
      {{-- Keamanan csrf --}}
      @csrf 

      <div class="form-group">
        <input 
              name= "name_fakultas"
              type="text"
              class="form-control"
              placeholder="Nama Fakultas">
      </div>

      <div class="form-group">
        <input 
              name= "name_dekan"
              type="text"
              class="form-control"
              placeholder="Nama dekan">
      </div>

      <button type="submit" class="btn btn-primary">
        Simpan
      </button>

    </form>
  </div>
  
</x-layout>