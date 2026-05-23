{{-- 23 May 2026 --}}

<x-authentication>

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
    
    <h1>Register</h1>
    <form action="/register" method="POST">
        @csrf

        <input type="text" name="name" placeholder="Name" />
        <input type="email" name="email" placeholder="Email" />
        <input type="password" name="password" placeholder="Password" />
        <input type="password" name="password_confirmation" placeholder="Password Confirmation" />

        <button type="submit">Register</button>
    </form>
</x-authentication>
