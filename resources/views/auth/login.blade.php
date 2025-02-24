<x-layout.app>
    <div>
        {{ auth()->id() }}
        <h1>Login</h1>
        @if ($message = session()->get('message'))
            <div>{{ $message }}</div>
        @endif
        <form action="{{ route('login') }}" method="post">
            @csrf
            <div>
                <input name="email" placeholder="Email" value="{{ old('email') }}" />
                @error('email')
                    <span>{{ $message }}</span>
                @enderror
            </div>
            <br>
            <div>
                <input type="password" name="password" placeholder="Senha" />
                @error('password')
                    <span>{{ $message }}</span>
                @enderror
            </div>
            <br>
            <button class="btn btn-primary">DaisyUI Button</button>
        </form>
    </div>

</x-layout.app>
